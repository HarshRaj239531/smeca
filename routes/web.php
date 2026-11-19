<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InquiryAdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - SMECA INDUSTRY PRIVATE LIMITED
|--------------------------------------------------------------------------
*/

// Public Corporate & Brand Pages
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [AboutController::class, 'index'])->name('about');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{slug}', [ProductController::class, 'show'])->name('products.show');
Route::get('/b2b-oem-services', [ServiceController::class, 'b2b'])->name('services.b2b');
Route::get('/consultancy-marketing', [ServiceController::class, 'consultancy'])->name('services.consultancy');
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact-us', [ContactController::class, 'store'])->name('contact.store');

// Dynamic SEO Sitemap
Route::get('/sitemap.xml', function () {
    $products = \App\Models\Product::select('slug', 'updated_at')->get();
    return response()->view('pages.sitemap', compact('products'))
        ->header('Content-Type', 'text/xml; charset=utf-8');
})->name('sitemap');

// Admin Authentication & Operations Portal
Route::prefix('admin')->group(function (): void {
    // Guest Authentication Routes
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');

    // Root /admin shortcut handler
    Route::get('/', function () {
        return auth()->check()
            ? redirect()->route('admin.dashboard')
            : redirect()->route('admin.login');
    });

    // Protected Admin Routes (Requires Auth)
    Route::middleware('auth')->group(function (): void {
        Route::get('/dashboard', [InquiryAdminController::class, 'index'])->name('admin.dashboard');
        Route::get('/inquiries', [InquiryAdminController::class, 'index'])->name('admin.inquiries');
        Route::patch('/inquiries/{inquiry}/status', [InquiryAdminController::class, 'updateStatus'])->name('admin.inquiries.status');
        Route::delete('/inquiries/{inquiry}', [InquiryAdminController::class, 'destroy'])->name('admin.inquiries.destroy');
        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
    });
});
