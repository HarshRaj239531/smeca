import { gsap } from 'gsap';

export function initHeroAnimation() {
    const heroSection = document.querySelector('section.relative.bg-\\[\\#c0caa7\\]');
    if (!heroSection) return;

    // Master Hero Entrance Timeline
    const tl = gsap.timeline({
        defaults: { ease: 'power3.out' },
        delay: 0.1
    });

    // 1. Hero Headline reveal
    const heroTitle = heroSection.querySelector('h1');
    if (heroTitle) {
        tl.fromTo(heroTitle,
            { y: 35, opacity: 0 },
            { y: 0, opacity: 1, duration: 0.8, ease: 'power4.out', clearProps: 'all' }
        );
    }

    // 2. Subtitle description
    const heroSubtitle = heroSection.querySelector('p.text-sm, p.text-base');
    if (heroSubtitle) {
        tl.fromTo(heroSubtitle,
            { y: 20, opacity: 0 },
            { y: 0, opacity: 1, duration: 0.6, clearProps: 'all' },
            '-=0.5'
        );
    }

    // 3. Pricing Callout
    const priceLine = heroSection.querySelector('.text-xl, .text-2xl')?.closest('p');
    if (priceLine) {
        tl.fromTo(priceLine,
            { scale: 0.94, opacity: 0, y: 15 },
            { scale: 1, opacity: 1, y: 0, duration: 0.6, ease: 'back.out(1.5)', clearProps: 'all' },
            '-=0.4'
        );
    }

    // 4. Hero CTA Button
    const heroBtn = heroSection.querySelector('button[onclick*="openEnquiryModal"]');
    if (heroBtn) {
        tl.fromTo(heroBtn,
            { y: 15, opacity: 0, scale: 0.96 },
            { y: 0, opacity: 1, scale: 1, duration: 0.5, ease: 'back.out(1.4)', clearProps: 'all' },
            '-=0.3'
        );
    }

    // 5. Social Outline Icons stagger
    const socialIcons = heroSection.querySelectorAll('a[aria-label]');
    if (socialIcons.length > 0) {
        tl.fromTo(socialIcons,
            { y: 12, opacity: 0, scale: 0.85 },
            { y: 0, opacity: 1, scale: 1, duration: 0.45, stagger: 0.06, ease: 'back.out(2)', clearProps: 'all' },
            '-=0.3'
        );
    }

    // 6. Scroll indicator
    const scrollIndicator = heroSection.querySelector('a[href="#overview"]');
    if (scrollIndicator) {
        tl.fromTo(scrollIndicator,
            { opacity: 0, y: 10 },
            { opacity: 1, y: 0, duration: 0.5, clearProps: 'all' },
            '-=0.2'
        );
    }

    // =========================================================================
    // 3D Packaging Box Experience (Levitation + Interactive 3D Perspective Tilt)
    // =========================================================================
    const boxContainer = heroSection.querySelector('img[src*="smeca-seamless-box.png"]')?.parentElement;
    const boxImg = heroSection.querySelector('img[src*="smeca-seamless-box.png"]');

    if (boxContainer && boxImg) {
        // Initial entrance
        tl.fromTo(boxContainer,
            { scale: 0.9, opacity: 0, y: 40 },
            { scale: 1, opacity: 1, y: 0, duration: 0.9, ease: 'power3.out' },
            '-=0.8'
        );

        // Continuous gentle levitation (floating sine wave)
        gsap.to(boxImg, {
            y: -12,
            rotationZ: 1,
            duration: 3.5,
            repeat: -1,
            yoyo: true,
            ease: 'sine.inOut',
        });

        // Interactive 3D Tilt on Mousemove over the hero area (desktop only)
        if (window.matchMedia('(pointer: fine)').matches) {
            boxContainer.style.transformStyle = 'preserve-3d';
            boxContainer.style.perspective = '1200px';

            const tiltX = gsap.quickTo(boxContainer, 'rotationX', { duration: 0.45, ease: 'power2.out' });
            const tiltY = gsap.quickTo(boxContainer, 'rotationY', { duration: 0.45, ease: 'power2.out' });

            heroSection.addEventListener('mousemove', (e) => {
                const rect = heroSection.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;

                const centerX = rect.width / 2;
                const centerY = rect.height / 2;

                const rotateXVal = -((y - centerY) / centerY) * 12;
                const rotateYVal = ((x - centerX) / centerX) * 14;

                tiltX(rotateXVal);
                tiltY(rotateYVal);
            });

            heroSection.addEventListener('mouseleave', () => {
                tiltX(0);
                tiltY(0);
            });
        }
    }
}
