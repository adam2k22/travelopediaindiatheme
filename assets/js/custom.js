window.addEventListener('scroll', function() {
    const header = document.querySelector('header.header-area, .dashboard-sidebar-wrapper');
    header.classList.toggle("sticky", window.scrollY > 0);
});
document.addEventListener('DOMContentLoaded', function() {
    const spans = document.querySelectorAll('h1 span');
    let index = 0;

    function showVisibleSpan() {
        let hasVisible = false;
        
        spans.forEach(span => {
            if (span.classList.contains('text-in')) {
                span.style.display = 'inline-block';
                hasVisible = true;
            } else {
                span.style.display = 'none';
            }
        });
        
        if (!hasVisible) {
            spans.forEach(span => span.style.display = 'none');
        }
    }

    function animateText() {
        spans.forEach(span => span.classList.remove('text-in'));
        
        spans[index].classList.add('text-in');
        showVisibleSpan();

        index = (index + 1) % spans.length;

        setTimeout(animateText, 2000);
    }

    animateText();
});
document.addEventListener('DOMContentLoaded', function () {
    var swiper = new Swiper('.swiper', {
        loop: true, // Enable looping
        slidesPerView: 'auto', // Adjust to show as many slides as available
        spaceBetween: 25, // Space between slides
        navigation: {
        nextEl: '.destination-card2-next',
        prevEl: '.destination-card2-prev',
        },
    });
});
document.addEventListener('DOMContentLoaded', function () {
    var swiper = new Swiper('.swiper', {
        loop: true, // Enable looping
        slidesPerView: 'auto', // Adjust to show as many slides as available
        spaceBetween: 25, // Space between slides
        navigation: {
        nextEl: '.package-card-slider-next',
        prevEl: '.package-card-slider-prev',
        },
    });
});
document.addEventListener('DOMContentLoaded', function () {
    var swiper = new Swiper('.swiper', {
        loop: true, // Enable looping
        slidesPerView: 'auto', // Adjust to show as many slides as available
        spaceBetween: 25, // Space between slides
        navigation: {
        nextEl: '.banner4-slider-next',
        prevEl: '.banner4-slider-prev',
        },
    });
});