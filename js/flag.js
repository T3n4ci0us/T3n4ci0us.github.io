function navChange() {
    var x = document.getElementById("centered_nav");
    if (x.className === "rc_nav") {
        x.className += " responsive";
    } else {
        x.className = "rc_nav";
    }
}

function showPhone() {
  var x = document.getElementById("phoneDiv");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

/*
T3n4ci0us{V13w_TH3_S0urC3}
*/
