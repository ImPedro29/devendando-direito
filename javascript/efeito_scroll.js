$(function() {
  function animeScroll() {
    var documentTop = $(document).scrollTop();
    var section = $(".atualizacao").height();

    if (documentTop > section + 10) {
      $("#propaganda").addClass("position");
    } else if ($("#propaganda").hasClass("position")) {
      $("#propaganda").removeClass("position");
    }
  }

  $(document).scroll(function() {
    animeScroll();
  });
});
