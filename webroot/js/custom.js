$(document).on("scroll", function() {
    $(".header-type-1 #page-header-nav").toggleClass("navbar-fixed-top", $(document).scrollTop() >= 47), $(".header-type-4 #page-header-nav").toggleClass("navbar-fixed-top", $(document).scrollTop() >= 157), $(".header-type-1 #page-body").toggleClass("body-on-scroll", $(document).scrollTop() >= 47), $(".header-type-4 #page-body").toggleClass("body-on-scroll", $(document).scrollTop() >= 157)
});
$(document).ready(function() {
    $(".tm-icons a,.navbar-socials a,.ch-elements-tt .btn").tooltip()
});
$(document).ready(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 110) {
            $(".go-top").addClass("go-top-visible")
        } else {
            $(".go-top").removeClass("go-top-visible")
        }
    });
    $(".go-top,.top,.top2").click(function(e) {
        e.preventDefault();
        $("html, body").animate({
            scrollTop: 0
        }, "slow")
    })
});
var c = document.cookie;
$(".kd-forum-header").each(function() {
    if (this.id) {
        var e = c.indexOf(this.id + "_kd_header_in=");
        if (e > -1) {
            c.substr(e).split("=")[1].indexOf("false") ? $(this).addClass("in") : $(this).removeClass("in")
        }
    }
}).on("hidden.bs.collapse shown.bs.collapse", function() {
    if (this.id) {
        document.cookie = this.id + "_kd_header_in=" + $(this).hasClass("in")
    }
});
$(".kd-forum-body.collapse").each(function() {
    if (this.id) {
        var e = c.indexOf(this.id + "_collapse_in=");
        if (e > -1) {
            c.substr(e).split("=")[1].indexOf("false") ? $(this).addClass("in") : $(this).removeClass("in")
        }
    }
}).on("hidden.bs.collapse shown.bs.collapse", function() {
    if (this.id) {
        document.cookie = this.id + "_collapse_in=" + $(this).hasClass("in")
    }
});
window.console = window.console || function() {
    var e = {};
    e.log = e.warn = e.debug = e.info = e.error = e.time = e.dir = e.profile = e.clear = e.exception = e.trace = e.assert = function() {};
    return e
}();
(function(e) {
    jQuery(document).ready(function(e) {
        e("#style-switcher").css({
            left: "-214px"
        });
        e("#style-switcher h2 a").click(function(t) {
            t.preventDefault();
            var n = e("#style-switcher");
            console.log(n.css("left"));
            if (n.css("left") === "-214px") {
                e("#style-switcher").animate({
                    left: "0px"
                })
            } else {
                e("#style-switcher").animate({
                    left: "-214px"
                })
            }
        });
        e(".headers").change(function() {
            e("#swsh1, #swsh2, #swsh3,#swsh4").hide();
            e("#sw" + e(this).find("option:selected").attr("id")).show()
        });
        var t = "header-type-1";
        e(".headers").change(function() {
            e("#wrap").removeClass(t).addClass(e(this).val());
            t = e(this).val()
        });
        e(".footers").change(function() {
            e("#swsf1, #swsf2, #swsf3").hide();
            e("#sw" + e(this).find("option:selected").attr("id")).show()
        });
        e("#reset a").click(function(t) {
            var n = e(this).css("backgroundColor");
            e("body").css("backgroundColor", "#F7F7F8");
            e("#swsf1,#swsf2,#swsh2, #swsh3, #swsh4").hide();
            e("#swsf3,#swsh1").show();
            e(".headers,.footers").prop("selectedIndex", 0)
        })
    })
})(jQuery)