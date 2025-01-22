import Swiper from "swiper";
import { Autoplay, EffectFade, Pagination, Navigation } from "swiper/modules";
import "swiper/css";
import "swiper/css/effect-fade";

export default function slider() {
  const headerTopSldier = document.querySelector(".header__top-slider");

  if (headerTopSldier) {
    const swiper = new Swiper(headerTopSldier, {
      speed: 700,
      modules: [Autoplay],
      direction: "vertical",
      spaceBetween: 10,
      slidesPerView: 1,
      autoHeight: true,
      autoplay: {
        delay: 5000,
      },
      breakpoints: {
        1024: {
          slidesPerView: 3,
          direction: "horizontal",
        },
      },
    });

    if (window.matchMedia("(max-width: 479px)").matches) {
      swiper.destroy();
    }
  }

  const headerBottomSldier = document.querySelector(".header__bottom-slider");

  if (headerBottomSldier) {
    const swiper = new Swiper(headerBottomSldier, {
      speed: 700,
      modules: [Autoplay],
      direction: "vertical",
      spaceBetween: 10,
      slidesPerView: 1,
      autoplay: {
        delay: 4000,
      },
      breakpoints: {
        1024: {
          slidesPerView: 3,
          direction: "horizontal",
        },
      },
    });
  }

  const heroSlider = document.querySelector(".hero__slider");

  if (heroSlider) {
    const swiper = new Swiper(heroSlider, {
      speed: 1000,
      modules: [Autoplay, EffectFade, Pagination, Navigation],
      effect: "fade",
      simulateTouch: false,
      autoplay: {
        delay: 5000,
      },
      navigation: {
        prevEl: ".hero__slider-nav-btn._prev",
        nextEl: ".hero__slider-nav-btn._next",
      },
      pagination: {
        el: ".hero__slider-pagination",
        clickable: true,
      },
    });
  }

  const recSliders = document.querySelectorAll(".rec__slider");

  if (recSliders.length) {
    recSliders.forEach((slider) => {
      const autoplayFalse = slider.dataset.autoplayFalse;
      const swiper = new Swiper(slider, {
        speed: 1000,
        modules: [Autoplay, Navigation],
        slidesPerView: 2,
        spaceBetween: 16,
        // autoplay: {
        //   delay: 3000,
        // },
        // autoplay: autoplayFalse ? false : true,
        breakpoints: {
          943: {
            slidesPerView: 4,
            spaceBetween: 24,
          },
          639: {
            slidesPerView: 3,
            spaceBetween: 24,
          },
        },
        navigation: {
          prevEl: ".rec__slider-btn._prev",
          nextEl: ".rec__slider-btn._next",
        },
      });
    });
  }

  const discountSliders = document.querySelectorAll(".discount__slider");

  if (discountSliders.length) {
    discountSliders.forEach((slider) => {
      const swiper = new Swiper(slider, {
        speed: 1000,
        modules: [Autoplay, Pagination],
        autoplay: {
          delay: 3500,
        },
        spaceBetween: 10,
        pagination: {
          el: slider.querySelector(".discount__slider-pagination"),
          clickable: true,
        },
      });
    });
  }

  const discountSlidersProducts = document.querySelectorAll(
    ".discount__slider-products"
  );

  if (
    discountSlidersProducts.length &&
    window.matchMedia("(max-width: 959px)").matches
  ) {
    discountSlidersProducts.forEach((slider) => {
      const swiper = new Swiper(slider, {
        speed: 1000,
        modules: [Autoplay, Navigation],
        slidesPerView: 2,
        spaceBetween: 16,
        autoplay: {
          delay: 4000,
        },
        breakpoints: {
          943: {
            slidesPerView: 4,
            spaceBetween: 24,
          },
          639: {
            slidesPerView: 3,
            spaceBetween: 24,
          },
        },
        navigation: {
          prevEl: slider
            .closest(".discount__slider-wrapper")
            .querySelector(".discount__slider-products-btn._prev"),
          nextEl: slider
            .closest(".discount__slider-wrapper")
            .querySelector(".discount__slider-products-btn._next"),
        },
      });
    });
  }

  const singleSldier = document.querySelector(".single__slider");

  if (singleSldier && window.matchMedia("(max-width:943px)").matches) {
    const swiper = new Swiper(singleSldier, {
      speed: 1000,
      modules: [Autoplay, Pagination],
      slidesPerView: 1,
      spaceBetween: 8,
      autoplay: {
        delay: 3500,
      },
      breakpoints: {
        480: {
          slidesPerView: 2,
          spaceBetween: 8,
        },
      },
      pagination: {
        el: ".single__pagination-slider",
        clickable: true,
      },
    });
  }

  const articleSlider = document.querySelector(".single-article__slider");

  if (articleSlider) {
    const swiper = new Swiper(articleSlider, {
      speed: 1000,
      modules: [Autoplay, Pagination],
      spaceBetween: 10,
      autoplay: {
        delay: 3000,
      },
      pagination: {
        el: articleSlider.querySelector(".slider-pagination"),
        clickable: true,
      },
    });
  }

  const singleRecSldier = document.querySelector(".single-article__rec-slider");

  if (singleRecSldier && window.matchMedia("(max-width: 1365px)").matches) {
    const swiper = new Swiper(singleRecSldier, {
      speed: 1000,
      modules: [Autoplay, Navigation],
      slidesPerView: 2,
      spaceBetween: 16,
      autoplay: {
        delay: 4000,
      },
      breakpoints: {
        943: {
          slidesPerView: 4,
          spaceBetween: 24,
        },
        639: {
          slidesPerView: 3,
          spaceBetween: 24,
        },
      },
      navigation: {
        prevEl: ".single-article__slider-btn._prev",
        nextEl: ".single-article__slider-btn._next",
      },
    });
  }

  const aboutSlider = document.querySelector(".about-main__slider");

  if (aboutSlider) {
    const swiper = new Swiper(aboutSlider, {
      speed: 1000,
      modules: [Autoplay, Pagination],
      spaceBetween: 10,
      autoplay: {
        delay: 3000,
      },
      pagination: {
        el: aboutSlider.querySelector(".slider-pagination"),
        clickable: true,
      },
    });
  }
}
