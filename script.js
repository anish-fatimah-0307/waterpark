const elements = document.querySelectorAll(".scroll");

function showOnScroll() {
  elements.forEach(el => {
    const position = el.getBoundingClientRect().top;
    const screenHeight = window.innerHeight;

    if (position < screenHeight - 100) {
      el.classList.add("show");
    }
  });
}

window.addEventListener("scroll", showOnScroll);
showOnScroll();