function openDrawer() {
   var x = document.getElementById("dirIcon");
   if (x.innerHTML === "<img src=\"img/up.svg\" alt=\"up\">") {
      x.innerHTML = "<img src=\"img/down.svg\" alt=\"down\">";
      document.getElementById("drawer").style.height = "250px";
   } else {
      x.innerHTML = "<img src=\"img/up.svg\" alt=\"up\">";
      document.getElementById("drawer").style.height = "0";
   }
}
