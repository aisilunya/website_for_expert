$(document).ready(function(){

  var tab_id = $(".nav-tabs").find("li.active").data("id");
  if(tab_id!=undefined) {
    $(".docs").find(".docs-"+tab_id).show();
  }
  else {
    $(".docs .row div > div:nth-child(2)").show();
  }

	
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
      autoplay: true,
      prevArrow: '<i class="fa fa-angle-left up-left"></i>',
      nextArrow: '<i class="fa  fa-angle-right up-right"></i>',
	});
  $('.single_item_two').slick({
     slidesToScroll: 2,
     slidesToShow: 2,
     autoplay: true,
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
      $('a.down').hide();
      $('a.up').show();
    }
    
  });
    $('a.up').click(function(e){
   		e.preventDefault();
		if ($('.add').hasClass('activeB')) {

			$('.add').removeClass('activeB').slideUp();
      $('a.up').hide();
      $('a.down').show();


		}
		else { 
			$('.add').addClass('activeB').slideDown();
     
		}
		
	});





   

   
  $('.panel-1').on("click", function() {
    $(".docs-list").css("display","none");
    $(".docs-"+$(this).data('id')).css("display",'block');
  });


  $(".down-2").click(function(e){
    e.preventDefault();
    $(this).closest(".row").next(".add").show();
    $(this).hide();
  });
  $(".up-2").click(function(e){
    e.preventDefault();

    $(this).closest(".add").hide();
    $(".down-2").show();
  });

  $(".links a").attr("target", "_blank");
  
    
  });