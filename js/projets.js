var modalliveblock = document.getElementById("modalliveblock");
var modallabyrinthe = document.getElementById("modallabyrinthe");
var liveblock = document.getElementById("liveblock");
var labyrinthe = document.getElementById("labyrinthe");

liveblock.onclick = function() {
  modalliveblock.style.display = "block";
}

labyrinthe.onclick = function() {
  modallabyrinthe.style.display = "block";
}

window.onclick = function(event) {
  if (event.target == modalliveblock || event.target == modallabyrinthe){
    modalliveblock.style.display = "none";
    modallabyrinthe.style.display = "none";
  }
}
