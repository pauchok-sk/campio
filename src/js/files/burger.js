import { closeBasket } from "./basket.js";
import { closeSearch } from "./search.js";

export default function burger() {
  const burgerOpen = document.querySelector("#burger-open");
  const burgerCloseBtn = document.querySelector("#burger-close");
  const burger = document.querySelector("#burger");
  const burgerOverlay = document.querySelector("#burger-overlay");

  burgerOpen.addEventListener("click", (e) => {
    e.stopPropagation();

    if (burger.classList.contains("open")) {
      burgerClose();
    } else {
      closeBasket();
      closeSearch();
      burger.classList.add("open");

      burgerOverlay.classList.add("active");
      document.body.classList.add("body-hidden");
      burger.addEventListener("click", (e) => e.stopPropagation());

      burgerCloseBtn.addEventListener("click", burgerClose);
      document.body.addEventListener("click", burgerClose);
    }
  });
}
export function burgerClose() {
  const burger = document.querySelector("#burger");
  const burgerClose = document.querySelector("#burger-close");
  const burgerOverlay = document.querySelector("#burger-overlay");

  burger.classList.remove("open");

  document.body.classList.remove("body-hidden");
  burgerOverlay.classList.remove("active");

  document.body.removeEventListener("click", burgerClose);
}
