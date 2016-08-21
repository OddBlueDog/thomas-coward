var gsap = require('gsap'),
    ScrollMagic = require("scrollmagic"),
    $ = require('jquery');

require('gsapplugin');

var setup = function() {

    var height = $(window).height() * 0.8;
    $('.home-banner, .home-banner__fake-space').height(height);

    var controller = new ScrollMagic.Controller();

    var backgroundParallax = new ScrollMagic.Scene({
        duration: window.innerHeight * 0.8
    });

    var scrollAnimation = new TimelineMax()
        .to(".home-banner__img", 1, {y: -200, force3D: true, ease: Linear.easeNone}, 0)
        .to(".home-banner__color-mask", 1, {autoAlpha: 1, force3D: true, ease: Linear.easeNone}, 0);

    backgroundParallax.addTo(controller).setTween(scrollAnimation);

}

module.exports = setup;
