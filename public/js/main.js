$(document).ready(function () {
    jQuery.fn.clickToggle = function (a, b) {
        var ab = [b, a];
        return this.on("click", function () {
            ab[this._tog ^= 1].call(this);
        });
    };


    $("#toggle").on('click', function () {
        $("aside").toggleClass("aside");
        $("#content").toggleClass("ml-0 col-md-12 col-xl-12 col-lg-12");
        $("#search").toggleClass("offset-lg-2 offset-md-3 mx-0 col-lg-10 col-md-9")
        // $("#title").toggleClass("")
        // alert("Henlo");
    });


    //menu selection
    $("aside ul li a").on('click', function () {
        $("aside ul li, .active-menu").removeClass("active-menu");
        $(this).parent().addClass("active-menu");
        $(this).addClass("active-menu");
    })

    //display artist respond to selected menu
    // $("#menu-explore").on('click', function () {
    //     $(".app #content").find(">div").not(".app .content #explore").addClass("hide");
    //     $("#explore").removeClass("hide");
    // })
    // $("#menu-songs").on('click', function () {
    //     $(".app #content").find(">div").not(".app .content #songs").addClass("hide");
    //     $("#songs").removeClass("hide");
    // })
    // $("#menu-albums").on('click', function () {
    //     $(".app #content").find(">div").not(".app .content #albums").addClass("hide");
    //     $("#albums").removeClass("hide");
    // })
    // $("#menu-artists").on('click', function () {
    //     $(".app #content").find(">div").not(".app .content #artists").addClass("hide");
    //     $("#artists").removeClass("hide");
    // })
    // $("#sample-album").on('click', function () {
    //     $(".app #content").find(">div").not(".app .content #album-info").addClass("hide");
    //     $("#album-info").removeClass("hide");
    // });
    // $("#american_teen").on('click', function () {
    //     $(".app #content").find(">div").not(".app .content #american-teen").addClass("hide");
    //     $("#american-teen").removeClass("hide");
    // });
    // $("#spiderman_into_the_spider_verse").on('click', function () {
    //     $(".app #content").find(">div").not(".app .content #spiderman-into-the-spider-verse").addClass("hide");
    //     $("#spiderman-into-the-spider-verse").removeClass("hide");
    // });
    // $("#live_in_texas").on('click', function () {
    //     $(".app #content").find(">div").not(".app .content #live-in-texas").addClass("hide");
    //     $("#live-in-texas").removeClass("hide");
    // });
    // $("#artist-khalid").on('click', function () {
    //     $(".app #content").find(">div").not(".app .content #khalid").addClass("hide");
    //     $("#khalid").removeClass("hide");
    // });
    // $("#artist-keiki-kobayashi").on('click', function () {
    //     $(".app #content").find(">div").not(".app .content #album-info").addClass("hide");
    //     $("#album-info").removeClass("hide");
    // });
    // $("#artist-marshmello").on('click', function () {
    //     $(".app #content").find(">div").not(".app .content #marshmello").addClass("hide");
    //     $("#marshmello").removeClass("hide");
    // });
    // $("#artist-post-malone").on('click', function () {
    //     $(".app #content").find(">div").not(".app .content #post-malone").addClass("hide");
    //     $("#post-malone").removeClass("hide");
    // });
    // $("#artist-lauv").on('click', function () {
    //     $(".app #content").find(">div").not(".app .content #lauv").addClass("hide");
    //     $("#lauv").removeClass("hide");
    // });

});
