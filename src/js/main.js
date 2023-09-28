/*! npm.im/object-fit-images 3.2.4 */
var objectFitImages=function(){"use strict";function t(t,e){return"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='"+t+"' height='"+e+"'%3E%3C/svg%3E"}function e(t){if(t.srcset&&!p&&window.picturefill){var e=window.picturefill._;t[e.ns]&&t[e.ns].evaled||e.fillImg(t,{reselect:!0}),t[e.ns].curSrc||(t[e.ns].supported=!1,e.fillImg(t,{reselect:!0})),t.currentSrc=t[e.ns].curSrc||t.src}}function i(t){for(var e,i=getComputedStyle(t).fontFamily,r={};null!==(e=u.exec(i));)r[e[1]]=e[2];return r}function r(e,i,r){var n=t(i||1,r||0);b.call(e,"src")!==n&&h.call(e,"src",n)}function n(t,e){t.naturalWidth?e(t):setTimeout(n,100,t,e)}function c(t){var c=i(t),o=t[l];if(c["object-fit"]=c["object-fit"]||"fill",!o.img){if("fill"===c["object-fit"])return;if(!o.skipTest&&f&&!c["object-position"])return}if(!o.img){o.img=new Image(t.width,t.height),o.img.srcset=b.call(t,"data-ofi-srcset")||t.srcset,o.img.src=b.call(t,"data-ofi-src")||t.src,h.call(t,"data-ofi-src",t.src),t.srcset&&h.call(t,"data-ofi-srcset",t.srcset),r(t,t.naturalWidth||t.width,t.naturalHeight||t.height),t.srcset&&(t.srcset="");try{s(t)}catch(t){window.console&&console.warn("https://bit.ly/ofi-old-browser")}}e(o.img),t.style.backgroundImage='url("'+(o.img.currentSrc||o.img.src).replace(/"/g,'\\"')+'")',t.style.backgroundPosition=c["object-position"]||"center",t.style.backgroundRepeat="no-repeat",t.style.backgroundOrigin="content-box",/scale-down/.test(c["object-fit"])?n(o.img,function(){o.img.naturalWidth>t.width||o.img.naturalHeight>t.height?t.style.backgroundSize="contain":t.style.backgroundSize="auto"}):t.style.backgroundSize=c["object-fit"].replace("none","auto").replace("fill","100% 100%"),n(o.img,function(e){r(t,e.naturalWidth,e.naturalHeight)})}function s(t){var e={get:function(e){return t[l].img[e?e:"src"]},set:function(e,i){return t[l].img[i?i:"src"]=e,h.call(t,"data-ofi-"+i,e),c(t),e}};Object.defineProperty(t,"src",e),Object.defineProperty(t,"currentSrc",{get:function(){return e.get("currentSrc")}}),Object.defineProperty(t,"srcset",{get:function(){return e.get("srcset")},set:function(t){return e.set(t,"srcset")}})}function o(){function t(t,e){return t[l]&&t[l].img&&("src"===e||"srcset"===e)?t[l].img:t}d||(HTMLImageElement.prototype.getAttribute=function(e){return b.call(t(this,e),e)},HTMLImageElement.prototype.setAttribute=function(e,i){return h.call(t(this,e),e,String(i))})}function a(t,e){var i=!y&&!t;if(e=e||{},t=t||"img",d&&!e.skipTest||!m)return!1;"img"===t?t=document.getElementsByTagName("img"):"string"==typeof t?t=document.querySelectorAll(t):"length"in t||(t=[t]);for(var r=0;r<t.length;r++)t[r][l]=t[r][l]||{skipTest:e.skipTest},c(t[r]);i&&(document.body.addEventListener("load",function(t){"IMG"===t.target.tagName&&a(t.target,{skipTest:e.skipTest})},!0),y=!0,t="img"),e.watchMQ&&window.addEventListener("resize",a.bind(null,t,{skipTest:e.skipTest}))}var l="bfred-it:object-fit-images",u=/(object-fit|object-position)\s*:\s*([-.\w\s%]+)/g,g="undefined"==typeof Image?{style:{"object-position":1}}:new Image,f="object-fit"in g.style,d="object-position"in g.style,m="background-size"in g.style,p="string"==typeof g.currentSrc,b=g.getAttribute,h=g.setAttribute,y=!1;return a.supportsObjectFit=f,a.supportsObjectPosition=d,o(),a}();


// Hamburger menu

$(document).ready(function(){

    /* Menu fade/in out on mobile */
    $(".open-button").click(function(e){
        e.preventDefault();
        $(this).toggleClass('open');
        $(".main-menu").toggleClass('open');
    });
});

$(function () {
    $('.open-button').on('click', function (e) {
        var menuItem = $( e.currentTarget );

        if (menuItem.attr( 'aria-expanded') === 'true') {
            $(this).attr( 'aria-expanded', 'false');
        } else {
            $(this).attr( 'aria-expanded', 'true');
        }
    });
});

/* Close menu using the escape key */
$(document).keyup(function (e) {
    if (e.keyCode == 27) { // escape key maps to keycode `27`
        if ($(".main-menu").hasClass("open")) {
            $(".main-menu").removeClass("open")
        }

        if ($(".open-button").hasClass("open")) {
            $(".open-button").removeClass("open")
        }

        if ($("body").hasClass("lock-scroll")) {
            $("body").removeClass("lock-scroll")
        }
    }
});

// When mobile hamburger menu button is clicked, add lock-scroll class to body. This stops the user being able to scroll the page behind the menu.

$('.open-button').click(function () {
    // If the menu is already open, we need to remove the scroll lock
    if ($(this).hasClass('open')) {
        lockScroll(false);
    } else {
        lockScroll(true);
    }
});

function lockScroll(shouldLock) {

    if (shouldLock === undefined) {
        shouldLock = true;
    }

    if (shouldLock) {
        if (!$('body').hasClass('lock-scroll')) {
            $('body').addClass('lock-scroll');
        }
    } else {
        if ($('body').hasClass('lock-scroll')) {
            $('body').removeClass('lock-scroll');
        }
    }

}

// Accordion

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
}

// Object Fit Images

$(function () { objectFitImages() });

// Slick

$('.logo-slider').slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 3,
    arrows: false,
    dots: true,
    responsive: [
        {
            breakpoint: 1280,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        }
    ]
});

