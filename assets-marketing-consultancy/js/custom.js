if($(window).width() <= 991){
    if(('.books-main-slider').length != 0){
        $('.books-main-slider').addClass('owl-carousel owl-theme');
        $('.books-main-slider').owlCarousel({
            loop:false,
            nav:true,
            navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
            dots: false,
            autoplay:false,
            mouseDrag: true,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1
                },

                575:{
                    items:2
                },

                767:{
                    items:2
                },
            }
        });
    }
};

if($(window).width() <= 991){
    if(('.portfolio-slider').length != 0){
        $('.portfolio-slider').addClass('owl-carousel owl-theme');
        $('.portfolio-slider').owlCarousel({
            loop:false,
            nav:true,
            navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
            dots: false,
            autoplay:false,
            mouseDrag: true,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1
                },

                575:{
                    items:2
                },

                767:{
                    items:3
                },
            }
        });
    }
};


if($(window).width() <= 992){
    if(('.testi-slider').length != 0){
        $('.testi-slider').addClass('owl-carousel owl-theme');
        $('.testi-slider').owlCarousel({
            loop:false,
            nav:true,
            navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
            dots: false,
            autoplay:false,
            mouseDrag: true,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1
                },
        
                768:{
                    items:2,
                    margin:0
                },
        
                991:{
                    items:2
                },
            }
        });
    }
};

if($(window).width() <= 991){
    if(('.how-it-slider').length != 0){
        $('.how-it-slider').addClass('owl-carousel owl-theme');
        $('.how-it-slider').owlCarousel({
            loop:false,
            nav:true,
            navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
            dots: false,
            autoplay:false,
            mouseDrag: true,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1
                },

                575:{
                    items:2
                },

                767:{
                    items:2
                },
            }
        });
    }
};

if($(window).width() <= 991){
    if(('.count-slider').length != 0){
        $('.count-slider').addClass('owl-carousel owl-theme');
        $('.count-slider').owlCarousel({
            loop:false,
            nav:true,
            navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
            dots: false,
            autoplay:false,
            mouseDrag: true,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1
                },

                575:{
                    items:2
                },

                767:{
                    items:2
                },
            }
        });
    }
};


$('.books-slider').addClass('owl-carousel owl-theme');
$('.books-slider').owlCarousel({
    loop: false,
    margin: 0,
    nav:true,
    mouseDrag  : false,
    dots: false,
    animateOut: 'fadeOut',
    autoplay:false,
    navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
    responsiveClass:true,
    responsive:{
        0:{
            items:1
        },

        1200:{
            items:1
        }
    }
});

$("#entry-box_close").click(function() {
    $("#entry-popup").fadeOut()
}), $(".open-popup").click(function() {
    $("#input-box").html(""), null != $(this).data("price") && ($("#input-box").append('<input type="hidden" name="customers_meta[price]" value="' + $(this).data("price") + '">'), $("#input-box").append('<input type="hidden" name="customers_meta[name]" value="' + $(this).data("name") + '">')), $("#entry-popup").css("display", "flex").fadeIn()
}), 
AOS.init({
    disable: function () {
        return window.innerWidth < 1000;
    },
}),


// $(document).ready(function() {
//     $("#entry-box_close").click(function() {
//         $("#entry-popup").fadeOut()
//     }), window.location.hash || setTimeout(function() {
//         $("#entry-popup").css("display", "flex").fadeIn()
//     }, 2e4)
// })

$('.counting').each(function() {
    var $this = $(this),
        countTo = $this.attr('data-count');
    
    $({ countNum: $this.text()}).animate({
    countNum: countTo
    },

    {

    duration: 3000,
    easing:'linear',
    step: function() {
        $this.text(Math.floor(this.countNum) + '+');
    },
    complete: function() {
        $this.text(this.countNum + '+');
        //alert('finished');
    }

    });  
    

});