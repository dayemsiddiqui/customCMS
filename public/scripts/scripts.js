$(function () {
   console.log("Hello World");
   console.log("Yeah");


 var responsive = function(){
     if($(window).width() > 786){
         $("div.stackcirsm").hide();
         $("div.stackcirlg").show();
         $("div.topbar").show();
         $("div.topBarDropDown").hide();
     }else{
         $("div.stackcirsm").show();
         $("div.stackcirlg").hide();
         $("div.topbar").hide();
         $("div.topBarDropDown").show();
     }

 };

    $("div.customDropNav").click(function() {
        $("div.dropSubMenu").slideToggle( "slow", function() {
            // Animation complete.
        });
    });

    responsive();

    $(window).resize(function(){
        responsive();
    });

 $('div.aboutOverlay').height($('img.imgStyle').height());
 $("#img1").animate({ opacity: 1 }, 2000);
 $("#img2").delay(600).animate({ opacity: 1 }, 2000);
 $("#img3").delay(1200).animate({ opacity: 1 }, 2000);
$("#arrow").click(function() {
  $("html, body").animate({ scrollTop: 0 }, 2000);
  return false;
});


$( "#service").hover(
  function() {
  $("div.dropdown").fadeIn();
  }, function() {
     $("div.dropdown").fadeOut();
  }
);





        $("#owl-demo").owlCarousel({

            navigation :false, // Show next and prev buttons
            slideSpeed : 200,
            paginationSpeed : 1000,
            singleItem:true,
            autoPlay:true,
            transitionStyle : "fade",
            dots: false,
            dotsContainer: false,
            dotsEach: false,
            dotsSpeed: false,
            pagination:false



            // "singleItem:true" is a shortcut for:
            // items : 1,
            // itemsDesktop : false,
            // itemsDesktopSmall : false,
            // itemsTablet: false,
            // itemsMobile : false

        });



    var arrIndexName = ["#one","#two","#three", "#four", "#five", "#six", "#seven", "#eight", "#nine", "#ten", "#eleven", "#twelve", "#thirteen"];
var drop = function(bar,cont){
var i = 0;
$( bar).click(function() {
  $( cont ).slideToggle( "slow", function() {
    // Animation complete.
  });

   if(i%2==0){
   // $.each(arrIndexName, function (index, value) {
           $(bar).css('background',' #efcc86');
   // });

    //$("#two" ).css('background',' #efcc86');
    //$("#three").css('background',' #efcc86');
   $( bar + '> h4.faqHeading').css('color',' white');
   $(bar + '> h4.faqHeading').css('background','#efcc86');
   }
   else{
      // $.each(arrIndexName, function (index, value) {
           $(bar).css('background',' white');
      // });
   	//$("#one" ).css('background',' white');
   	//$("#two" ).css('background',' white');
    //$("#three").css('background',' white');
   $(bar + '> h4.faqHeading').css('color',' black');
    $(bar + '> h4.faqHeading').css('background','white');
   }
   i++;
  });

}




        $("div.py1").click(function() {
                $( "p.py1" ).slideToggle( "slow", function() {
                    // Animation complete.

                })});
    $("div.py2").click(function() {
        $( "div.pyit" ).slideToggle( "slow", function() {
            // Animation complete.

        })});
    $("div.py3").click(function() {
        $( "div.pyclass" ).slideToggle( "slow", function() {
            // Animation complete.

        })});

    //alert($("div.someDiv").width());

    //$("#d8").css("width",$("div.someDiv").width()+65);
    $("#d7").css("max-width",$("div.someDiv").width()+65);
    $("#d6").css("max-width",$("div.someDiv").width()+65);



drop("#one","#1");
drop("#two","#2");
drop("#three","#3");
drop("#four","#4");
drop("#five","#5");
drop("#six","#6");
drop("#seven","#7");
drop("#eight","#8");
drop("#nine","#9");
drop("#ten","#10");
drop("#eleven","#11");
drop("#twelve","#12");
drop("#thirteen","#13");




    $("#serviceRead").click(function() {
        $( "#serviceExtra" ).slideToggle( "slow", function() {
            // Animation complete.
        });});


    $("#supervisionRead").click(function() {
        $( "#supervisionExtra" ).slideToggle( "slow", function() {
            // Animation complete.
        });});

    $("#crossRead").click(function() {
        $( "#crossExtra" ).slideToggle( "slow", function() {
            // Animation complete.
        });});

    $("#hitme").click(function() {
        $( "#crisisExtra" ).slideToggle( "slow", function() {
            // Animation complete.
        });});











    });