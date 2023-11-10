$(document).ready(function () {
  var menu = true;

  $("#MenuButton").click(function (event) {
    event.preventDefault();

    console.error("teste");

    menu = !menu;

    if (menu) {
      $("#menuOpcoes").hide();
    } else {
      $("#menuOpcoes").show();
    }
  });
});
