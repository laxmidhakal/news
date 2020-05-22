function auto_resizer(myImage) {
  $( window ).on( "load resize", function() {

    $(myImage).each(function(el) {
      $(this).parent().addClass("img_resize_box");
      var img_parent = $(this).parent();

      var img_ratio = $(this).height()/$(this).width();
      var parent_ratio = $(img_parent).height()/$(img_parent).width();
      console.log(img_ratio);
      console.log(parent_ratio);

      if (img_ratio <= parent_ratio) {
        $(this).addClass("set_h").removeClass("set_w");
      }
      else{
        $(this).addClass("set_w").removeClass("set_h");
      }
    });
  });
}