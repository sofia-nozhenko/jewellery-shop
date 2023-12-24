$(".product-slider").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 2000,
    arrows: true,
});

$(".posts-slider").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 2000,
    arrows: true,
});



// Search

function toggleHeaderElements() {
    $('.nav-menu').toggleClass('search-active');
    $('.nav-account').toggleClass('search-active');
    $('.nav-icons').toggleClass('search-active');
}

function toggleSearchBar() {
    const $searchBar = $("#headerSearchBar");
    const $searchInput = $("#headerSearchInput"); 
    if ($searchBar.hasClass('search-hidden')) {
        $searchBar.removeClass('search-hidden')
        $searchInput.addClass('active')
    } else {
        $searchBar.addClass('search-hidden');
        $searchInput.removeClass('active')
    } 
}


$('#search').on('click', function() {    
    toggleHeaderElements();
    toggleSearchBar();
});

$("#hideHeaderSearchBar").on('click', function() {
    toggleHeaderElements();
    toggleSearchBar();
});
