import { gsap } from 'gsap';

export function initModalAnimation() {
    const modal = document.getElementById('enquiryModal');
    if (!modal) return;

    const modalBox = modal.querySelector('.relative.bg-\\[\\#f6f8f3\\]') || modal.firstElementChild;

    window.openEnquiryModal = function (productName = 'SMECA Skincare Box', productId = null, type = 'product') {
        const nameInput = document.getElementById('modalProductName');
        const idInput = document.getElementById('modalProductId');
        const typeInput = document.getElementById('modalInquiryType');
        const messageInput = document.getElementById('modalMessage');

        if (nameInput) nameInput.value = productName;
        if (idInput) idInput.value = productId || '';
        if (typeInput) typeInput.value = type;
        if (messageInput) {
            messageInput.placeholder = `Please share your quantity requirement, delivery location, or private label details for ${productName}...`;
        }

        document.body.classList.add('overflow-hidden');

        // Reveal modal container
        modal.classList.remove('hidden');
        modal.style.display = 'flex';

        // Animate overlay backdrop
        gsap.fromTo(modal,
            { opacity: 0 },
            { opacity: 1, duration: 0.25, ease: 'power2.out' }
        );

        // Animate modal content card with spring pop
        if (modalBox) {
            gsap.fromTo(modalBox,
                { scale: 0.9, y: 35, opacity: 0 },
                { scale: 1, y: 0, opacity: 1, duration: 0.45, ease: 'power4.out' }
            );
        }
    };

    window.closeEnquiryModal = function () {
        if (!modal) return;

        // Animate modal content out
        if (modalBox) {
            gsap.to(modalBox, {
                scale: 0.94,
                y: 20,
                opacity: 0,
                duration: 0.22,
                ease: 'power2.in'
            });
        }

        // Animate overlay out
        gsap.to(modal, {
            opacity: 0,
            duration: 0.25,
            ease: 'power2.in',
            onComplete: () => {
                modal.classList.add('hidden');
                modal.style.display = '';
                modal.style.opacity = '';
                document.body.classList.remove('overflow-hidden');
            }
        });
    };

    modal.addEventListener('click', function (e) {
        if (e.target === this) {
            window.closeEnquiryModal();
        }
    });

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
            window.closeEnquiryModal();
        }
    });
}
