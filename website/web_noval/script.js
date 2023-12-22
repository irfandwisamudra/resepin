function scrollBanner() {
  var scrollPos;
  var headerText = document.querySelector('.header-paralax');
  scrollPos = window.scrollY;

  if (scrollPos <= 600) {
    headerText.style.opacity = 1 - (scrollPos / 600);
    headerText.style.transform = "translateY(" + (-scrollPos / 3) + "px" + ")";
    // headerText.style.paddingTop = "900px";
    // headerText.classList.toggle("down");
  }
  // else if (scrollPos < 599 ){
  //   headerText.style.paddingTop = "10px";

  // }
}
window.addEventListener('scroll', scrollBanner);
