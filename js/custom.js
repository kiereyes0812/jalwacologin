document.addEventListener("DOMContentLoaded", () => {
  // Mobile menu
  const toggle = document.getElementById("nav__toggle");
  const nav = document.getElementById("nav__menu");
  if (toggle && nav) {
    toggle.addEventListener("click", () => {
      nav.classList.toggle("show-menu");
      toggle.classList.toggle("show-icon");
    });
  }

  // Services dropdown (mobile)
  document.querySelectorAll(".services-toggle").forEach((toggleBtn) => {
    toggleBtn.addEventListener("click", function (e) {
      e.preventDefault();
      if (window.innerWidth <= 767) {
        const submenu = this.nextElementSibling;
        if (!submenu) return;
        submenu.style.display =
          submenu.style.display === "block" ? "none" : "block";
      }
    });
  });

  // Sticky header
  const myNav = document.getElementById("myheader");
  if (myNav) {
    window.addEventListener("scroll", () => {
      if (
        document.body.scrollTop >= 50 ||
        document.documentElement.scrollTop >= 50
      ) {
        myNav.classList.add("sticky");
      } else {
        myNav.classList.remove("sticky");
      }
    });
  }

  // Hero carousel (only exists on pages that include it)
  const track = document.querySelector(".carousel-track");
  const nextButton = document.querySelector(".carousel-btn.next");
  const prevButton = document.querySelector(".carousel-btn.prev");
  const dotsNav = document.querySelector(".carousel-dots");

  if (track && nextButton && prevButton && dotsNav) {
    const slides = Array.from(track.children);
    if (slides.length) {
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
        if (dots[index]) dots[index].classList.add("active");
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

      if (slides.length > 1) {
        setInterval(() => {
          nextButton.click();
        }, 4000);
      }
    }
  }

  // Horizontal slider (only exists on pages that include it)
  const sliderTrackNew = document.getElementById("sliderTrackNew");
  const prevButtons = document.getElementById("prevButtons");
  const nextButtons = document.getElementById("nextButtons");

  if (sliderTrackNew && prevButtons && nextButtons) {
    prevButtons.addEventListener("click", () => {
      sliderTrackNew.style.animation = "none";
      sliderTrackNew.scrollBy({ left: -270, behavior: "smooth" });
    });

    nextButtons.addEventListener("click", () => {
      sliderTrackNew.style.animation = "none";
      sliderTrackNew.scrollBy({ left: 270, behavior: "smooth" });
    });
  }
});

function toggleFAQ(item) {
  const answer = item.querySelector(".faq-answer");
  const arrow = item.querySelector(".arrow");
  if (answer) answer.classList.toggle("open");
  if (arrow) arrow.classList.toggle("down");
}
