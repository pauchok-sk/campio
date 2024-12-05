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
      spaceBetween: 10,
      slidesPerView: 1,
      autoplay: {
        delay: 3000,
      },
      breakpoints: {
        1024: {
          slidesPerView: 3,
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
      spaceBetween: 10,
      slidesPerView: 1,
      autoplay: {
        delay: 3000,
      },
      breakpoints: {
        1024: {
          slidesPerView: 3,
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
      const swiper = new Swiper(slider, {
        speed: 1000,
        modules: [Autoplay, Navigation],
        slidesPerView: 2,
        spaceBetween: 16,
        autoplay: {
          delay: 3000,
        },
        breakpoints: {
          943: {
            slidesPerView: 4,
            spaceBetween: 24,
          },
          639: {
            slidesPerView: 3,
            spaceBetween: 24,
          }
        }
        // navigation: {
        //   prevEl: ".hero__slider-nav-btn._prev",
        //   nextEl: ".hero__slider-nav-btn._next",
        // },
      });
    });
  }
}
