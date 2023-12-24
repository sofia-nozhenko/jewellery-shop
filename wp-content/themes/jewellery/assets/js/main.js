$(".product-slider").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: true,
    responsive: [
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            },
        },
    ],
});

$(".posts-slider").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    arrows: true,
    responsive: [
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            },
        },
    ],
});

// Search

function toggleHeaderElements() {
    $(".nav-menu").toggleClass("search-active");
    $(".nav-account").toggleClass("search-active");
    $(".nav-icons").toggleClass("search-active");
}

function toggleSearchBar() {
    const $searchBar = $("#headerSearchBar");
    const $searchInput = $("#headerSearchInput");
    if ($searchBar.hasClass("search-hidden")) {
        $searchBar.removeClass("search-hidden");
        $searchInput.addClass("active");
    } else {
        $searchBar.addClass("search-hidden");
        $searchInput.removeClass("active");
    }
}

$("#search").on("click", function () {
    toggleHeaderElements();
    toggleSearchBar();
});

$("#hideHeaderSearchBar").on("click", function () {
    toggleHeaderElements();
    toggleSearchBar();
});

function quantity_increment(input) {
    input.value = parseInt(input.value) + 1;
}

function quantity_decrement(input) {
    input.value = parseInt(input.value) - 1;
}
