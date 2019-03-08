// import Siema from 'siema';
import lazysizes from 'lazysizes';
import baguetteBox from 'baguettebox.js';
import flatpickr from "flatpickr";

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



window.addEventListener(
    'scroll',
    throttle(
        function() {
        	elementFromTop(document.querySelectorAll('.bodywrap'), 'moving',  -1, 'pixels');
        	elementFromTop(document.querySelectorAll('.bodywrap'), 'gone', -260, 'pixels');
    	},
        100),
    false
);


// document.querySelectorAll('.slider-gallery').forEach(slider => {
//     var printSlideIndex = function() {
//         slider.querySelector('.slide-index').innerHTML = this.currentSlide + 1;
//     }
//     var siema = slider.querySelectorAll('.siema')[0];
//     var gallery = new Siema({
//         onInit: printSlideIndex,
//         onChange: printSlideIndex,
//         selector: siema,
//         duration: 500,
//         loop: true,
//     });
//     var prev = slider.querySelector('.prev');
//     var next = slider.querySelector('.next');
//
//     prev.addEventListener('click', () => gallery.prev());
//     next.addEventListener('click', () => gallery.next());
//
//     // setInterval(() => gallery.next(), 2500);
// });


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


flatpickr("#arrival", {});
flatpickr("#departure", {});
