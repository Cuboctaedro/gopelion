// import Siema from 'siema';
import lazysizes from 'lazysizes';
import baguetteBox from 'baguettebox.js';
import flatpickr from "flatpickr";
import Hammer from "hammerjs";

// import AOS from 'aos';

document.documentElement.className += ' js'; // adds class="js" to <html> element

function debounce(fn, ms) { // https://remysharp.com/2010/07/21/throttling-function-calls
    var time = null;
    return function() {
        var a = arguments, t = this;
        clearTimeout(time);
        time = setTimeout(function() { fn.apply(t, a); }, ms);
    }
}


function throttle(fn, ms) { // Ryan Taylor comment - https://remysharp.com/2010/07/21/throttling-function-calls
    var time, last = 0;
    return function() {
        var a = arguments, t = this, now = +(new Date), exe = function() { last = now; fn.apply(t, a); };
        clearTimeout(time);
        (now >= last + ms) ? exe() : time = setTimeout(exe, ms);
    }
}


function hasClass(el, cls) {
    if (el.className.match('(?:^|\\s)'+cls+'(?!\\S)')) { return true; }
}

function addClass(el, cls) {
    if (!el.className.match('(?:^|\\s)'+cls+'(?!\\S)')) { el.className += ' '+cls; }
}

function delClass(el, cls) {
    el.className = el.className.replace(new RegExp('(?:^|\\s)'+cls+'(?!\\S)'),'');
}

function toggleClass(el, cls) {
    if ( hasClass(el, cls) ) {
        delClass(el, cls);
    } else {
        addClass(el, cls);
    }
}

// params: element, classes to add, distance from top, unit ('percent' or 'pixels')
function elementFromTop(elem, classToAdd, distanceFromTop, unit) {
    var winY = window.innerHeight || document.documentElement.clientHeight,
        elemLength = elem.length, distTop, distPercent, distPixels, distUnit, i;
    for (i = 0; i < elemLength; ++i) {
        distTop = elem[i].getBoundingClientRect().top;
        distPercent = Math.round((distTop / winY) * 100);
        distPixels = Math.round(distTop);
        distUnit = unit == 'percent' ? distPercent : distPixels;
        if (distUnit <= distanceFromTop) {
            if (!hasClass(elem[i], classToAdd)) {
                addClass(elem[i], classToAdd);
            }
        } else {
            delClass(elem[i], classToAdd);
        }
    }
}

function moveLeaf() {
    let scrolled = window.pageYOffset;
    let leaves = document.querySelectorAll('.leaves');
    leaves.forEach(leaf => {
        background.style.top = - (scrolled * 0.2) + 'px';
    })
}


window.addEventListener(
    'scroll',
    throttle(
        function() {
        	elementFromTop(document.querySelectorAll('.bodywrap'), 'moving',  -1, 'pixels');
            elementFromTop(document.querySelectorAll('.fadein'), 'fadenow',  80, 'percent');
    	},
        100),
    false
);



var gallerybox = document.querySelector('.photo-gallery-container');
if (gallerybox) {
    var gallerycontainer = gallerybox.querySelector('.photo-gallery');
    var gallerypictures = Array.from(gallerycontainer.children) ;
    var gallerycontrols = Array.from(gallerybox.querySelectorAll('[data-filter]'));
    baguetteBox.run('.photo-gallery');
    gallerycontrols.forEach(control => {
        control.addEventListener('click', function() {
            if (this.hasAttribute('data-filter-tag')) {
                let filter = this.getAttribute('data-filter-tag');
                let filteredpictures = gallerypictures.filter(picture => {
                    return picture.getAttribute('data-tags').includes(filter);
                })
                while (gallerycontainer.hasChildNodes()) {
                    gallerycontainer.removeChild(gallerycontainer.lastChild);
                }
                filteredpictures.forEach(pic => {
                    gallerycontainer.appendChild(pic);
                })
                baguetteBox.run('.photo-gallery');
            } else if (this.hasAttribute('data-reset')) {
                while (gallerycontainer.hasChildNodes()) {
                    gallerycontainer.removeChild(gallerycontainer.lastChild);
                }
                gallerypictures.forEach(pic => {
                    gallerycontainer.appendChild(pic);
                })
                baguetteBox.run('.photo-gallery');
            }
        }, false);
    })

}

