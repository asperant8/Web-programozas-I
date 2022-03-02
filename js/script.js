function myFunction() {
    var x = document.getElementById("mtopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }