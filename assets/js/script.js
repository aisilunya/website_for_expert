$(document).ready(function(){
	
//   $('.single_item_one').slick({
//     	prevArrow:"<img class='a-left control-c prev slick-prev' src='assets/img/img-main/arrow-left.png'>",
//     	nextArrow:"<img class='a-right control-c next slick-next' src='assets/img/img-main/arrow-right.png'>",
//   });
// //   $('.single_item_one').on('afterChange', function(slick, currentSlide){
// //   console.log(currentSlide);
// // });
 	var $status = $('.pagingInfo');
	var $slickElement = $('.single_item_one');

	$slickElement.on('init reInit afterChange', function(event, slick, currentSlide, nextSlide){
	   
	    var i = (currentSlide ? currentSlide : 0) + 1;
	    $status.text(i + '/' + slick.slideCount);
	});

	$slickElement.slick({
	   // prevArrow:"<img class='a-left control-c prev slick-prev' src='assets/img/img-main/arrow-left.png'>",
    // 	nextArrow:"<img class='a-right control-c next slick-next' src='assets/img/img-main/arrow-right.png'>",
    	// dots: true
      prevArrow: '<i class="fa fa-angle-left up-left"></i>',
      nextArrow: '<i class="fa  fa-angle-right up-right"></i>',
	});
  $('.single_item_two').slick({
     slidesToScroll: 2,
     slidesToShow: 2,
     prevArrow: '<i class="fa fa-angle-left"></i>',
     nextArrow: '<i class="fa  fa-angle-right"></i>',
       responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
       
        
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 425,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
   
  ]
  });
  $('.page_link').on("click", function() {
    $(".page_link").addClass("active_red");
  });
   $('.mobyle-open').on("click",function(){
    $(".mobyle-menu").addClass("active");
    $("body").addClass('overflow');
  })
  $('.mobyle-close').on("click",function(){
    $(".mobyle-menu").removeClass("active");
    $("body").removeClass('overflow');
  });
  $('.search_icon').on("click", function() {
    $('.search_bar').addClass("activeC");
    $("body").addClass('overflow');
  })
  $('.search-close').on("click", function() {
    $('.search_bar').removeClass("activeC");
    $("body").removeClass('overflow');
  })

   $('a.down').click(function(e){
   		e.preventDefault();
		if ($('.add').hasClass('activeB')) {
			$('.add').removeClass('activeB').slideUp();
		}
		else { 
			$('.add').addClass('activeB').slideDown();
		}
		
	});
   $('a.tech').click(function() {
    $('.docs-1').hide();
    $('.docs-2').show();

   });
   $('a.sud').click(function() {
    $('.docs-2').hide();
    $('.docs-1').show();
   })
    

    
   
});
