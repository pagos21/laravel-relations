require('./bootstrap');

// $("#title_show").click(
//   function(){
//     $("div.hidden").slideToggle(500);
//   }
// )

$(document).ready(function() {
  $(document).on("click", "#title_show", function () {
    // restringere la finestra manualmente
    if (window.outerWidth < 900) {
      $('.hidden').slideToggle(500);
    }
    else {
      $('.hidden').show(500);

    }
  });
});
