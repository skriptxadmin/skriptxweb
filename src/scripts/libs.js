require('bootstrap');

const WOW = require('wowjs').WOW;

const wowOptions = {
    boxClass:     'wow',      // animated element css class (default is wow)
    animateClass: 'animate__animated', 
}

new WOW().init(wowOptions);

