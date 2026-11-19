<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Inquiry;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SmecaWebsiteTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed();
    }

    /**
     * Test the home page returns 200 and displays SMECA brand info.
     */
    public function test_home_page_renders_successfully(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('SMECA INDUSTRY PRIVATE LIMITED');
        $response->assertSee('Ayurvedic');
        $response->assertSee('Aurangabad');
        $response->assertSee('Gaya');
    }

    /**
     * Test About Us page lists all 4 Board of Directors and operating region.
     */
    public function test_about_page_displays_all_directors_and_bihar_presence(): void
    {
        $response = $this->get('/about-us');

        $response->assertStatus(200);
        $response->assertSee('Sanjit Kumar');
        $response->assertSee('Sonu Kumar');
        $response->assertSee('Sarina Kumari');
        $response->assertSee('Yogendra Das');
        $response->assertSee('Aurangabad');
        $response->assertSee('Gaya');
    }

    /**
     * Test the dynamic product listing page.
     */
    public function test_products_page_displays_dynamic_catalog_and_filters(): void
    {
        $response = $this->get('/products');

        $response->assertStatus(200);
        $response->assertSee('SMECA Kumkumadi Miraculous Beauty Tailam');
        $response->assertSee('Enquire Now');

        // Test category filter
        $catResponse = $this->get('/products?category=ayurvedic');
        $catResponse->assertStatus(200);

        // Test search filter
        $searchResponse = $this->get('/products?search=Saffron');
        $searchResponse->assertStatus(200);
    }

    /**
     * Test product detail page.
     */
    public function test_product_detail_page_loads_with_specifications(): void
    {
        $product = Product::first();

        $response = $this->get('/products/' . $product->slug);

        $response->assertStatus(200);
        $response->assertSee($product->name);
        $response->assertSee($product->moq);
    }

    /**
     * Test B2B OEM and Consultancy pages load.
     */
    public function test_services_pages_load_successfully(): void
    {
        $b2b = $this->get('/b2b-oem-services');
        $b2b->assertStatus(200);
        $b2b->assertSee('Third-Party Contract Manufacturing');

        $consultancy = $this->get('/consultancy-marketing');
        $consultancy->assertStatus(200);
        $consultancy->assertSee('Consultancy & Marketing');
    }

    /**
     * Test inquiry submission saves into database.
     */
    public function test_inquiry_submission_stores_record_successfully(): void
    {
        $product = Product::first();

        $payload = [
            'name' => 'Rajesh Sharma',
            'company_name' => 'Patna Wellness Retail',
            'phone' => '+91 94310 12345',
            'email' => 'rajesh@patnawellness.com',
            'inquiry_type' => 'product',
            'product_id' => $product->id,
            'product_name' => $product->name,
            'message' => 'We want to order 500 units of Kumkumadi Tailam for our Gaya & Aurangabad stores.',
        ];

        $response = $this->post('/contact-us', $payload);

        $response->assertSessionHas('success_message');
        $response->assertRedirect();

        $this->assertDatabaseHas('inquiries', [
            'name' => 'Rajesh Sharma',
            'email' => 'rajesh@patnawellness.com',
            'phone' => '+91 94310 12345',
            'inquiry_type' => 'product',
            'status' => 'new',
        ]);
    }

    /**
     * Test admin inquiries management dashboard loads and shows inquiries.
     */
    public function test_admin_inquiries_dashboard_renders(): void
    {
        $user = \App\Models\User::first() ?? \App\Models\User::factory()->create();

        Inquiry::create([
            'name' => 'Vikas Verma',
            'company_name' => 'Verma Naturals',
            'phone' => '+91 98000 11122',
            'email' => 'vikas@vermanaturals.in',
            'inquiry_type' => 'b2b_oem',
            'product_name' => 'Herbal Hair Oil OEM',
            'message' => 'Requesting private label contract quotation.',
            'status' => 'new',
        ]);

        $response = $this->actingAs($user)->get('/admin/inquiries');

        $response->assertStatus(200);
        $response->assertSee('Vikas Verma');
        $response->assertSee('Verma Naturals');
    }

    /**
     * Test admin login and authentication flow.
     */
    public function test_admin_login_redirects_and_authenticates(): void
    {
        // 1. Guest redirected to login
        $guest = $this->get('/admin');
        $guest->assertRedirect('/admin/login');

        $loginPage = $this->get('/admin/login');
        $loginPage->assertStatus(200);
        $loginPage->assertSee('Administrative Access');

        // 2. Successful login with seeded admin
        $loginSubmit = $this->post('/admin/login', [
            'email' => 'admin@smeca.com',
            'password' => 'admin@123',
        ]);

        $loginSubmit->assertRedirect('/admin/dashboard');
        $this->assertAuthenticated();

        // 3. Logout
        $logout = $this->post('/admin/logout');
        $logout->assertRedirect('/admin/login');
        $this->assertGuest();
    }

    /**
     * Test admin advanced features: products view, CSV export, and manual lead entry.
     */
    public function test_admin_advanced_features(): void
    {
        $user = \App\Models\User::first() ?? \App\Models\User::factory()->create();

        // 1. Admin Products Catalog View
        $prodResponse = $this->actingAs($user)->get('/admin/products');
        $prodResponse->assertStatus(200);
        $prodResponse->assertSee('Active Formulations');

        // 2. CSV Export
        $exportResponse = $this->actingAs($user)->get('/admin/inquiries/export');
        $exportResponse->assertStatus(200);
        $exportResponse->assertHeader('Content-Type', 'text/csv; charset=UTF-8');

        // 3. Manual Lead Logging
        $manualLead = $this->actingAs($user)->post('/admin/inquiries/manual', [
            'name' => 'Govind Jha',
            'company_name' => 'Mithila Retailers',
            'phone' => '+91 94311 22334',
            'email' => 'govind@mithilaretail.com',
            'inquiry_type' => 'distributorship',
            'product_name' => 'Super Stockist Inquiry',
            'status' => 'in_discussion',
            'message' => 'Interested in super stockist distribution across North Bihar.',
        ]);

        $manualLead->assertRedirect();
        $this->assertDatabaseHas('inquiries', [
            'name' => 'Govind Jha',
            'email' => 'govind@mithilaretail.com',
            'status' => 'in_discussion',
        ]);
    }

    /**
     * Test admin appearance customizer, modular partials, and white sidebar layout.
     */
    public function test_admin_appearance_and_modular_layout(): void
    {
        $user = \App\Models\User::first() ?? \App\Models\User::factory()->create();

        $response = $this->actingAs($user)->get('/admin/dashboard');

        $response->assertStatus(200);
        // Verify pure white sidebar elements
        $response->assertSee('adminSidebar');
        $response->assertSee('bg-white text-[#203a31]', false);
        $response->assertSee('Secure Sign Out');
        // Verify theme customizer drawer & options
        $response->assertSee('themeCustomizerDrawer');
        $response->assertSee('Appearance Studio');
        $response->assertSee('Light Executive');
        $response->assertSee('Midnight Dark');
        $response->assertSee('Ayurvedic Forest');
        $response->assertSee('Plus Jakarta Sans');
        $response->assertSee('Playfair Display');
        $response->assertSee('smeca_admin_customizer_v2');

        // Verify top executive header (matching reference design)
        $response->assertSee('SMECA INDUSTRY PVT. LTD.');
        $response->assertSee('headerLiveTime');
        $response->assertSee('INQUIRIES DESK');

        // Verify executive vibrant metric cards (matching reference design)
        $response->assertSee('stat-card-gradient-1');
        $response->assertSee('stat-card-gradient-2');
        $response->assertSee('stat-card-glass');
    }

    /**
     * Test dynamic SEO sitemap generates valid XML.
     */
    public function test_sitemap_xml_generates_valid_response(): void
    {
        $response = $this->get('/sitemap.xml');

        $response->assertStatus(200);
        $response->assertHeader('Content-Type', 'text/xml; charset=utf-8');
        $response->assertSee('<urlset', false);
        $response->assertSee(url('/'), false);
    }

    /**
     * Test the blog listing page renders with magazine layout.
     */
    public function test_blog_index_renders_with_magazine_hero(): void
    {
        $response = $this->get('/blog');

        $response->assertStatus(200);
        $response->assertSee('BLOG');
        $response->assertSee('01');
        $response->assertSee('About Author');
        $response->assertSee('PERFUMES & SCENTS', false);
        $response->assertSee('Ayurvedic Skincare Tips');
    }

    /**
     * Test a specific blog article page renders.
     */
    public function test_blog_article_detail_renders(): void
    {
        $response = $this->get('/blog/ayurvedic-skincare-tips-reviews-formulation-advice');

        $response->assertStatus(200);
        $response->assertSee('Ayurvedic Skincare Tips');
        $response->assertSee('Dr. Sarina Kumari');
        $response->assertSee('SMECA Quality');
    }

    /**
     * Test navbar displays Blog link.
     */
    public function test_navbar_displays_blog_link(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee(route('blog.index'));
        $response->assertSee('Blog');
    }
}
