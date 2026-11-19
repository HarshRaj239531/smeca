import { gsap } from 'gsap';

export function initPageEntrance() {
    // 1. Universal Header Navigation Animation
    const header = document.querySelector('header');
    if (header) {
        gsap.fromTo(header,
            { y: -25, opacity: 0 },
            { y: 0, opacity: 1, duration: 0.6, ease: 'power3.out', clearProps: 'all' }
        );
    }

    // 2. Page Header / Banner on any page (About, Products, B2B, Contact, Blog, etc.)
    const firstSection = document.querySelector('main > section:first-of-type') || document.querySelector('section');
    if (firstSection && !firstSection.classList.contains('bg-[#c0caa7]')) {
        // If not home hero (which has its own specialized hero timeline)
        const badge = firstSection.querySelector('span.uppercase, span.tracking-widest, span.tracking-wider');
        const h1 = firstSection.querySelector('h1');
        const subtitle = firstSection.querySelector('p.max-w-2xl, p.leading-relaxed, p.text-slate-600');

        const tl = gsap.timeline({ defaults: { ease: 'power3.out' }, delay: 0.1 });

        if (badge) {
            tl.fromTo(badge,
                { y: 15, opacity: 0, scale: 0.94 },
                { y: 0, opacity: 1, scale: 1, duration: 0.5, ease: 'back.out(1.5)', clearProps: 'all' }
            );
        }

        if (h1) {
            tl.fromTo(h1,
                { y: 25, opacity: 0 },
                { y: 0, opacity: 1, duration: 0.7, clearProps: 'all' },
                badge ? '-=0.3' : 0
            );
        }

        if (subtitle) {
            tl.fromTo(subtitle,
                { y: 18, opacity: 0 },
                { y: 0, opacity: 1, duration: 0.6, clearProps: 'all' },
                '-=0.4'
            );
        }
    }
}
