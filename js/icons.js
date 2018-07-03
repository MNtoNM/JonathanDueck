$( document ).ready(function() {
  $(".fa").on("mouseover", (event) => {
    let moduleIcon = event.target;
    $(moduleIcon).animate({"font-size":"3em"}).delay(1300).removeClass("hide");
  });
  $(".fa").on("mouseout", (event) => {
    let moduleIcon = event.target;
    $(moduleIcon).animate({"font-size": "2em"}) /*.addClass("hide");*/ ;
  });
});
