$( document ).ready(function() {
  $(".fa").on("mouseover", (event) => {
    let moduleIcon = event.target;
    console.log("ON: " + moduleIcon);
    moduleIcon.animate({"font-size":"50px"}).delay(1300).removeClass("hide");
  });
  $(".fa").on("mouseout", (event) => {
    let moduleIcon = event.target;
    console.log("OUT: " + moduleIcon);

    // moduleIcon.addClass("hide");
  });
});
