 $('.cl-logo-slider').slick({
                dots: true,
                autoplay: true,
                infinite: true,
                autoplaySpeed: 0,
                speed: 5000,
                autoplay: true,

                cssEase: 'linear',
                arrows: false,
                dots: false,
                slidesToShow: 4,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            arrows: false,
                            dots: false,
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });


  $('.bk-edit-slider').slick({
                dots: false,
                arrows: true,
                fade: true,
                cssEase: 'linear'
            });
            $('#s3').cycle({
                fx: 'shuffle',
                prev: '#prev',
                next: '#next',
                speed: 1000
            });



  $('.count').each(function() {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 7000,
                    easing: 'swing',
                    step: function(now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });





// Gallery
// 

$(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });
    
    if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});

  $(document).on('show', '.accordion', function(e) {
                //$('.accordion-heading i').toggleClass(' ');
                $(e.target).prev('.accordion-heading').addClass('accordion-opened');
            });

            $(document).on('hide', '.accordion', function(e) {
                $(this).find('.accordion-heading').not($(e.target)).removeClass('accordion-opened');
                //$('.accordion-heading i').toggleClass('fa-chevron-right fa-chevron-down');
            });

            $(document).ready(function() {
                // $(".fancybox").fancybox();
            });




