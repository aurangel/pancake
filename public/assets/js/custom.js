!function (e) {
    "use strict";
    
    Barba.Dispatcher.on('newPageReady', function(currentStatus, oldStatus, container) {
        if (document.getElementById("disqus_thread")) {
            var disqus_shortname = 'handmadeblog'
            var disqus_identifier = 'blog-' + Barba.Pjax.getCurrentUrl()
            var disqus_url = Barba.Pjax.getCurrentUrl()
            var disqus_script = 'embed.js'

            // here we will only load the disqus <script> if not already loaded
            if (!window.DISQUS) {
                (function(d,s) {
                    s = d.createElement('script');
                    s.async=1;s.src = '//' + disqus_shortname + '.disqus.com/'+disqus_script;
                    (d.getElementsByTagName('head')[0]).appendChild(s);
                })(document)
            }
            // if disqus <script> already loaded, we just reset disqus the right way
            // see http://help.disqus.com/customer/portal/articles/472107-using-disqus-on-ajax-sites
            else {
                setTimeout(function() {
                    DISQUS.reset({
                        reload: true,
                        config: function () {
                            this.page.identifier = disqus_identifier
                            this.page.url = disqus_url
                        }
                    })
                }, 2000);
            }
        }
    });

    e(".dropdown a.dropdown-toggle").on("click", function (o) {
        e(this).next("ul").toggle(), o.stopPropagation(), o.preventDefault()
    }), SmoothScroll({stepSize: 80});
    var o;
    e("#slider-range").slider({
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
        Barba.Pjax.start();
        var FadeTransition = Barba.BaseTransition.extend({
            start: function() {
                /**
                 * This function is automatically called as soon the Transition starts
                 * this.newContainerLoading is a Promise for the loading of the new container
                 * (Barba.js also comes with an handy Promise polyfill!)
                 */

                // As soon the loading is finished and the old page is faded out, let's fade the new page
                Promise
                    .all([this.newContainerLoading, this.fadeOut()])
                    .then(this.fadeIn.bind(this));
            },

            fadeOut: function() {
                /**
                 * this.oldContainer is the HTMLElement of the old Container
                 */

                return $(this.oldContainer).animate({ opacity: 0 }).promise();
            },

            fadeIn: function() {
                /**
                 * this.newContainer is the HTMLElement of the new Container
                 * At this stage newContainer is on the DOM (inside our #barba-container and with visibility: hidden)
                 * Please note, newContainer is available just after newContainerLoading is resolved!
                 */

                var _this = this;
                var $el = $(this.newContainer);

                $(this.oldContainer).hide();

                $el.css({
                    visibility : 'visible',
                    opacity : 0
                });

                $el.animate({ opacity: 1 }, 400, function() {
                    /**
                     * Do not forget to call .done() as soon your transition is finished!
                     * .done() will automatically remove from the DOM the old Container
                     */

                    _this.done();
                });
            }
        });
        Barba.Pjax.getTransition = function() {
            return FadeTransition;
        };
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