var modalloquidy = document.getElementById("modalloquidy");
var modalepsi = document.getElementById("modalepsi");
var loquidy = document.getElementById("loquidy");
var epsi = document.getElementById("epsi");

loquidy.onclick = function() {
  modalloquidy.style.display = "block";
  document.body.style.overflow = "hidden";

}

epsi.onclick = function() {
  modalepsi.style.display = "block";
  document.body.style.overflow = "hidden";
}

window.onclick = function(event) {
  if (event.target == modalepsi || event.target == modalloquidy){
    modalepsi.style.display = "none";
    modalloquidy.style.display = "none";
    document.body.style.overflow = "visible";
  }
}
