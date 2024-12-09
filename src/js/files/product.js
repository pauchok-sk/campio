export function productSize() {
  const products = document.querySelectorAll(".product");

  if (products.length) {
    products.forEach((p) => {
      const sizesButtons = p.querySelectorAll(".product__size");
      p.addEventListener("click", (e) => {
        if (e.target.hasAttribute("data-product-size")) {
          sizesButtons.forEach((b) => b.classList.remove("active"));
          e.target.classList.add("active");
        }
      });
    });
  }
}

export function productLike() {
  const buttons = document.querySelectorAll(".btn-like");

  if (buttons.length) {
    buttons.forEach((b) => {
      b.addEventListener("click", () => {
        b.classList.toggle("active");
      });
    });
  }
}

export function productCounter() {
  const countersPlus = document.querySelectorAll(".counter-plus");
  const countersMinus = document.querySelectorAll(".counter-minus");
  const counters = document.querySelectorAll(".counter");

  if (counters.length) {
    countersPlus.forEach((counter) => {
      const counterNumber = counter.closest("div").querySelector(".counter");

      counter.addEventListener("click", () => {
        counterNumber.textContent = +counterNumber.textContent + 1;
      });
    });

    countersMinus.forEach((counter) => {
      const counterNumber = counter.closest(".parent-counter").querySelector(".counter");

      counter.addEventListener("click", () => {
        if (+counterNumber.textContent > 0) {
          counterNumber.textContent = +counterNumber.textContent - 1;
        }
      });
    });
  }
}
