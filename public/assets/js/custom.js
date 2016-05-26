!function (e) {
    "use strict";
    e(".dropdown a.dropdown-toggle").on("click", function (o) {
        e(this).next("ul").toggle(), o.stopPropagation(), o.preventDefault()
    }), SmoothScroll({stepSize: 80});
    var o;
    var i = new Instafeed({
        target: "header-instafeed",
        get: "user",
        userId: "1014516",
        limit: 6,
        accessToken: "2106621868.95809bd.6cedcfe289c44294b83e1602f419049e",
        template: '<li class="col-xs-6 col-sm-4 col-md-2"><a target="_blank" href="{{link}}"><img src="{{image}}" /></a>'
    }), a = new Instafeed({
        target: "sidebar-instafeed",
        get: "user",
        userId: "1014516",
        limit: 6,
        accessToken: "2106621868.95809bd.6cedcfe289c44294b83e1602f419049e",
        template: '<li><a target="_blank" href="{{link}}"><img src="{{image}}" /></a>'
    });
    i.run(), a.run(), e(".product-carousel").owlCarousel({
        loop: !0,
        margin: 30,
        navText: ["", ""],
        responsiveClass: !0,
        responsive: {0: {items: 1, nav: !0}, 600: {items: 3, nav: !1}, 1e3: {items: 4, nav: !0, loop: !1}}
    }), e("#slider-range").slider({
        range: !0, min: 0, max: 500, values: [0, 200], slide: function (o, i) {
            e("#amount").val("$" + i.values[0] + " - $" + i.values[1])
        }
    }), e("#amount").val("$" + e("#slider-range").slider("values", 0) + " - $" + e("#slider-range").slider("values", 1)), e(".tweet").twittie({
        username: "envato",
        list: "c-oo-l-e-s-t-nerds-i-know",
        dateFormat: "%b. %d, %Y",
        template: '{{screen_name}} {{tweet}}<div class="date">{{date}}</div>',
        count: 2
    }), e(".grid").masonry();
    var s = e(".masonary-gallery").masonry({
        itemSelector: ".gallery-img",
        columnWidth: ".grid-sizer",
        percentPosition: !0
    });
    e(window).load(function () {
        s.masonry("layout")
    }), e(".mfp-youtube, .mfp-vimeo, .mfp-gmaps").magnificPopup({
        disableOn: 700,
        type: "iframe",
        mainClass: "mfp-fade",
        removalDelay: 0,
        preloader: !1,
        fixedContentPos: !1,
        iframe: {
            markup: '<div class="mfp-iframe-scaler"><div class="mfp-close"></div><iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe></div>',
            patterns: {
                youtube: {index: "youtube.com/", id: "v=", src: "//www.youtube.com/embed/%id%?autoplay=1"},
                vimeo: {index: "vimeo.com/", id: "/", src: "//player.vimeo.com/video/%id%?autoplay=1"},
                gmaps: {index: "//maps.google.", src: "%id%&output=embed"}
            },
            srcAction: "iframe_src"
        }
    }), e(".mfp-youtube").on("click", function () {
        return !1
    }), e(".simpleLens-big-image").simpleLens({loading_image: "assets/images/loading.gif"}), e(window).scroll(function () {
        e(this).scrollTop() > 100 ? e(".scrollToTop").fadeIn() : e(".scrollToTop").fadeOut()
    }), e(".scrollToTop").on("click", function () {
        return e("html, body").animate({scrollTop: 0}, 800), !1
    })
}(jQuery);