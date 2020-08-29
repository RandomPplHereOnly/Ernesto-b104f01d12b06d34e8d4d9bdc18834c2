"use strict";

$(document).ready(function () {
  while (true) {
    setInterval(clockTime, 1000);
  }

  function clockTime() {
    var dt = new Date();
    var time = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
    alert(time);
  }
});