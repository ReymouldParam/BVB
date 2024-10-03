$(document).ready(function () {
    $('.carousel1').slick({
        dots: false,
        arrows: true, // Enable arrows
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 6000,
        pauseOnHover: false,
        prevArrow: "<div class='slick-prev'><i class='fa-solid fa-chevron-right'></i></div>", // Left arrow for previous
        nextArrow: "<div class='slick-next'><i class='fa-solid fa-chevron-left'></i></div>"  // Right arrow for next
    });
});

$(document).ready(function () {
    $('.carousel2').slick({
        dots: false,
        arrows: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 6000,
        pauseOnHover: false
    });
});

// ! characters counting
function updateCharCount() {
    const textarea = document.getElementById('comments');
    const charCount = document.getElementById('charCount');
    const maxLength = textarea.getAttribute('maxlength');
    const currentLength = textarea.value.length;
    charCount.textContent = `${currentLength}/${maxLength} characters used`;
}

// ! Buttons
let tablebtn = document.getElementById('table');
let banquetbtn = document.getElementById('banquet');
let table_icon = document.getElementById('table-icon');
let banquet_icon = document.getElementById('banquet-icon');
let book_a_table_popup = document.getElementById('book-a-table-popup');
let book_a_banquet_popup = document.getElementById('book-a-banquet-popup');
let close1 = document.getElementById('close1');
let close2 = document.getElementById('close2');

tablebtn.addEventListener('mouseenter', () => {
    table_icon.style.display = 'inline';
});
banquetbtn.addEventListener('mouseenter', () => {
    banquet_icon.style.display = 'inline';
});
tablebtn.addEventListener('mouseleave', () => {
    table_icon.style.display = 'none';
});
banquetbtn.addEventListener('mouseleave', () => {
    banquet_icon.style.display = 'none';
});

tablebtn.addEventListener('click', () => {
    $("body").css("overflow", "hidden");
    book_a_table_popup.style.display = 'block';
});

banquetbtn.addEventListener('click', () => {
    $("body").css("overflow", "hidden");
    console.log('first')
    book_a_banquet_popup.style.display = 'block';
});

close1.addEventListener('click', () => {
    $("body").css("overflow", "auto");
    book_a_table_popup.style.display = 'none';
});

close2.addEventListener('click', () => {
    $("body").css("overflow", "auto");
    book_a_banquet_popup.style.display = 'none';
});

$(document).ready(function () {
    $('.section-content').slideUp();
    // Toggle the content for the clicked section and hide others
    $('.toggle-button').on('click', function () {
        var target = $(this).data('target');
        // Hide all sections except the one clicked
        // $('.section-content').slideUp();
        // $(target).slideDown();
        // Close other sections
        $('.section-content').not($(target)).slideUp();

        // Toggle the clicked section
        $(target).slideToggle();

        // $('.section-content').not(target).slideUp();
        // $('.toggle-button').not(this).text('Read more');

        // btn_text = $(this).text();
        // btn_textfinal = btn_text.replace(/\s+/g, ' ').trim();
        // console.log(btn_textfinal)
        // if (btn_text === 'Read more') {
        //     $(this).text('Read less');
        //     btn_text.innerText = 'Read less';
        //     btn_textfinal = btn_text.replace(/\s+/g, ' ').trim();
        //     $(target).slideDown();
        // }
        // else {
        //     $(this).text('Read more');
        //     $(target).slideUp();
        //     btn_text.innerText = 'Read more';
        //     btn_textfinal = btn_text.replace(/\s+/g, ' ').trim();
        // }
    });
});

//! phone number
document.getElementById("phone").addEventListener("input", function (e) {
    const input = e.target.value;
    e.target.value = input.replace(/[^0-9]/g, ''); // Remove any non-numeric characters
});
document.getElementById("phone2").addEventListener("input", function (e) {
    const input = e.target.value;
    e.target.value = input.replace(/[^0-9]/g, ''); // Remove any non-numeric characters
});

// ! Top of the Website
scrollToTopBtn.onclick = function () {
    window.scrollTo({
        top: 0,
        behavior: 'smooth' // Smooth scroll
    });
};


//! Scroll to the Contact Us section when the contact-us button is clicked
contactUsBtn.onclick = function () {
    document.getElementById('contactus').scrollIntoView({
        behavior: 'smooth' // Smooth scroll to contact section
    });
};


//! Email-integration

let closeButton = document.getElementById('close');
let home_page_mail = document.getElementById('mail-success-box');
closeButton.addEventListener('click', () => {
    home_page_mail.style.display = "none";
    $("body").css("overflow", "auto");
});
