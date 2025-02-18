import Alpine from 'alpinejs';
import './bootstrap';
import axios from 'axios';

window.axios = axios;

// Retrieve the CSRF token first
const csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
window.axios.defaults.headers.common["X-CSRF-TOKEN"] = csrfToken;

Alpine.store('profileStore', {
    profile: {},
    ourServices: [],
    ourPortfolio: [],
    aboutUs: [],
});

Alpine.magic('imageApex', () => {
    return (image) => {
        return `https://api.apexhub.id/assets/${image}`
    };
});

window.Alpine = Alpine;
Alpine.start();
