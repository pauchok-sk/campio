import { burgerClose } from "./burger.js";
import { closeSearch } from "./search.js";

export default function basket() {
  const basketBtn = document.querySelector("#basket-btn");
  const basket = document.querySelector("#basket");
  const basketClose = document.querySelector("#basket-close");
  const basketWrapper = basket.querySelectorAll(".basket__wrapper");

  if (basket) {
    basketBtn.addEventListener("click", (e) => {
      e.stopPropagation();

      if (basket.classList.contains("open")) {
        closeBasket();
      } else {
        openBasket();
      }
    });

    basketClose.addEventListener("click", closeBasket);

    function openBasket() {
      closeSearch();
      burgerClose();
      basket.classList.add("open");
      basketWrapper.forEach((b) => b.addEventListener("click", (e) => e.stopPropagation()));

      document.body.addEventListener("click", closeBasket);
    }
  }
}

export function closeBasket() {
  const basket = document.querySelector("#basket");
  basket.classList.remove("open");

  document.body.removeEventListener("click", closeBasket);
}
