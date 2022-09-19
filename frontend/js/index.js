AOS.init();
var swiper = new Swiper(".mySwiper", {
  slidesPerView: 4,
  spaceBetween: 30,
  centeredSlides: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});
const buttonCategory = document.getElementsByName("kategori");

if (window.history.replaceState) {
  window.history.replaceState(null, null, window.location.href);
}
