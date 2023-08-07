$(function () {
    var t = $(".js-timeline"),
        s = $(".js-timeline_line"),
        i = $(".js-timeline_line-progress"),
        o = $(".js-timeline-card_point-box"),
        e = $(".js-timeline_item"),
        f = $(window).scrollTop(),
        n = $(window),
        l = n.height(),
        c = n.outerHeight(),
        r = -1,
        a = !1;
    function p() {
        a = !1;
        var l,
            p,
            h,
            g,
            d,
            j,
            m = e.first().find(o),
            u = e.last().find(o),
            v = t.offset().top + t.outerHeight(),
            T = m.offset().top - e.first().offset().top,
            C = v - u.offset().top;
        s.css({
            top: T,
            bottom: C,
        }),
            r !== f &&
                ((r = f),
                (l = e.last().find(o).offset().top),
                (p = i.offset().top),
                (h = n.scrollTop()),
                (d = (g = (n.height(), c)) / 2),
                (j = 0),
                (j = l + h - h < h + d ? l + h - h - p + d : h - p + d),
                i.css({
                    height: j + "px",
                }),
                e.not(":first").each(function () {
                    $(this).find(o).offset().top + h - h < h + 0.5 * g
                        ? $(this).addClass("js-ag-active")
                        : $(this).removeClass("js-ag-active");
                }));
    }
    function h() {
        a || (requestAnimationFrame(p), (a = !0));
    }
    e.first().addClass("js-ag-active"),
        n.on("scroll", function () {
            (f = n.scrollTop()), h();
        }),
        n.on("resize", function () {
            (f = n.scrollTop()), (l = n.height()), h();
        });
});
!(function (e) {
    "use strict";
    var l = e(".header_area").height() + 50;
    if (
        (e(".header_area").length &&
            e(window).scroll(function () {
                e(window).scrollTop() >= l
                    ? e(".header_area").addClass("navbar_fixed")
                    : e(".header_area").removeClass("navbar_fixed");
            }),
        e(".testimonial_slider").length &&
            e(".testimonial_slider").owlCarousel({
                loop: !0,
                margin: 30,
                items: 2,
                nav: !1,
                autoplay: !0,
                dots: !0,
                smartSpeed: 1500,
                responsiveClass: !0,
                responsive: {
                    0: {
                        items: 1,
                    },
                    768: {
                        items: 2,
                    },
                },
            }),
        e("#mc_embed_signup").find("form").ajaxChimp(),
        e(".bg-parallax").parallax(),
        e("select").niceSelect(),
        e("#datetimepicker11,#datetimepicker1").datetimepicker({
            daysOfWeekDisabled: [0, 6],
        }),
        e("#gallery").length &&
            e("#gallery").imagesLoaded(function () {
                e("#gallery").isotope({
                    itemSelector: ".gallery_item",
                    layoutMode: "masonry",
                    animationOptions: {
                        duration: 750,
                        easing: "linear",
                    },
                });
            }),
        e(".imageGallery1 .light").simpleLightbox(),
        e("#mapBox").length)
    ) {
        var t = e("#mapBox").data("lat"),
            a = e("#mapBox").data("lon"),
            r = e("#mapBox").data("zoom");
        e("#mapBox").data("marker"),
            e("#mapBox").data("info"),
            e("#mapBox").data("mlat"),
            e("#mapBox").data("mlon"),
            new GMaps({
                el: "#mapBox",
                lat: t,
                lng: a,
                scrollwheel: !1,
                scaleControl: !0,
                streetViewControl: !1,
                panControl: !0,
                disableDoubleClickZoom: !0,
                mapTypeControl: !1,
                zoom: r,
                styles: [
                    {
                        featureType: "water",
                        elementType: "geometry.fill",
                        stylers: [
                            {
                                color: "#dcdfe6",
                            },
                        ],
                    },
                    {
                        featureType: "transit",
                        stylers: [
                            {
                                color: "#808080",
                            },
                            {
                                visibility: "off",
                            },
                        ],
                    },
                    {
                        featureType: "road.highway",
                        elementType: "geometry.stroke",
                        stylers: [
                            {
                                visibility: "on",
                            },
                            {
                                color: "#dcdfe6",
                            },
                        ],
                    },
                    {
                        featureType: "road.highway",
                        elementType: "geometry.fill",
                        stylers: [
                            {
                                color: "#ffffff",
                            },
                        ],
                    },
                    {
                        featureType: "road.local",
                        elementType: "geometry.fill",
                        stylers: [
                            {
                                visibility: "on",
                            },
                            {
                                color: "#ffffff",
                            },
                            {
                                weight: 1.8,
                            },
                        ],
                    },
                    {
                        featureType: "road.local",
                        elementType: "geometry.stroke",
                        stylers: [
                            {
                                color: "#d7d7d7",
                            },
                        ],
                    },
                    {
                        featureType: "poi",
                        elementType: "geometry.fill",
                        stylers: [
                            {
                                visibility: "on",
                            },
                            {
                                color: "#ebebeb",
                            },
                        ],
                    },
                    {
                        featureType: "administrative",
                        elementType: "geometry",
                        stylers: [
                            {
                                color: "#a7a7a7",
                            },
                        ],
                    },
                    {
                        featureType: "road.arterial",
                        elementType: "geometry.fill",
                        stylers: [
                            {
                                color: "#ffffff",
                            },
                        ],
                    },
                    {
                        featureType: "road.arterial",
                        elementType: "geometry.fill",
                        stylers: [
                            {
                                color: "#ffffff",
                            },
                        ],
                    },
                    {
                        featureType: "landscape",
                        elementType: "geometry.fill",
                        stylers: [
                            {
                                visibility: "on",
                            },
                            {
                                color: "#efefef",
                            },
                        ],
                    },
                    {
                        featureType: "road",
                        elementType: "labels.text.fill",
                        stylers: [
                            {
                                color: "#696969",
                            },
                        ],
                    },
                    {
                        featureType: "administrative",
                        elementType: "labels.text.fill",
                        stylers: [
                            {
                                visibility: "on",
                            },
                            {
                                color: "#737373",
                            },
                        ],
                    },
                    {
                        featureType: "poi",
                        elementType: "labels.icon",
                        stylers: [
                            {
                                visibility: "off",
                            },
                        ],
                    },
                    {
                        featureType: "poi",
                        elementType: "labels",
                        stylers: [
                            {
                                visibility: "off",
                            },
                        ],
                    },
                    {
                        featureType: "road.arterial",
                        elementType: "geometry.stroke",
                        stylers: [
                            {
                                color: "#d6d6d6",
                            },
                        ],
                    },
                    {
                        featureType: "road",
                        elementType: "labels.icon",
                        stylers: [
                            {
                                visibility: "off",
                            },
                        ],
                    },
                    {},
                    {
                        featureType: "poi",
                        elementType: "geometry.fill",
                        stylers: [
                            {
                                color: "#dadada",
                            },
                        ],
                    },
                ],
            });
    }
})(jQuery);
