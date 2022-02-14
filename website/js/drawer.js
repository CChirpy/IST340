function openNav() {
   var x = document.getElementById("navDir");
   if (x.innerHTML === "&and;") {
      x.innerHTML = "&or;";
      document.getElementById("myDrawer").style.height = "250px";
   } else {
      x.innerHTML = "&and;";
      document.getElementById("myDrawer").style.height = "0";
   }
}
