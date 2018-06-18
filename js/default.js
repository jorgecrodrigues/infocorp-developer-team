(function (window, j) {
    if (!j) {
        window.console.error("O jquery é necessário!");
    }

    j(window.document).ready(function () {

        // HAHA, O QUE TU PROCURA POR AQUI ?
        j(document.body).mousemove(function (event) {
            j('.xtop').css({'left': event.pageX - 4});
            j('.yleft').css({'top': event.pageY - 4});
        });

        var options = {
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
        j("#owl").owlCarousel(options);
    });

}(this, this.$ || this.jQuery || false));