document.querySelectorAll('[data-toggle-target]').forEach(item => {
    item.addEventListener('click', function(){
        let target = document.querySelector(this.getAttribute('data-toggle-target'));
        toggleClass(target, 'activate');
    }, false)
})

document.querySelector('[data-toggle-menu="#menu"]').addEventListener('click', function(){
    toggleClass(document.querySelector('.bodywrap'), 'stabilize');
    toggleClass(document.querySelector('#menu'), 'activate');
}, false)

document.querySelector('.show-phone').addEventListener('click', function(){
    toggleClass(document.querySelector('#phones'), 'hidden');
    toggleClass(document.querySelector('#phones'), 'flex');
}, false)


document.querySelectorAll('.has-dropdown-button').forEach(item => {

    let target = document.querySelector(item.querySelector('[data-toggle-target]').getAttribute('data-toggle-target'));
    let background = document.querySelector('#hoverbackground');
    item.addEventListener('mouseover', function() {
        addClass(target, 'open');
        addClass(background, 'open');
        addClass(document.querySelector('.bodywrap'), 'openmenu');
    }, false)
    item.addEventListener('mouseout', function() {
        delClass(target, 'open');
        delClass(background, 'open');
        delClass(document.querySelector('.bodywrap'), 'openmenu');
    }, false)

})

document.querySelectorAll('[data-role="moreless"]').forEach(block => {
    let morebutton = block.querySelectorAll('[data-role="readmore"]')[0];
    let lessbutton = block.querySelectorAll('[data-role="readless"]')[0];
    let truncated = block.querySelectorAll('[data-role="truncated"]')[0];
    let fulltext = block.querySelectorAll('[data-role="fulltext"]')[0];
    morebutton.addEventListener(
        'click',
        function(){
            fulltext.hidden = !fulltext.hidden;
            truncated.hidden = !truncated.hidden;
            lessbutton.hidden = !lessbutton.hidden;
            morebutton.hidden = !morebutton.hidden;
        },
        false
    );
    lessbutton.addEventListener(
        'click',
        function(){
            fulltext.hidden = !fulltext.hidden;
            truncated.hidden = !truncated.hidden;
            lessbutton.hidden = !lessbutton.hidden;
            morebutton.hidden = !morebutton.hidden;
        },
        false
    );

})

document.querySelectorAll('[data-role="slider-wrapper"]').forEach(gallery => {
    let slides = Array.from(gallery.querySelectorAll('[data-role="slide"]'));
    let prev = gallery.querySelector('[data-role="prev"]');
    let next = gallery.querySelector('[data-role="next"]');
    let index = gallery.querySelector('[data-role="slide-index"]');

    let current = 0;
    let showSlide = function(num) {
        slides.forEach(slide => {
            if (slide != slides[num]) {
                delClass(slide, 'open');
            } else addClass(slide, 'open');
            if (index != null) {
                index.innerHTML = current + 1;
            }
        })
    }
    let showPrev = function() {
        if (current > 0) {
            current = current - 1;
        } else {
            current = slides.length - 1;
        }
        showSlide(current);
    }
    let showNext = function() {
        if (current == slides.length - 1) {
            current = 0;
        } else {
            current = current + 1;
        }
        showSlide(current);
    }

    showSlide(current);

    prev.addEventListener(
        'click',
        function() {showPrev()},
        false
    );

    next.addEventListener(
        'click',
        function() {showNext()},
        false
    );
    slides.forEach(slide => {
        let touch = new Hammer(slide);
        touch.on("panleft", function() {showPrev()});
        touch.on("panright", function() {showNext()});
    })
})

flatpickr("#arrival", {});
flatpickr("#departure", {});
