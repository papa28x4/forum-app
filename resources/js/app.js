import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

import Choices from 'choices.js';

window.choices = (element) => {
    return new Choices(element,{
        maxItemCount: 3,
        removeItemButton: true
    });
}

Alpine.start(); //This must come last
