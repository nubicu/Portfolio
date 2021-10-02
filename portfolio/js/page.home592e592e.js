$(document).ready(function () {
    // HOME INTRO CAROUSEL
    var introSlider = $("#homeIntroSlider"),
        sAgent = window.navigator.userAgent,
        Idx = sAgent.indexOf("MSIE");
    if (Idx > 0 || !!navigator.userAgent.match(/Trident\/7\./)) {
        var owlAnimateIn = false,
            owlAnimateOut = false;
    } else {
        var owlAnimateIn = "fadeInUp",
            owlAnimateOut = "fadeOutDown";
    }
    introSlider.owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        touchDrag: false,
        mouseDrag: false,
        dots: false,
        URLhashListener: true,
        startPosition: 'URLHash',
        onTranslate: activePagination
        // animateIn: owlAnimateIn,
        // animateOut: owlAnimateOut
    });

    function activePagination() {
        var dataHash = window.location.hash;
        $("#sliderPagination a").removeClass("active");
        $("#sliderPagination a[data-hash=" + "'" + dataHash + "'" + "]").addClass("active");
    }

    // HOME INTRO MOBILE GRAPHIC
    // Points Timeline
    var screenPointsTl = new TimelineMax({
            repeat: -1,
            yoyo: true,
            delay: 7
        }),
        points = $(".screenPoints");
    screenPointsTl.staggerTo(points, 1, {
        ease: Back.easeInOut.config(1.7),
        autoAlpha: 1
    }, 0.3);

    // Screen Draw Timeline
    var introTl = new TimelineMax(),
        IntroBgLines = $(".homeIntro__background .verBgLines__Light")
    IntroDiagramParent = $(".introDiagram"),
        introDiagram = $("#introDiagram"),
        mobileBodyDraw = $(".mobileBodyDraw"),
        mobileScreenImg = $("#mobileScreenImg, #mobileScreenRef"),
        centralBitcoin = $("#centralBitcoin"),
        lineTrue1 = $(".mobileScreen__a"),
        circleLineTrue1 = $("#circleLineTrue1"),
        lineTrue2 = $(".mobileScreen__c"),
        circleLineTrue2 = $("#circleLineTrue2"),
        lineTrue3 = $(".mobileScreen__d"),
        circleLineTrue3 = $("#circleLineTrue3"),
        lineReverse1 = $(".mobileScreen__b"),
        circleLineReverse1 = $("#circleLineReverse1"),
        lineReverse2 = $(".mobileScreen__h"),
        circleLineReverse2 = $("#circleLineReverse2"),
        lineReverse3 = $(".mobileScreen__g"),
        circleLineReverse3 = $("#circleLineReverse3"),
        introSlider = $(".introSlider"),
        scrollDown = $(".scrollDown")
    introTl
        .fromTo(introDiagram, 2, {
            drawSVG: "100% 100%"
        }, {
            drawSVG: "0% 100%",
            autoAlpha: 1
        })
        .to(IntroDiagramParent, 0.5, {
            opacity: 0.3
        })
        .staggerFromTo(mobileBodyDraw, .8, {
            drawSVG: "100% 100%"
        }, {
            drawSVG: "0% 100%",
            autoAlpha: 1
        }, 0.2, "=-1.5")
        .to(IntroBgLines, 1, {
            height: "100%",
            opacity: 0.05
        }, "=-3")
        .fromTo(introSlider, 0.3, {
            y: 20
        }, {
            autoAlpha: 1,
            y: 0
        }, "=-3")
        .fromTo(mobileScreenImg, 0.6, {
            x: 20,
            y: 20
        }, {
            autoAlpha: 1,
            x: 0,
            y: 0
        }, "-=1.2")
        .fromTo(centralBitcoin, 0.3, {
            scale: 0.5,
            y: 30
        }, {
            scale: 1,
            autoAlpha: 1,
            y: 0
        })
        .fromTo(lineReverse1, 0.3, {
            drawSVG: "100% 100%"
        }, {
            drawSVG: "0% 100%",
            autoAlpha: 1
        })
        .to(circleLineReverse1, 0.3, {
            ease: Bounce.easeInOut,
            autoAlpha: 1
        })
        .fromTo(lineReverse2, 0.3, {
            drawSVG: "100% 100%"
        }, {
            drawSVG: "0% 100%",
            autoAlpha: 1
        }, "=-0.7")
        .to(circleLineReverse2, 0.3, {
            ease: Bounce.easeInOut,
            autoAlpha: 1
        })
        .fromTo(lineReverse3, 0.3, {
            drawSVG: "100% 100%"
        }, {
            drawSVG: "0% 100%",
            autoAlpha: 1
        }, "=-0.7")
        .to(circleLineReverse3, 0.3, {
            ease: Bounce.easeInOut,
            autoAlpha: 1
        })
        .fromTo(lineTrue1, 0.3, {
            drawSVG: "0% 0%"
        }, {
            drawSVG: "0% 100%",
            autoAlpha: 1
        }, "=-0.7")
        .to(circleLineTrue1, 0.3 , {
            ease: Bounce.easeInOut,
            autoAlpha: 1
        })
        .fromTo(lineTrue2, 0.3, {
            drawSVG: "0% 0%"
        }, {
            drawSVG: "0% 100%",
            autoAlpha: 1
        }, "=-0.3")
        .to(circleLineTrue2, 0.3, {
            ease: Bounce.easeInOut,
            autoAlpha: 1
        })
        .fromTo(lineTrue3, 0.3, {
            drawSVG: "0% 0%"
        }, {
            drawSVG: "0% 100%",
            autoAlpha: 1
        }, "=-0.3")
        .to(circleLineTrue3, 0.3, {
            ease: Bounce.easeInOut,
            autoAlpha: 1
        });
    // Scroll Now Animation
    TweenMax.fromTo(scrollDown, 0.5, {
        y: -10
    }, {
        y: 0,
        ease: Linear.easeNone,
        repeat: -1,
        yoyo: true
    });

    // Features Carousel


    var carouselTl = new TimelineMax();
    var rotation = 0;
    // Browser Tabs Visibility
    var featureCarouselInterval = null;

    function intervalManager(flag, time) {
        if (flag)
            featureCarouselInterval = setInterval(function () {
                var hidden, visibilityChange;
                if (typeof document.hidden !== "undefined") {
                    hidden = "hidden";
                    visibilityChange = "visibilitychange";
                } else if (typeof document.mozHidden !== "undefined") {
                    hidden = "mozHidden";
                    visibilityChange = "mozvisibilitychange";
                } else if (typeof document.msHidden !== "undefined") {
                    hidden = "msHidden";
                    visibilityChange = "msvisibilitychange";
                } else if (typeof document.webkitHidden !== "undefined") {
                    hidden = "webkitHidden";
                    visibilityChange = "webkitvisibilitychange";
                }

                if (document[hidden]) {} else {
                    var nextItem = $(".featureCarousel__item.active").prev();
                    featureCarouselFunc(nextItem);
                }
            }, 4000)
        else
            clearInterval(featureCarouselInterval);
    }
    $(".featureCarousel__item").click(function () {
        if (!$(this).hasClass("active")) {
            if ($(this).hasClass("disableClick")) {
                return false;
            }

            $(".featureCarousel__item").addClass("disableClick");
            setTimeout(function () {
                $(".featureCarousel__item").removeClass("disableClick");
            }, 1000)

            intervalManager(false);
            var nextItem = $(this);
            featureCarouselFunc(nextItem);
            intervalManager(true, 4000);
        }
    });
    intervalManager(true, 4000);

    function featureCarouselFunc(nextItem) {
        featureCarousel = $(".featureCarousel__features"),
            featureCarouselItem = $(".featureCarousel__item"),
            activeFeature = $(".featureCarousel__item.active"),
            prevFeature = activeFeature.prev();
            
        if (activeFeature.is($("#cloned15")) && nextItem.is($("#original1"))) {
            prevFeature = nextItem
        }
        if (activeFeature.is($("#cloned15")) && nextItem.length == 0) {
            nextItem = $("#original1");
            prevFeature = $("#original1");
        }
        // Previous Function
        if (nextItem.is(prevFeature)) {
            rotation = rotation + 20;
            toActive = activeFeature.prev(),
                toVisible = toActive.prev(),
                toHidden = activeFeature.next();
            if (activeFeature.is($("#cloned14"))) {
                toVisible = $("#original1");
            }
            if (activeFeature.is($("#cloned15"))) {
                toActive = $("#original1");
                toVisible = $("#original2");
            }
            if (toHidden.length == 0) {
                toHidden = $("#cloned15");
            }
        } else {
            // Next Function
            rotation = rotation - 20;
            toActive = activeFeature.next(),
                toVisible = toActive.next(),
                toHidden = activeFeature.prev();
            if (activeFeature.is($("#original2"))) {
                toVisible = $("#cloned15");
            }
            if (activeFeature.is($("#original1"))) {
                toActive = $("#cloned15");
                toVisible = $("#cloned14");
            }
            if (toHidden.length == 0) {
                toHidden = $("#original1");
            }

        }
        carouselTl
            .set(featureCarouselItem, {
                rotation: -rotation,
                transformOrigin: "50% 50%"
            })
            .to(featureCarousel, 1, {
                rotation: rotation,
                transformOrigin: "50% 50%"
            })
            .to(activeFeature, 0.5, {
                className: "-=active"
            }, "=-0.5")
            .to([toVisible, toActive], 0.1, {
                className: "-=autoAlpha"
            }, "=-0.8")
            .to(toActive, 0.5, {
                className: "+=active"
            }, "=-0.8")
            .to(toHidden, 0.01, {
                className: "+=autoAlpha"
            }, "=-0.8");
    }
    // INVEST SECTION SCROLLING ANIMATION
    var controller = new ScrollMagic.Controller();
    var homeInvestTl = new TimelineMax(),
        investBgLines = $(".homeInvest .bgLines div"),
        investBgDiagram = $(".homeInvest #homeInvestBgDiagram"),
        investDiagram = $(".homeInvest #investTitleDiagram"),
        investCircles = $(".homeInvest .investTitleCircles"),
        investCircles2 = $(".homeInvest .investTitleCircles2"),
        investLines = $(".homeInvest .investTitleLines"),
        investTexts = $(".homeInvest .investTitleTexts"),
        investContent = $(".homeInvest h2, .homeInvest p, .homeInvest .btn--outline"),
        featureCarouselMain = $(".homeInvest .featureCarousel"),
        winWidth = $(window).innerWidth(),
        scaleUpSize;

        if(winWidth < 1199) {
            scaleUpSize = 0.7;
        } else {
            scaleUpSize = 1;
        };

    homeInvestTl
        .to(investBgLines, 3, {
            height: "100%"
        })
        .fromTo(investBgDiagram, 2, {
            autoAlpha: .6,
            drawSVG: "0 0"
        }, {
            autoAlpha: .2,
            drawSVG: "0 100%"
        }, "-=2")
        .fromTo(investDiagram, 1.5, {
            drawSVG: "0 0"
        }, {
            autoAlpha: 1,
            drawSVG: "0 100%"
        })
        .staggerFromTo(investCircles, 1, {
            drawSVG: "0 0"
        }, {
            autoAlpha: 1,
            drawSVG: "0 100%"
        }, .1)
        .to(investCircles2, .5, {
            autoAlpha: 0.09
        })
        .staggerTo(investLines, 1, {
            autoAlpha: 0.09
        }, .1, "-=1.5")
        .staggerTo(investTexts, .5, {
            autoAlpha: .4
        }, .2, "-=1")
        .staggerFromTo(investContent, 1, {
            y: 50
        }, {
            autoAlpha: 1,
            y: 0
        }, .05, "-=3.5")
        .fromTo(featureCarouselMain, .5, {
            scale: .8
        }, {
            scale: scaleUpSize,
            autoAlpha: 1
        }, "-=3");
    var investScene = new ScrollMagic.Scene({
            triggerElement: ".homeInvest",
            duration: 1000,
            offset: -450,
            reverse: false
        })
        .setTween(homeInvestTl)
        .addTo(controller);

    $(".scrollDown").click(function () {
        $("html, body").animate({
            scrollTop: $(".homeInvest").offset().top + 150
        }, 2000);
    });
    //PARTNERSHIP FEATURES CAROUSEL
    var partnerNextBtn = $(".partnerFeaturesHome__pagination .nextButton"),
        partnerPrevBtn = $(".partnerFeaturesHome__pagination .prevButton");

    var partnerCarouselInterval = null;

    function partnerIntervalManager(flag, time) {
        if (flag)
            partnerCarouselInterval = setInterval(function () {
                goToNextPartnerCarousel()
            }, time)
        else
            clearInterval(partnerCarouselInterval);
    }

    function goToNextPartnerCarousel() {
        var partnerActiveItem = $(".partnerFeaturesHome__slider.active"),
            partnerNextItem;
        if (partnerActiveItem.is($(".partnerFeaturesHome__slider[data-carousel-id='partnerFeature1']"))) {
            partnerNextItem = $(".partnerFeaturesHome__slider[data-carousel-id='partnerFeature2']");
        } else
        if (partnerActiveItem.is($(".partnerFeaturesHome__slider[data-carousel-id='partnerFeature2']"))) {
            partnerNextItem = $(".partnerFeaturesHome__slider[data-carousel-id='partnerFeature3']");
        } else
        if (partnerActiveItem.is($(".partnerFeaturesHome__slider[data-carousel-id='partnerFeature3']"))) {
            partnerNextItem = $(".partnerFeaturesHome__slider[data-carousel-id='partnerFeature1']");
        }
        changePartnerCarousel(partnerNextItem, partnerActiveItem);
    }

    function goToPrevPartnerCarousel() {
        var partnerActiveItem = $(".partnerFeaturesHome__slider.active"),
            partnerNextItem;
        if (partnerActiveItem.is($(".partnerFeaturesHome__slider[data-carousel-id='partnerFeature1']"))) {
            partnerNextItem = $(".partnerFeaturesHome__slider[data-carousel-id='partnerFeature3']");
        } else
        if (partnerActiveItem.is($(".partnerFeaturesHome__slider[data-carousel-id='partnerFeature2']"))) {
            partnerNextItem = $(".partnerFeaturesHome__slider[data-carousel-id='partnerFeature1']");
        } else
        if (partnerActiveItem.is($(".partnerFeaturesHome__slider[data-carousel-id='partnerFeature3']"))) {
            partnerNextItem = $(".partnerFeaturesHome__slider[data-carousel-id='partnerFeature2']");
        }
        changePartnerCarousel(partnerNextItem, partnerActiveItem);
    }

    function changePartnerCarousel(partnerNextItem, partnerActiveItem) {
        var partnerCarouselTl = new TimelineMax();
        partnerCarouselTl
            .to(partnerActiveItem, 1, {
                scale: 1.1,
                autoAlpha: 0,
                y: -110,
                className: "-=active"
            })
            .fromTo(partnerNextItem, 1, {
                scale: .8,
                y: 100
            }, {
                scale: 1,
                autoAlpha: 1,
                y: 0,
                className: "+=active"
            }, "-=1")
    }

    partnerIntervalManager(true, 4000);

    partnerNextBtn.click(function () {
        partnerIntervalManager(false);
        goToNextPartnerCarousel();
        partnerIntervalManager(true, 4000);
    });

    partnerPrevBtn.click(function () {
        partnerIntervalManager(false);
        goToPrevPartnerCarousel();
        partnerIntervalManager(true, 4000);
    });

    // SECURITY LEVEL CAROUSEL
    $("#securityLevelCarousel").owlCarousel({
        loop: true,
        autoWidth: true,
        items: 5,
        center: true,
        dots: true,
        autoplay: true,
        autoplayTimeout: 5000,
        smartSpeed: 650,
        responsive: {
            0:{
                items:1,
            },
             400: {
                 items: 1,
             },
             700: {
                 items: 3,
             }
            

         }
    });
})