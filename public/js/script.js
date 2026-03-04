const sliderItems = document.querySelectorAll(".slider-items");
const prevButton = document.querySelector(".slider-prev");
const nextButton = document.querySelector(".slider-next");
const dotsContainer = document.querySelector(".slider-dots");
const navbar = document.querySelector("nav");

let sliderActive = 0;
let autoSlideTimer = null;

if (sliderItems.length > 0) {
  const dotButtons = [];

  const updateDots = (activeIndex) => {
    dotButtons.forEach((dotButton, dotIndex) => {
      const isActive = dotIndex === activeIndex;
      dotButton.classList.toggle("is-active", isActive);
      dotButton.setAttribute("aria-current", isActive ? "true" : "false");
    });
  };

  const showSlide = (index) => {
    sliderItems.forEach((slider, itemIndex) => {
      slider.setAttribute("data-show", itemIndex === index ? "show" : "hidden");
    });
    updateDots(index);
  };


  const nextSlide = () => {
    sliderActive = (sliderActive + 1) % sliderItems.length;
    showSlide(sliderActive);
  };

  const prevSlide = () => {
    sliderActive = (sliderActive - 1 + sliderItems.length) % sliderItems.length;
    showSlide(sliderActive);
  };

  const startAutoSlide = () => {
    autoSlideTimer = setInterval(nextSlide, 10000);
  };

  const restartAutoSlide = () => {
    clearInterval(autoSlideTimer);
    startAutoSlide();
  };

  if (dotsContainer) {
    sliderItems.forEach((_, index) => {
      const dotButton = document.createElement("button");
      dotButton.type = "button";
      dotButton.className = "dot-btn";
      dotButton.setAttribute("aria-label", `Go to slide ${index + 1}`);

      dotButton.addEventListener("click", () => {
        sliderActive = index;
        showSlide(sliderActive);
        restartAutoSlide();
      });

      dotsContainer.appendChild(dotButton);
      dotButtons.push(dotButton);
    });
  }

  showSlide(sliderActive);
  startAutoSlide();

  if (nextButton) {
    nextButton.addEventListener("click", () => {
      nextSlide();
      restartAutoSlide();
    });
  }

  if (prevButton) {
    prevButton.addEventListener("click", () => {
      prevSlide();
      restartAutoSlide();
    });
  }
}

if (navbar) {
  const toggleNavbarBlur = () => {
    navbar.classList.toggle("is-scrolled", window.scrollY > 20);
  };

  toggleNavbarBlur();
  window.addEventListener("scroll", toggleNavbarBlur, { passive: true });
}

const featureCards = document.querySelectorAll(".feature-card");
const featurePrev = document.querySelector(".feature-prev");
const featureNext = document.querySelector(".feature-next");
const featureDots = document.querySelector(".feature-dots");

if (featureCards.length > 0 && featureDots) {
  let activeFeature = 0;
  let featureTimer = null;
  const dots = [];

  const applyFeatureClasses = (activeIndex) => {
    const lastIndex = featureCards.length - 1;
    const prevIndex = activeIndex === 0 ? lastIndex : activeIndex - 1;
    const nextIndex = activeIndex === lastIndex ? 0 : activeIndex + 1;

    featureCards.forEach((card, index) => {
      card.classList.remove("is-active", "is-prev", "is-next", "is-hidden");

      if (index === activeIndex) {
        card.classList.add("is-active");
      } else if (index === prevIndex) {
        card.classList.add("is-prev");
      } else if (index === nextIndex) {
        card.classList.add("is-next");
      } else {
        card.classList.add("is-hidden");
      }
    });

    dots.forEach((dot, index) => {
      dot.classList.toggle("is-active", index === activeIndex);
      dot.setAttribute("aria-current", index === activeIndex ? "true" : "false");
    });
  };

  const goToFeature = (index) => {
    activeFeature = index;
    applyFeatureClasses(activeFeature);
  };

  const nextFeature = () => {
    const targetIndex = (activeFeature + 1) % featureCards.length;
    goToFeature(targetIndex);
  };

  const prevFeature = () => {
    const targetIndex = (activeFeature - 1 + featureCards.length) % featureCards.length;
    goToFeature(targetIndex);
  };

  const startFeatureAutoPlay = () => {
    featureTimer = setInterval(nextFeature, 5500);
  };

  const restartFeatureAutoPlay = () => {
    clearInterval(featureTimer);
    startFeatureAutoPlay();
  };

  featureCards.forEach((_, index) => {
    const dot = document.createElement("button");
    dot.type = "button";
    dot.className = "feature-dot";
    dot.setAttribute("aria-label", `Go to feature ${index + 1}`);

    dot.addEventListener("click", () => {
      goToFeature(index);
      restartFeatureAutoPlay();
    });

    featureDots.appendChild(dot);
    dots.push(dot);
  });

  applyFeatureClasses(activeFeature);
  startFeatureAutoPlay();

  if (featureNext) {
    featureNext.addEventListener("click", () => {
      nextFeature();
      restartFeatureAutoPlay();
    });
  }

  if (featurePrev) {
    featurePrev.addEventListener("click", () => {
      prevFeature();
      restartFeatureAutoPlay();
    });
  }
}

window.addEventListener("load", () => {
  const organizationRoot = document.querySelector(".organization-slide-container.swiper");
  if (!organizationRoot || typeof window.Swiper === "undefined") {
    return;
  }

  // eslint-disable-next-line no-new
  new window.Swiper(organizationRoot, {
    slidesPerView: 1,
    spaceBetween: 24,
    loop: true,
    speed: 600,
    grabCursor: true,
    autoplay: {
      delay: 3800,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".organization .swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".organization .swiper-button-next",
      prevEl: ".organization .swiper-button-prev",
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
      },
      1100: {
        slidesPerView: 3,
      },
    },
  });
});
