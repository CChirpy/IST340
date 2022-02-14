function darkmode() {
   var element = document.body;
   element.classList.toggle("darkmode");

   var x = document.getElementById("modeIcon");
   if (x.innerHTML === "<img src=\"img/sun.svg\" alt=\"sun\">") {
      x.innerHTML = "<img src=\"img/moon.svg\" alt=\"moon\">";
   } else {
      x.innerHTML = "<img src=\"img/sun.svg\" alt=\"sun\">";
   }
}
