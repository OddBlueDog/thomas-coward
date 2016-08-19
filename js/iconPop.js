var gsap = require('gsap'),
    ScrollMagic = require("scrollmagic"),
    $ = require('jquery');
    
require('gsapplugin');

var setup = function () {
    var controller = new ScrollMagic.Controller();

    $('.fa-pop').each(function () {
        new ScrollMagic.Scene({
            triggerElement: this,
            triggerHook: 0.7,
            duration: 0
        })
            .addTo(controller).setTween(this, 0.3, {scale: 1.25, color: '#00bc85', ease: Power2.easeIn});
    });
}

module.exports = setup;