AOS.init();

const buttonCategory = document.getElementsByName("kategori");

if (window.history.replaceState) {
  window.history.replaceState(null, null, window.location.href);
}
const picture = document.getElementById("thumbs");
const white = document.getElementById("a_white");
const black = document.getElementById("a_black");
const smallPicture = document.querySelectorAll("#small-image");
white.addEventListener("click", (e) => {
  picture.setAttribute("src", "assets/a_class_white.png");
});
black.addEventListener("click", (e) => {
  picture.setAttribute("src", "assets/a_class.png");
});

smallPicture.forEach((element) => {
  element.addEventListener("click", () => {
    picture.setAttribute("src", element.getAttribute("src"));
  });
});
