

let sections = document.querySelectorAll('div');

window.onscroll = () => {
    sections.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop - 150;
        let height = sec.offsetHeight;

        if (top >= offset && top < offset + height) {
            sec.classList.add('show-animate');
        }
        // if want to use repeating animation use this
        else {
            sec.classList.remove('show-animate');
        }
    })
}


function handleScroll() {
    var sec7 = document.querySelector('.sec-7');
    var images = document.querySelectorAll('.sec-7 .images img');

    // Check if the section is in the viewport
    if (isInViewport(sec7)) {
        sec7.classList.add('show-animate');

        // Add the show-animate class to each image individually
        images.forEach(function (img, i) {
            img.style.transitionDelay = 'calc(.2s * ' + i + ')';
        });
    } else {
        sec7.classList.remove('show-animate');
    }
}



