import { gsap } from 'gsap';

export function initMagneticElements() {
    // Only on desktop/fine pointers
    if (!window.matchMedia('(pointer: fine)').matches) return;

    // Target buttons, action links, and social icons
    const magneticTargets = document.querySelectorAll(
        'button, a.bg-blue-600, a.rounded-xs, [data-magnetic], .magnetic-item, header nav a, header button'
    );

    magneticTargets.forEach((el) => {
        // Exclude mobile menu toggles or full-width elements if any
        if (el.offsetWidth > 400 || el.closest('#mobileMenu')) return;

        const xTo = gsap.quickTo(el, 'x', { duration: 0.35, ease: 'power2.out' });
        const yTo = gsap.quickTo(el, 'y', { duration: 0.35, ease: 'power2.out' });

        // Check for inner text/icon to create multi-layer depth
        const inner = el.querySelector('span, svg') || null;
        let innerXTo = null;
        let innerYTo = null;
        if (inner) {
            innerXTo = gsap.quickTo(inner, 'x', { duration: 0.35, ease: 'power2.out' });
            innerYTo = gsap.quickTo(inner, 'y', { duration: 0.35, ease: 'power2.out' });
        }

        el.addEventListener('mousemove', (e) => {
            const rect = el.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;

            // Pull element towards cursor
            xTo(x * 0.35);
            yTo(y * 0.35);

            if (innerXTo && innerYTo) {
                innerXTo(x * 0.15);
                innerYTo(y * 0.15);
            }
        });

        el.addEventListener('mouseleave', () => {
            gsap.to(el, {
                x: 0,
                y: 0,
                duration: 0.7,
                ease: 'elastic.out(1.1, 0.4)'
            });

            if (inner) {
                gsap.to(inner, {
                    x: 0,
                    y: 0,
                    duration: 0.7,
                    ease: 'elastic.out(1.1, 0.4)'
                });
            }
        });
    });
}
