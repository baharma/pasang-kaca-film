import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();



document.addEventListener('alpine:init', () => {
    Alpine.store('profileStore', {
        profile: [],
        ourServices: [],
        ourPortfolio: [],
        mainHero: [],
        aboutUs: [],
    });
});
