import { animate } from 'motion';

export function initMicroInteractions() {
    // 1. Mobile Menu Drawer Spring Physics
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    const menuIcon = document.getElementById('menuIcon');
    const closeIcon = document.getElementById('closeIcon');

    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.onclick = (e) => {
            e.preventDefault();
            const isHidden = mobileMenu.classList.contains('hidden');

            if (isHidden) {
                mobileMenu.classList.remove('hidden');
                menuIcon?.classList.add('hidden');
                closeIcon?.classList.remove('hidden');

                animate(
                    mobileMenu,
                    { opacity: [0, 1], y: [-15, 0] },
                    { type: 'spring', stiffness: 220, damping: 20 }
                );

                const links = mobileMenu.querySelectorAll('a, button');
                links.forEach((link, idx) => {
                    animate(
                        link,
                        { opacity: [0, 1], x: [-12, 0] },
                        { delay: 0.03 * idx, type: 'spring', stiffness: 250, damping: 22 }
                    );
                });
            } else {
                animate(
                    mobileMenu,
                    { opacity: [1, 0], y: [0, -10] },
                    { duration: 0.2 }
                ).then(() => {
                    mobileMenu.classList.add('hidden');
                    menuIcon?.classList.remove('hidden');
                    closeIcon?.classList.add('hidden');
                });
            }
        };
    }

    // 2. Button Spring Physics on Hover & Press (Desktop)
    if (window.matchMedia('(pointer: fine)').matches) {
        const actionButtons = document.querySelectorAll(
            'button.bg-blue-600, a.bg-blue-600, .category-filter-btn, header nav a'
        );

        actionButtons.forEach((btn) => {
            btn.addEventListener('mouseenter', () => {
                animate(btn, { scale: 1.025 }, { type: 'spring', stiffness: 400, damping: 17 });
            });
            btn.addEventListener('mouseleave', () => {
                animate(btn, { scale: 1 }, { type: 'spring', stiffness: 350, damping: 20 });
            });
            btn.addEventListener('mousedown', () => {
                animate(btn, { scale: 0.97 }, { duration: 0.1 });
            });
            btn.addEventListener('mouseup', () => {
                animate(btn, { scale: 1.025 }, { type: 'spring', stiffness: 400, damping: 15 });
            });
        });

        // 3. Card Elevation on Hover
        const hoverCards = document.querySelectorAll(
            '#overview .grid > div, ' +
            '.grid.grid-cols-1.sm\\:grid-cols-2.lg\\:grid-cols-3 > div, ' +
            '#testimonials .grid > div'
        );

        hoverCards.forEach((card) => {
            card.addEventListener('mouseenter', () => {
                animate(card, { y: -5 }, { type: 'spring', stiffness: 300, damping: 20 });
            });
            card.addEventListener('mouseleave', () => {
                animate(card, { y: 0 }, { type: 'spring', stiffness: 300, damping: 20 });
            });
        });

        // 4. Badges & Category Filter Pills Hover
        const pills = document.querySelectorAll(
            'span.uppercase, span.rounded-xs, span.rounded-full, .category-filter-btn'
        );
        pills.forEach((pill) => {
            pill.addEventListener('mouseenter', () => {
                animate(pill, { scale: 1.05 }, { type: 'spring', stiffness: 350, damping: 15 });
            });
            pill.addEventListener('mouseleave', () => {
                animate(pill, { scale: 1 }, { type: 'spring', stiffness: 300, damping: 20 });
            });
        });
    }

    // 5. Flash Message Spring Entrance
    const flashAlert = document.querySelector('.max-w-7xl.mx-auto.px-6.sm\\:px-10.mt-2');
    if (flashAlert) {
        animate(
            flashAlert,
            { y: [-20, 0], opacity: [0, 1], scale: [0.96, 1] },
            { type: 'spring', stiffness: 220, damping: 18 }
        );
    }
}
