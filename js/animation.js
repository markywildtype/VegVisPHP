$(document).ready(function () {
    $(".offers-button").click(function () {
        $(".offer").slideToggle(200);
    });

    $('a').on('click', function (event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 300);
    });

    // $('.subregion-link').on('click', function (event) {
    //     event.preventDefault();
    //
    //     console.log('Inside animate for subregion links');
    //     $('html, body').animate({
    //         scrollTop: $($.attr(this, 'onclick')).offset().top
    //     }, 300);
    // });
});
