
$(".otziv__slider").slick({
    slidesToShoW: 1,
    slidesToScroll:1,
    dots: true,
    nextArrow: "<span class='chap'><i class='fa fa-angle-left'></i></span>",
    prevArrow: "<span class='ong'><i class='fa fa-angle-right'></i></span>",
    autoplay: true,
    autoplaySpeed: 4000,
    responsive:
    [
        {
            breakpoint: 1020,
            settings: {
                arrows: false
            }
        }
    ]
});


$(window).load(function(){
   if( $("#id1").hasClass("galareya-active") ){
       $(".galareya").slideDown();
       $(".otziv").slideUp();
    }else{
        $(".galareya").slideUp();
        $(".otziv").slideDown();
   }
});

$(document).ready(function(){

    $(".slider__banner").slick({
        slidesToShow: 1,
        slidesToScroll:1,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 4000
    });

    $(".galeriyan_col").slick({
        slidesToShow: 1,
        slidesToScroll:1,
        arrows: true,
        autoplay: true,
        nextArrow: ".galareyan_next",
        prevArrow: ".galareyan_prew",
        autoplaySpeed: 4000
    });
    // codes for 5 xil tur
    $(".nav-item").click(function(e){
        e.preventDefault();
        $(".nav-item").removeClass("nav-active");
        $(this).addClass("nav-active");
    });

    // codes for yosh
    $(".let-link").click(function(e){
        e.preventDefault();
        $(".let-link").removeClass("let-active");
        $(this).addClass("let-active");
        //$("#let__id").val($(this).children(".let__left--yosh").children("p").html());
        
    });


    // codes for let link2

    $(".let-link2").click(function(e){
        e.preventDefault();
        $(".let-link2").removeClass("let-active");
        $(this).addClass("let-active");
    });

    // codes for category
    // $(".category-link").click(function(e){
    //     e.preventDefault();
    //     $(".category-link").removeClass("category-active");
    //     $(this).addClass("category-active");
        
    // });

    // codes for input
    $("input").select(function(){
        $(this).css("border-color","red");
    });

    // code for galareya
    $(".galareya__link").click(function(e){
        e.preventDefault();
        $(".galareya__link").removeClass("galareya-active");
        $(this).addClass("galareya-active");
        if( $("#id1").hasClass("galareya-active") ){
            $(".galareya").slideDown();
            $(".otziv").slideUp();
        }else{
            $(".galareya").slideUp();
            $(".otziv").slideDown();
        }
    });

    // codes for accordion
    //$("#accordion").accordion();


    
   
        

    // codes for ob slider
    $(".oslider1").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        nextArrow: "<span class='ob__chap'><i class='fa fa-angle-left'></i></span>",
        prevArrow: "<span class='ob__ong'><i class='fa fa-angle-right'></i></span>",
        responsive:
        [
            {
                breakpoint: 1020,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 560,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });

    //  codes for ob slider2
    $(".obslider2").slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        nextArrow: "<span class='ob__chap'><i class='fa fa-angle-left'></i></span>",
        prevArrow: "<span class='ob__ong'><i class='fa fa-angle-right'></i></span>",
        responsive:
        [
            {
                breakpoint: 1020,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 560,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });

    // codes for ob slider3
    $(".obslider3").slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        nextArrow: "<span class='ob__chap'><i class='fa fa-angle-left'></i></span>",
        prevArrow: "<span class='ob__ong'><i class='fa fa-angle-right'></i></span>",
        responsive:
        [
            {
                breakpoint: 1020,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 560,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });

})