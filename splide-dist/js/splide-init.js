// document.addEventListener("DOMContentLoaded", function () {
//   var splide = new Splide(".splide1", {
//     arrows: false,
//     paginationDirection: "ttb",
//     drag: true,
//     lazyLoad: true,
//   });

//   splide.mount();
// });
// document.addEventListener("DOMContentLoaded", function () {
//   var splide = new Splide(".splide2", {
//     arrows: false,
//     paginationDirection: "ltr",
//     drag: true,
//     lazyLoad: true,
//     // padding: "20%",
//   });

//   splide.mount();
// });

document.addEventListener("DOMContentLoaded", function () {
  new Splide("#thumbnail-carousel", {
    fixedWidth: 100,
    gap: 10,
    rewind: true,
    pagination: false,
  }).mount();
});
