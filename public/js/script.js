let scroll_top_btn = document.getElementById('scrollTop-btn');




if ($('.smart-scroll').length > 0) { // check if element exists
    var last_scroll_top = 0;
    $(window).on('scroll', function() {
        scrollFunction();
        scroll_top = $(this).scrollTop();
        if (scroll_top < last_scroll_top) {
            $('.smart-scroll').removeClass('scrolled-down').addClass('scrolled-up');
        } else {
            $('.smart-scroll').removeClass('scrolled-up').addClass('scrolled-down');
        }
        last_scroll_top = scroll_top;
    });
}

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scroll_top_btn.style.display = "block";
        scroll_top_btn.style.transition = "display 1s ease-in-out";
    } else {
        scroll_top_btn.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

let date = new Date();
let year = date.getFullYear();
let yearElt = document.getElementById("year-price");
if (yearElt != null) {
    yearElt.textContent = year;
}