import { initScrollProgress } from './animations/progress.js';
import { initPageEntrance } from './animations/page-entrance.js';
import { initHeroAnimation } from './animations/hero.js';
import { initScrollReveals } from './animations/scroll-reveals.js';
import { initMagneticElements } from './animations/magnetic.js';
import { initMicroInteractions } from './animations/micro-interactions.js';
import { initAccordion } from './animations/accordion.js';
import { initModalAnimation } from './animations/modal.js';

function startAnimations() {
    // 1. Universal Page Entrance (Nav bar & Page Banner across every page)
    initPageEntrance();

    // 2. Reading / Scroll Progress Bar at top of viewport
    initScrollProgress();

    // 3. Hero Master Timeline & 3D Packaging Levitation / Tilt (Homepage)
    initHeroAnimation();

    // 4. Scroll-Triggered Stagger Reveals across every section and card grid
    initScrollReveals();

    // 5. Magnetic Button Physics (GSAP quickTo & elastic release)
    initMagneticElements();

    // 6. Framer Motion Spring Physics (Card hover elevation, pill pulse, drawer)
    initMicroInteractions();

    // 7. Smooth GSAP Accordion for FAQs
    initAccordion();

    // 8. GSAP Modal Opening & Closing Spring Transitions
    initModalAnimation();
}

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', startAnimations);
} else {
    startAnimations();
}
