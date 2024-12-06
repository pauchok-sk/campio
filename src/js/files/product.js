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
