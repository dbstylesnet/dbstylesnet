tadam=($(window).width()-40) - (($('.menuMaker').width()*50/100)*2) -  26*2;
tadamH=($(window).height())*50/100-45;
ovsTL = $('.TLpos').offset();
ovsTR = $('.TRpos').offset();
ovsBR = $('.BRpos').offset();
ovsBL = $('.BLpos').offset();
$(window).resize(function() {
        tadam=($(window).width()-40) - (($('.menuMaker').width()*50/100)*2) -  26*2;
        tadamH=($(window).height())*50/100-45;
        ovsTL = $('.TLpos').offset();
        ovsTR = $('.TRpos').offset();
        ovsBR = $('.BRpos').offset();
        ovsBL = $('.BLpos').offset();
});

var startTl = new TimelineMax();

if ( $(window).width() < 516) {

}

$('.mainCont').click(function(){
    if ($(".txField.tx1").width()> 100 || $(".txField.tx2").width()> 100 || $(".txField.tx3").width()> 100 || $(".txField.tx4").width()> 100   ) {
        zwin();
        dajSrodek();
    }
}).children().click(function() {
    return false;
});


$('.beepingDotSize.b1')
.click(function(){
    if ($(".txField.tx1").width()< 100) {
        rozwinI();
    }
    else
        dajSrodek();
}).hover(
    function () {
        TweenLite.to("a.beepingDotSize.b1 span", .5, {opacity:1});

    },
    function () {
        TweenLite.to("a.beepingDotSize.b1 span",.5, {opacity:0});
    }
);

$('.beepingDotSize.b2')
.click(function(){
    if ($(".txField.tx2").width()< 100) {
        rozwinII();
    }
    else
        dajSrodek();
}).hover(
    function () {
        TweenLite.to("a.beepingDotSize.b2 span", .5, {opacity:1});

    },
    function () {
        TweenLite.to("a.beepingDotSize.b2 span",.5, {opacity:0});
    }
);

$('.beepingDotSize.b3')
.click(function(){
    if ($(".txField.tx3").width()< 100) {
        rozwinIII();
    }
    else
        dajSrodek();
}).hover(
    function () {
        TweenLite.to("a.beepingDotSize.b3 span", .5, {opacity:1});

    },
    function () {
        TweenLite.to("a.beepingDotSize.b3 span",.5, {opacity:0});
    }
);

$('.beepingDotSize.b4')
.click(function(){
    if ($(".txField.tx4").width()< 100) {
        rozwinIV();
    }
    else
        dajSrodek();
}).hover(
    function () {
        TweenLite.to("a.beepingDotSize.b4 span", .5, {opacity:1});

    },
    function () {
        TweenLite.to("a.beepingDotSize.b4 span",.5, {opacity:0});
    }
);


startTl.to('.logoMaker', 0, {opacity:0})
.to('a.beepingDotSize span', 0, {opacity:0,visibility:'visible'})
.to('.beepingDot', 0, {opacity:0})
.to('.beepingDot', 0.3, {opacity:1})
.to('.beepingDot', 0.3, {opacity:0})
.to('.beepingDot', 0.3, {opacity:1})
.to('.beepingDot', 0.3, {opacity:0})
.to('.beepingDot', 0.3, {opacity:1})
.to('.beepingDot', 0.3, {opacity:0})
.to('.beepingDot', 0.3, {opacity:1})
.to('.logoMaker', 0.1, {opacity:1})
.to('.beepingDot', 0.1, {opacity:0}, "logoSlide")
.to('.logoCont .l1', 0.4, {left:2, top:-17}, "logoSlide")
.to('.logoCont .l2', 0.4, {left:44, top:-17}, "logoSlide")
.to('.logoCont .l3', 0.4, {left:90, top:-17}, "logoSlide")
.to('.logoCont .l4', 0.4, {left:2}, "logoSlide")
.to('.logoCont .l5', 0.4, {left:46}, "logoSlide")
.to('.logoCont .l6', 0.4, {left:90}, "logoSlide")
.to('.logoCont .l7', 0.4, {left:2, top:73}, "logoSlide")
.to('.logoCont .l8', 0.4, {left:44, top:73}, "logoSlide")
.to('.logoCont .l9', 0.4, {left:91,top:73}, "logoSlide")
.to('.logoMaker', 0.1, {fontSize:61}, "logoSlide")
.to('.menuMaker', 0.1, {display:'block'})
.to('.logoMaker', 1.0, {top:'2%' , left:'2%',margin:0, ease:Elastic.easeInOut.config(3, 4),onComplete:pojawMenu})
.to('.logoMaker', 0, {fontSize:61,onComplete:pojawJezyki});

function pojawMenu(){
    TweenMax.to('.menuMaker',0, {opacity:0,visibility:'visible'});
    TweenLite.to('.menuMaker', 1.5, {opacity:1});
}
function pojawJezyki(){
    TweenMax.to('.langs',0, {opacity:0,visibility:'visible'});
    TweenLite.to('.langs', 2, {opacity:1});
}
function zwin(){
    TweenMax.to('.txField.tx1,.txField.tx2,.txField.tx3,.txField.tx4',0.5, {css:{width:0,height:0,padding:0}},0);
}
function wyzerujOverflow(){
    TweenMax.to('.txField.tx1,.txField.tx2,.txField.tx3,.txField.tx4',0, {overflowY:'hidden'});
}
function dajOverflow(){
    TweenMax.to('.txField.tx1,.txField.tx2,.txField.tx3,.txField.tx4',0, {overflowY:'auto'});
}
function dajSrodek(){
    TweenMax.to('.menuMaker',1, {top: '50%',left:'50%',margin:'-72px 0 0 -350px', ease:Elastic.easeInOut.config(3, 4)});
    zwin();
}

function rozwinI(){
    wyzerujOverflow();
    zwin();
    TweenMax.to('.menuMaker',1, {top:ovsBR.top,left:ovsBR.left, margin:0});
    TweenMax.to('.txField.tx1',1, {css:{width:tadam, height:tadamH,padding:20},ease:Elastic.easeInOut.config(3, 4),onComplete:dajOverflow});
}
function rozwinII(){
    wyzerujOverflow();
    zwin();
    TweenMax.to('.menuMaker',1, {top:ovsBL.top,left:ovsBL.left, margin:0});
    TweenMax.to('.txField.tx2',1, {css:{width:tadam, height:tadamH,padding:20},ease:Elastic.easeInOut.config(3, 4),onComplete:dajOverflow});
}
function rozwinIII(){
    wyzerujOverflow();
    zwin();
    TweenMax.to('.menuMaker',1, {top:ovsTL.top,left:ovsTL.left, margin:0});
    TweenMax.to('.txField.tx3',1, {css:{width:tadam, height:tadamH,padding:20},ease:Elastic.easeInOut.config(3, 4),onComplete:dajOverflow});
}
function rozwinIV(){
    wyzerujOverflow();
    zwin();
    TweenMax.to('.menuMaker',1, {top:ovsTR.top,left:ovsTR.left, margin:0});
    TweenMax.to('.txField.tx4',1, {css:{width:tadam, height:tadamH,padding:20},ease:Elastic.easeInOut.config(3, 4),onComplete:dajOverflow});
}

$(function() {
    $(".langsCont div a")
        .find("span")
        .hide()
        .end()
        .hover(function() {
            $(this).find("span").stop(true, true).fadeIn();
        }, function() {
            $(this).find("span").stop(true, true).fadeOut();
        });
});




