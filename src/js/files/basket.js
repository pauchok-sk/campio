import { burgerClose } from "./burger.js";
import { closeSearch } from "./search.js";

export default function basket() {
  const basketBtn = document.querySelector("#basket-btn");
  const basket = document.querySelector("#basket");
  const basketClose = document.querySelector("#basket-close");
  const basketWrapper = basket.querySelectorAll(".basket__wrapper");
  const basketRec = document.querySelector(".basket__rec");
  const basketRecClose = document.querySelector(".basket__rec-close");

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
      document.body.classList.add("body-hidden");
      basketWrapper.forEach((b) => b.addEventListener("click", (e) => e.stopPropagation()));
      basketRecClose.addEventListener("click", () => basketRec.classList.add("close"));

      document.body.addEventListener("click", closeBasket);
    }
  }
}

export function closeBasket() {
  const basketRec = document.querySelector(".basket__rec");
  const basket = document.querySelector("#basket");
  basket.classList.remove("open");
  document.body.classList.remove("body-hidden");
  
  setTimeout(() => basketRec.classList.remove("close"), 300)

  document.body.removeEventListener("click", closeBasket);
}
