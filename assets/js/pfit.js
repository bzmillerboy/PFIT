
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
$('#sell-1').hover(
  function () {
    $( "#sell-cont-1" ).toggleClass("visible");
  }
);

$('#sell-2').hover(
  function () {
    $( "#sell-cont-2" ).toggleClass("visible");
  }
);

$('#sell-3').hover(
  function () {
    $( "#sell-cont-3" ).toggleClass("visible");
  }
);

$('#sell-4').hover(
  function () {
    $( "#sell-cont-4" ).toggleClass("visible");
  }
);

$('#sell-5').hover(
  function () {
    $( "#sell-cont-5" ).toggleClass("visible");
  }
);
