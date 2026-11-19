import { gsap } from 'gsap';

export function initScrollReveals() {
    if (!('IntersectionObserver' in window)) return;

    // 1. Reveal Section Header Blocks (Eyebrows, H2, Subtitles) across all pages
    const sectionHeaders = document.querySelectorAll(
        'section .text-center.max-w-3xl, ' +
        'section .max-w-2xl.space-y-2, ' +
        'section .space-y-3.mb-14, ' +
        'section .space-y-4:not(:first-child)'
    );

    const headerObserver = new IntersectionObserver((entries, obs) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                const target = entry.target;
                obs.unobserve(target);

                gsap.fromTo(target.children,
                    { opacity: 0, y: 25 },
                    {
                        opacity: 1,
                        y: 0,
                        duration: 0.7,
                        stagger: 0.12,
                        ease: 'power3.out',
                        clearProps: 'all'
                    }
                );
            }
        });
    }, { rootMargin: '0px 0px -40px 0px', threshold: 0.1 });

    sectionHeaders.forEach((header) => headerObserver.observe(header));

    // 2. Reveal Card Grids across all pages
    const gridContainers = document.querySelectorAll(
        '#overview .grid, ' +
        '.grid.grid-cols-1.sm\\:grid-cols-2.lg\\:grid-cols-3, ' +
        '.grid.grid-cols-1.sm\\:grid-cols-2.lg\\:grid-cols-4, ' +
        '.grid.grid-cols-1.md\\:grid-cols-2, ' +
        '.grid.grid-cols-1.md\\:grid-cols-3, ' +
        '.grid.grid-cols-2.md\\:grid-cols-4, ' +
        '#testimonials .grid'
    );

    const gridObserver = new IntersectionObserver((entries, obs) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                const grid = entry.target;
                obs.unobserve(grid);

                const items = Array.from(grid.children);
                if (items.length > 0) {
                    gsap.fromTo(items,
                        { opacity: 0, y: 35 },
                        {
                            opacity: 1,
                            y: 0,
                            duration: 0.75,
                            stagger: 0.09,
                            ease: 'power3.out',
                            clearProps: 'all'
                        }
                    );
                }
            }
        });
    }, { rootMargin: '0px 0px -40px 0px', threshold: 0.08 });

    gridContainers.forEach((grid) => gridObserver.observe(grid));

    // 3. CTA & Contact Highlight Banners across all pages
    const banners = document.querySelectorAll(
        'section .bg-\\[\\#f6f8f3\\].border.border-stone-200, ' +
        'section .rounded-2xl.border, ' +
        'section .rounded-3xl.border'
    );

    const bannerObserver = new IntersectionObserver((entries, obs) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                const banner = entry.target;
                // Exclude small nested cards
                if (banner.closest('.grid')) return;
                obs.unobserve(banner);

                gsap.fromTo(banner,
                    { opacity: 0, y: 30, scale: 0.98 },
                    {
                        opacity: 1,
                        y: 0,
                        scale: 1,
                        duration: 0.8,
                        ease: 'power3.out',
                        clearProps: 'all'
                    }
                );
            }
        });
    }, { rootMargin: '0px 0px -40px 0px', threshold: 0.1 });

    banners.forEach((banner) => bannerObserver.observe(banner));
}
