import { closeBasket } from "./basket.js";
import { burgerClose } from "./burger.js";

export default function search() {
  const searchBtn = document.querySelector("#search-open");
  const searchMenu = document.querySelector("#search-menu");

  if (searchMenu) {
    const searchClear = searchMenu.querySelector("#search-clear");
    const input = searchMenu.querySelector("input[type='search']");

    input.addEventListener("input", (e) => {
      if (e.target.value) searchClear.classList.add("active");
      else searchClear.classList.remove("active");
    });

    searchClear.addEventListener("click", (e) => {
      e.preventDefault();
      input.value = "";
      searchClear.classList.remove("active");
    });

    searchBtn.addEventListener("click", (e) => {
      e.stopPropagation();
      if (searchMenu.classList.contains("open")) {
        closeSearch();
      } else {
        openSearch();
      }
    });

    function openSearch() {
      closeBasket();
      burgerClose();

      searchMenu.addEventListener("click", (e) => e.stopPropagation());

      searchMenu.classList.add("open");
      document.body.addEventListener("click", closeSearch);
    }
  }
}
export function closeSearch() {
  const searchMenu = document.querySelector("#search-menu");

  searchMenu.classList.remove("open");
  document.body.removeEventListener("click", closeSearch);
}
