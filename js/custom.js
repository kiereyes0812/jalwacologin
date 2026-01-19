const showMenu = (toggleId, navId) => {
  const toggle = document.getElementById(toggleId);
  const nav = document.getElementById(navId);
  toggle.addEventListener("click", () => {
    nav.classList.toggle("show-menu");
    toggle.classList.toggle("show-icon");
  });
};
showMenu("nav__toggle", "nav__menu");

document.querySelectorAll(".services-toggle").forEach((toggleBtn) => {
  toggleBtn.addEventListener("click", function (e) {
    e.preventDefault();
    if (window.innerWidth <= 767) {
      const submenu = this.nextElementSibling;
      submenu.style.display =
        submenu.style.display === "block" ? "none" : "block";
    }
  });
});
let myNav = document.getElementById("myheader");

window.onscroll = function () {
  "use strict";
  if (
    document.body.scrollTop >= 50 ||
    document.documentElement.scrollTop >= 50
  ) {
    myNav.classList.add("sticky");
  } else {
    myNav.classList.remove("sticky");
  }
};

const track = document.querySelector(".carousel-track");
const slides = Array.from(track.children);
const nextButton = document.querySelector(".carousel-btn.next");
const prevButton = document.querySelector(".carousel-btn.prev");
const dotsNav = document.querySelector(".carousel-dots");

slides.forEach((_, i) => {
  const button = document.createElement("button");
  if (i === 0) button.classList.add("active");
  dotsNav.appendChild(button);
});
const dots = Array.from(dotsNav.children);

let index = 0;
function updateCarousel() {
  track.style.transform = "translateX(" + -index * 100 + "%)";
  dots.forEach((dot) => dot.classList.remove("active"));
  dots[index].classList.add("active");
}
nextButton.addEventListener("click", () => {
  index = (index + 1) % slides.length;
  updateCarousel();
});
prevButton.addEventListener("click", () => {
  index = (index - 1 + slides.length) % slides.length;
  updateCarousel();
});
dots.forEach((dot, i) => {
  dot.addEventListener("click", () => {
    index = i;
    updateCarousel();
  });
});
setInterval(() => {
  nextButton.click();
}, 4000);

const sliderTrackNew = document.getElementById("sliderTrackNew");
const prevButtons = document.getElementById("prevButtons");
const nextButtons = document.getElementById("nextButtons");

// Stop auto animation when clicking buttons
let scrollAmount = 0;

prevButtons.addEventListener("click", () => {
  sliderTrackNew.style.animation = "none";
  sliderTrackNew.scrollBy({ left: -270, behavior: "smooth" });
});

nextButtons.addEventListener("click", () => {
  sliderTrackNew.style.animation = "none";
  sliderTrackNew.scrollBy({ left: 270, behavior: "smooth" });
});

function toggleFAQ(item) {
  const answer = item.querySelector(".faq-answer");
  const arrow = item.querySelector(".arrow");
  answer.classList.toggle("open");
  arrow.classList.toggle("down");
}
