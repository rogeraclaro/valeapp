jQuery(document).ready(function () {
  var Menu = {
    el: {
      ham: $(".menuburger"),
      menuTop: $(".menu-top"),
      menuMiddle: $(".menu-middle"),
      menuBottom: $(".menu-bottom"),
    },

    init: function () {
      Menu.bindUIactions();
    },

    bindUIactions: function () {
      Menu.el.ham.on("click", function (event) {
        Menu.activateMenu(event);
        event.preventDefault();
      });
    },

    activateMenu: function () {
      Menu.el.menuTop.toggleClass("menu-top-click");
      Menu.el.menuMiddle.toggleClass("menu-middle-click");
      Menu.el.menuBottom.toggleClass("menu-bottom-click");
      jQuery(".menu-main ul").slideToggle(300);
    },
  };

  Menu.init();
});
