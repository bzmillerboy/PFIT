
   //Transparent Nav
    $().ready(function(){
        $(window).on('scroll', gsdk.checkScrollForTransparentNavbar);
    });

   //parallax scrolling
    var big_image;
    $().ready(function(){
        responsive = $(window).width();

        $(window).on('scroll', gsdk.checkScrollForTransparentNavbar);

        if (responsive >= 768){
            big_image = $('.parallax-image').find('img');

            $(window).on('scroll',function(){
                parallax();
            });
        }

    });


   var parallax = function() {
        var current_scroll = $(this).scrollTop();

        oVal = ($(window).scrollTop() / 3);
        big_image.css('top',oVal);
    };


//Managed IT Sell Section
//$( "#sell-2" ).toggleClass( "sell-box-active" )

$( ".sell-box" ).hover(function() {
  $( this ).toggleClass( "sell-box-active" );
});


new WOW().init();
