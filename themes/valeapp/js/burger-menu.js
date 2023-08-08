jQuery(document).ready(function () {
  var Menu = {
    el: {
      ham: jQuery(".menuburger"),
      menuTop: jQuery(".menu-top"),
      menuMiddle: jQuery(".menu-middle"),
      menuBottom: jQuery(".menu-bottom"),
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
