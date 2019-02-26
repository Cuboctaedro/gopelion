import Siema from 'siema';
import lazysizes from 'lazysizes';
import baguetteBox from 'baguettebox.js';
import AOS from 'aos';

document.querySelectorAll('.slider-gallery').forEach(slider => {
    var printSlideIndex = function() {
        slider.querySelector('.slide-index').innerHTML = this.currentSlide + 1;
    }
    var siema = slider.querySelectorAll('.siema')[0];
    var gallery = new Siema({
        onInit: printSlideIndex,
        onChange: printSlideIndex,
        selector: siema,
        duration: 500,
        loop: true,
    });
    var prev = slider.querySelector('.prev');
    var next = slider.querySelector('.next');

    prev.addEventListener('click', () => gallery.prev());
    next.addEventListener('click', () => gallery.next());

    // setInterval(() => gallery.next(), 2500);
});


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

document.querySelectorAll('.moreless').forEach(block => {
    let morebutton = block.querySelectorAll('.readmore')[0];
    let lessbutton = block.querySelectorAll('.readless')[0];
    let truncated = block.querySelectorAll('.truncated')[0];
    let fulltext = block.querySelectorAll('.fulltext')[0];
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

//

AOS.init();


//
//
//
// document.addEventListener('click', function (e) {
//     var button = e.target;
//
//     if (button.getAttribute('data-reset') === 'true') {
//         // Reset the filters
//         var filter = button.getAttribute('data-filter');
//         resetFilter(filter);
//     } else {
//         // Filter the tag
//         var filter = button.getAttribute('data-filter');
//         var tag    = button.getAttribute('data-filter-tag');
//         filterTag(filter, tag);
//     }
// });
//
// // Filter tag
// function filterTag (filter, tag) {
//     var items = document.querySelectorAll('.' + filter + ' > a');
//     resetFilter(filter);
//     for (var i = 0; i < items.length; i++) {
//         var itemTags = items[i].getAttribute('data-tags');
//
//         // Catch case with no tags
//         if (itemTags != null) {
//             if (itemTags.indexOf(tag) < 0) {
//                 items[i].setAttribute('data-toggle', 'off');
//             }
//         }
//     }
// }
//
// // Reset filters
// function resetFilter (filter) {
//     var items = document.querySelectorAll('.' + filter + ' > a');
//
//     for (var i = 0; i < items.length; i++) {
//         items[i].setAttribute('data-toggle', 'on');
//     }
// }
