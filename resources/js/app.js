import Alpine from 'alpinejs';
import './bootstrap';


Alpine.store('profileStore', {
    profile: {},
    ourServices: [],
    ourPortfolio: [],
    mainHero: [],
    aboutUs: [],
});

window.Alpine = Alpine;
Alpine.start();
