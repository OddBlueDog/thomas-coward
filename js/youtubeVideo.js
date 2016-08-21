var gsap = require('gsap'),
    ScrollMagic = require("scrollmagic"),
    $ = require('jquery'),
    videojs = require('video.js');


require('gsapplugin');
require('videojs-youtube');

var setup = function () {

    var myPlayer = videojs('portfolio-video');
    var controller = new ScrollMagic.Controller();
    var scene = new ScrollMagic.Scene({
        triggerHook: "onEnter",
        triggerElement: ".vjs-wrapper"
    });

    scene.on("enter", function (event) {
        myPlayer.play();
    });

    scene.on("leave", function (event) {
        myPlayer.pause();
    });

    scene.addTo(controller);



}

module.exports = setup;