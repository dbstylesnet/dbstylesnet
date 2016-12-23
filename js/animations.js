// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());


function detectmob() { 
 if( navigator.userAgent.match(/Android/i)
 || navigator.userAgent.match(/webOS/i)
 || navigator.userAgent.match(/iPhone/i)
 || navigator.userAgent.match(/iPad/i)
 || navigator.userAgent.match(/iPod/i)
 || navigator.userAgent.match(/BlackBerry/i)
 || navigator.userAgent.match(/Windows Phone/i)
 ){
      alert('to mobile');
  }
 else {
      alert('nie mobile');
  }
}

detectmob();



// mobile check
function isMobile(){
    if(!(/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera)){      

        //add class
        var d = document.getElementById("site");
        d.className = d.className + " not-mobile";             

        //smooth scroll
        function smoothScroll() {
            var a = $(window);
            a.on("mousewheel DOMMouseScroll", function(b) {
                b.preventDefault();
                b = b.originalEvent.wheelDelta / 80 || -b.originalEvent.detail / 3;
                b = a.scrollTop() - parseInt(280 * b);
                TweenMax.to(a, 1.1, {
                    scrollTo: {
                        y: b,
                        autoKill: !0
                    },
                    ease: Power1.easeOut,
                    overwrite: 10
                })
            })
        }
        smoothScroll();

        // top animation
        var startT = new TimelineMax();

        startT
        .to('.parallaxParent', 1.5, {opacity:1,ease:Linear.easeInOut})
        .to('a.logo img', 2.5, {opacity:0.2,ease:Linear.easeInOut})           
        .to('.parallaxParent', 1, {opacity:.3,ease:Linear.easeInOut})
        .to('a.logo img', .8, { marginTop: '100px', marginLeft: '10%', top:0, left:0,opacity:1, rotation:0,scale:1,ease:Back.easeOut })    
        .to('.contactNfo', .8, {opacity:1,ease:Linear.easeInOut},5)    
        .fromTo('h2.contents', 1, {left: '30px',opacity:0}, {left:'0',opacity:1,ease:Power2.easeOut} )
        .staggerFromTo('ul.contents li', .6, {opacity:0,x:-300},{opacity:1,x:0,ease:Power2.easeOut},0.05)
        .to('#services', 1.2, {left:'50%',ease:Power2.easeOut},6.4)       
        .to('#services', .7, {top:'50%',ease:Power1.easeInOut},6.9)    
        .to('a.logo img', .8, { marginLeft: '5%',marginTop: '50px',left:'-100px',scale:.5,ease:Back.easeOut },6.9) 
        .to('.contactNfo', .8, { marginRight: '5%',marginTop: '85px',ease:Back.easeOut},6.9);

        // top scroll
        var controller = new ScrollMagic.Controller({globalSceneOptions: {triggerHook: "onEnter", duration: "200%"}});

        new ScrollMagic.Scene({triggerElement: "#picBg"})
                        .setTween("#picBg > div", {y: "80%", ease: Linear.easeNone})
                        .addTo(controller);

        //bottom scroll
        $(function () { 
            var controller = new ScrollMagic.Controller();

            var wipeAnimation = new TimelineMax()
                .fromTo("div.panel.infobox", 1, {y: "-100%"}, {y: "0%", ease: Linear.easeNone}); // in from top

            new ScrollMagic.Scene({
                    triggerElement: "#pinContainer",
                    triggerHook: "onLeave",
                    duration: "70%"
                })
                .setPin("#pinContainer")
                .setTween(wipeAnimation)
                .addTo(controller);
        });

    }else{

        //add class            
        var d = document.getElementById("site");
        d.className = d.className + " is-mobile";  

    }
    
}

isMobile();