$('.carousel').slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    arrows: false,
    cssEase: 'linear',
    dots: true,
    centerMode: true,
    responsive: [
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});

$('.testimonial-cols').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: false,
    cssEase: 'linear',
    dots: true,
    responsive: [
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});


// Tabs

class TabController {
    constructor(container) {
        this.container = container;
        this.tablist = this.container.querySelector('[role=tablist]');
        this.tabs = this.container.querySelectorAll('[role=tab]');
        this.tabpanels = this.container.querySelectorAll('[role=tabpanel]');
        this.activeTab = this.container.querySelector('[role=tab][aria-selected=true]');

        this._addEventListeners();
    }

    // Private function to set event listeners
    _addEventListeners() {
        for (let tab of this.tabs) {
            tab.addEventListener('click', e => {
                e.preventDefault();
                this.setActiveTab(tab.getAttribute('aria-controls'));
            });
            tab.addEventListener('keyup', e => {
                if (e.keyCode == 13 || e.keyCode == 32) { // return or space
                    e.preventDefault();
                    this.setActiveTab(tab.getAttribute('aria-controls'));
                }
            })
        }
        this.tablist.addEventListener('keyup', e => {
            switch (e.keyCode) {
                case 35: // end key
                    e.preventDefault();
                    this.setActiveTab(this.tabs[this.tabs.length - 1].getAttribute('aria-controls'));
                    break;
                case 36: // home key
                    e.preventDefault();
                    this.setActiveTab(this.tabs[0].getAttribute('aria-controls'));
                    break;
                case 37: // left arrow
                    e.preventDefault();
                    let previous = [...this.tabs].indexOf(this.activeTab) - 1;
                    previous = previous >= 0 ? previous : this.tabs.length - 1;
                    this.setActiveTab(this.tabs[previous].getAttribute('aria-controls'));
                    break;
                case 39: // right arrow
                    e.preventDefault();
                    let next = [...this.tabs].indexOf(this.activeTab) + 1;
                    next = next < this.tabs.length ? next : 0
                    this.setActiveTab(this.tabs[next].getAttribute('aria-controls'));
                    break;
            }
        })
    }

    // Public function to set the tab by id
    // This can be called by the developer too.
    setActiveTab(id) {
        for (let tab of this.tabs) {
            if (tab.getAttribute('aria-controls') == id) {
                tab.setAttribute('aria-selected', "true");
                tab.focus();
                this.activeTab = tab;
            } else {
                tab.setAttribute('aria-selected', "false");
            }
        }
        for (let tabpanel of this.tabpanels) {
            if (tabpanel.getAttribute('id') == id) {
                tabpanel.setAttribute('aria-expanded', "true");
            } else {
                tabpanel.setAttribute('aria-expanded', "false");
            }
        }
    }
}

const collection = document.getElementsByClassName("tab-container");
Array.from(collection).forEach((element) => {
    const tabController = new TabController(element);
});


$(document).ready(function() {

    $('#tabs li a:not(:first)').addClass('inactive');
    $('.container').hide();
    $('.container:first').show();

    $('#tabs li a').click(function(){
        var t = $(this).attr('id');
        if($(this).hasClass('inactive')){ //this is the start of our condition
            $('#tabs li a').addClass('inactive');
            $(this).removeClass('inactive');

            $('.container').hide();
            $('#'+ t + 'C').fadeIn('slow');
        }
    });
});
