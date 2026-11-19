import { gsap } from 'gsap';

export function initAccordion() {
    const detailsElements = document.querySelectorAll('details');

    detailsElements.forEach((detail) => {
        const summary = detail.querySelector('summary');
        const content = detail.querySelector('div:not(.summary)');
        const icon = summary?.querySelector('span svg, span');

        if (!summary || !content) return;

        summary.addEventListener('click', (e) => {
            e.preventDefault();

            const isOpen = detail.hasAttribute('open');

            if (isOpen) {
                // Closing animation
                gsap.to(content, {
                    height: 0,
                    opacity: 0,
                    duration: 0.3,
                    ease: 'power2.inOut',
                    onComplete: () => {
                        detail.removeAttribute('open');
                        content.style.height = '';
                        content.style.opacity = '';
                    }
                });
                if (icon) {
                    gsap.to(icon, { rotation: 0, duration: 0.3, ease: 'power2.out' });
                }
            } else {
                // Opening animation
                detail.setAttribute('open', '');
                const targetHeight = content.scrollHeight;

                gsap.fromTo(content,
                    { height: 0, opacity: 0 },
                    {
                        height: targetHeight,
                        opacity: 1,
                        duration: 0.4,
                        ease: 'power3.out',
                        onComplete: () => {
                            content.style.height = 'auto';
                        }
                    }
                );

                if (icon) {
                    gsap.to(icon, { rotation: 180, duration: 0.3, ease: 'power2.out' });
                }
            }
        });
    });
}
