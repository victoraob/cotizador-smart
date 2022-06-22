const $openClose = document.getElementById("open-close"),
  $aside = document.getElementById("aside");
const $cerrarid = document.getElementsByClassName("cerrar-id");
const $closebur = document.getElementById("closebur");
const $cuerpo = document.getElementById("body");

$openClose.addEventListener("click", () => {
  $aside.classList.toggle("desplegar");
  $cuerpo.classList.toggle("desenfocarsmt");
});

$closebur.addEventListener("click", () => {
  $aside.classList.toggle("desplegar");
  $cuerpo.classList.toggle("desenfocarsmt");
});

// $cerrarid.addEventListener("click", () => {
//   $cuerpo.className.remove("desenfocarsmt");
// });
