var send = 1,
    send_elem = 1;
$(function(){
  audioUpdate();
  addPhoto();
  reviewPager();
  $(".search-icon").on("click",function(){
    $(this).css("display","none");
    $("#title-search").addClass("active");
  })
  $(window).on("load",function(){
    $(".suri_list").mCustomScrollbar();
  });
  $('.mobile-menu-link').on("click",function(){
    $(".mobile-menu").addClass("active");
    $("body").addClass('overflow');
  })
  $('.mobile-menu-link-c').on("click",function(){
    $(".mobile-menu").removeClass("active");
    $("body").removeClass('overflow');
  })
  $(".suri_select").on("click",function(){
    if($('.suri_list').hasClass("active")){
      $('.suri_list').removeClass("active").slideUp();
      $(this).find("i").attr("class","uk-icon-caret-down");
    }else{
      $('.suri_list').addClass("active").slideDown();
      $(this).find("i").attr("class","uk-icon-caret-up");
    }
  })
  $(".change_trans a").on("click",function(e){
    e.preventDefault();
    $(".change_trans a").removeClass("active");
    $(this).addClass("active");

    if($(this).data("trans")==1){
      Cookies.set('trans', 'Y');
    }else{
      Cookies.remove('trans');

    }
    if(send){
      $(".suri_list").mCustomScrollbar("destroy").html('<div class="uk-text-center"><i class="uk-icon-spin uk-icon-spinner"></i></div>');
      send = 0;
      $.ajax({
        method: "POST",
        data: {surilist: "Y"}
      })
        .done(function( html ) {
          send = 1;
          setTimeout(suri_list, 1500,html);
        }).fail(function() {
          send = 1;
          $('.suri_list').html("Чтото пошло не так");
        })
    }
  });
  $(".select span").on("click",function(){
    if($(this).parent().find(".hidden_val").hasClass("active")){
      $(this).parent().find(".hidden_val").removeClass("active").slideUp("fast");
      $(this).parent().find("i").removeClass("uk-icon-caret-up").addClass("uk-icon-caret-down");
    }else{
      $(this).parent().find(".hidden_val").addClass("active").slideDown("fast");
      $(this).parent().find("i").removeClass("uk-icon-caret-down").addClass("uk-icon-caret-up");
    }
  });
  $(".select .hidden_val > div").on("click",function(){
    $(this).siblings("div").removeClass("active");
    $(this).addClass("active");
    $(this).closest(".select").find("span").text($(this).text());
    var $bogoslow = $(this).text();
    $(this).closest(".select").find(".hidden_val").removeClass("active").slideUp("fast");
    $(this).closest(".select").find("i").removeClass("uk-icon-caret-up").addClass("uk-icon-caret-down");
    if(send_elem){
      $(".suri_elem_list").mCustomScrollbar("destroy").html('<div class="uk-text-center"><i class="uk-icon-spin uk-icon-spinner"></i></div>');
      send_elem = 0;
      $.ajax({
        method: "POST",
        data: {surielem: "Y",bogoslow:$bogoslow}
      })
        .done(function( html ) {
          send_elem = 1;
          setTimeout(suri_elem_list, 1500,html);
        }).fail(function() {
          send_elem = 1;
          $('.suri_elem_list').html("<div class='uk-text-center'><b>Чтото пошло не так</div></b>");
        })
    }
  });
  $(".news-detail-play-panel .play").on("click",function(e){
    e.preventDefault();

    if($(this).parent(".news-detail-play-panel").find("audio")[0].paused){
      $(this).parent(".news-detail-play-panel").find("audio").trigger("play");
      $(this).find("i").addClass("uk-icon-pause-circle-o").removeClass("uk-icon-volume-up");
    }else{
      $(this).parent(".news-detail-play-panel").find("audio").trigger("pause");
      $(this).find("i").addClass("uk-icon-volume-up").removeClass("uk-icon-pause-circle-o");
    }
  })

  $("abbr.timeago").timeago();
  var $selects = $('select');
  $selects.easyDropDown({
    cutOff: 10,
    onSelect: function(selected){
    }
  });
  $(".element-filter select").on("change",function(){
    var url = $(this).find("option:selected").data("url");
    window.location.replace(url);
    /*$(".element-list").html('<div class="uk-text-center"><i class="uk-icon-spin uk-icon-medium uk-icon-spinner"></i><br /><br /><br /></div>');
    if(send){
      send = 0;
      $.ajax({
        method: "POST",
        url: url,
        data: {ajax: "Y"}
      })
        .done(function( html ) {
          send = 1;
          setTimeout(element_list, 1500,html);
        }).fail(function() {
          send = 1;
          $('.element-list').html("<div class='uk-text-center'><b>Чтото пошло не так</b></div>");
        });
    }*/
  });
  if($(".news-detail-content").length && !$(".news-detail").hasClass("suri")){
    $(".news-detail-content img").each(function(){
      $tImage = $(this);
      $tImage.after(function(){
        return '<div class="image_content '+$tImage.attr("align")+'" style="float:'+$tImage.attr("align")+';"><img src="'+$tImage.attr("src")+'"><br />'+$tImage.attr("title")+'</div>';
      });
      $tImage.remove();
    })
  }
  $(".button-reply").on("click",function(){
    var $thisBut = $(this),
    $newForm = $("#comment"+$thisBut.closest(".uk-grid").data("id")).closest(".news-detail-comments.add");

    $(".news-detail-comments .news-detail-comments.add").removeClass("active").find(".form").html("");
    $newForm.addClass("active");
    $("#comment"+$thisBut.closest(".uk-grid").data("id")).html($(".news-detail-comments.add.form").html());
    $("#comment"+$thisBut.closest(".uk-grid").data("id")).find("b").text("ДОБАВИТЬ ОТВЕТ");
    $("#comment"+$thisBut.closest(".uk-grid").data("id")).find("input[name=parent]").val($thisBut.closest(".uk-grid").data("id"));
    submitComment();
    addPhoto();
    UIkit.Utils.scrollToElement(UIkit.$("#comment"+$thisBut.closest(".uk-grid").data("id")),{offset:100});
  })
  submitComment();
});
function submitComment(){
  $(".news-detail-comments form").off("submit").on("submit",function(e){
    e.preventDefault();
    var $form = $(this),
    err = 0;
    console.log($(this));
    $form.find("input[type=text],input[type=email],textarea").each(function(){
      if($(this).val()==""){
        $(this).addClass('error');
        err++;
      }else{
        $(this).removeClass('error');
      }
    });
    console.log(err);
    if(err==0){
      var data = new FormData($form[0]);
      url = $form.attr("action");
      $form.find('button[type=submit]').html('<i class="uk-icon-spin uk-icon-spinner"></i>').addClass("active");
      $.ajax({
        method: "POST",
        url: url,
        processData: false,
        contentType: false,
        data: data
      })
        .done(function( html ) {
          console.log("ok");
          setTimeout(commentSubmit, 1500,html,$form);
        })
        .fail(function() {
          console.log("ok");
          setTimeout(commentSubmit, 1500,"error",$form);
        });
    }
  });
}
function reviewPager(){
  $(".element-list .more_rev").off("click").on("click",function(e){
    e.preventDefault();
    $(".element-list .more_rev").remove();
    $(".element-list").append('<div class="load"><div class="uk-text-center"><i class="uk-icon-spin uk-icon-medium uk-icon-spinner"></i></div></div>');
    var url = $(this).attr('href');
    $.ajax({
      method: "POST",
      url:url,
      data:{ajax:"Y"},
    }).done(function(msg) {
      $(".element-list .load").remove();
      $(".element-list").append(msg);
      var curLoc = History.getState();
      History.pushState(null, $(document).prop('title'), url);
      reviewPager();
    });
  });
}
function commentSubmit(html,$form){
  $form.find('button[type=submit]').html("Отправить").removeClass("active");
  var message = '';
  if(html=="ok"){
    $form.trigger("reset");
    message = '<div class="uk-alert uk-alert-success" data-uk-alert><a href="" class="uk-alert-close uk-close"></a><p>Комментарий успешно добавлен, будет опубликован после проверки.</p></div>';
  }else{
    message = '<div class="uk-alert uk-alert-danger" data-uk-alert><a href="" class="uk-alert-close uk-close"></a><p>Что то пошло не так, попробуйте позже.</p></div>';
  }
  $form.prepend(message)
}
function suri_list(html){
  $('.suri_list').html(html);
  $(".suri_list").mCustomScrollbar();
}
function element_list(html){
  $('.element-list').html(html);
}
function audioUpdate(){
  $(".suri_elem--play-panel .play").off("click").on("click",function(e){
    e.preventDefault();
    if($(this).parent(".suri_elem--play-panel").find("audio")[0].paused){
      $(this).parent(".suri_elem--play-panel").find("audio").trigger("play");
      $(this).find("i").addClass("uk-icon-pause-circle-o").removeClass("uk-icon-volume-up");
    }else{
      $(this).parent(".suri_elem--play-panel").find("audio").trigger("pause");
      $(this).find("i").addClass("uk-icon-volume-up").removeClass("uk-icon-pause-circle-o");
    }
  })
}
function suri_elem_list(html){
    $('.suri_elem_list').html(html);
    audioUpdate();
}
function addPhoto(){
  $(".addFile").off("click").on("click",function(){
    $(this).closest("form").find("input[type=file]").click();
  });
  $(".form input[type=file]").off("change").on("change",function(){
    var name = $(this).val().split('\\');
    $(".fileName").html("<div class='file'>" + name[name.length - 1] + '&nbsp;&nbsp;<a href="" class="uk-icon-close"></a></div>');
    $(".fileName a").off('click').on("click",function(e){
      e.preventDefault();
      $(".nc-upload-input").val("");
      $(".fileName").html("");
    });
  });
}
