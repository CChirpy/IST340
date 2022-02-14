function openNav() {
   var x = document.getElementById("navDir");
   if (x.innerHTML === "&and;") {
      x.innerHTML = "&or;";
      document.getElementById("myDrawer").style.width = "250px";
   } else {
      x.innerHTML = "&and;";
      document.getElementById("myDrawer").style.width = "0";
   }
}
