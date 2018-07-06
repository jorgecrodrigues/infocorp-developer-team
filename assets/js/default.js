if (!$) {
    window.console.error("O jquery é necessário!");
}
$(window.document).ready(function () {
    // HAHA, O QUE TU PROCURA POR AQUI ?
    $("#featured").mousemove(function (event) {
        $('.xtop').css({'left': event.pageX - 4});
        $('.yleft').css({'top': event.pageY - 4});
    });

    let options = {
        loop: false,
        margin: 0,
        nav: false,
        responsiveClass: true,
        responsive: {
            // breakpoint from 0 up
            0: {
                items: 1
            },
            // breakpoint from 1000 up
            1000: {
                items: 1
            },
        }
    };
    $("#owl").owlCarousel(options);
});