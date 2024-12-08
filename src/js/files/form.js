import noUiSlider from "nouislider";

export function triggerPassword() {
  const buttons = document.querySelectorAll(".form__password-trigger");

  if (buttons.length) {
    buttons.forEach((btn) => {
      const currentInput = btn.closest("div").querySelector("input[type='password']");
      btn.addEventListener("click", () => {
        if (currentInput.type === "text") {
          currentInput.type = "password";
          btn.classList.remove("active");
        } else {
          btn.classList.add("active");
          currentInput.type = "text";
        }
      });
    });
  }
}

export function rangeSlider() {
  const priceRange = document.querySelector("#price-range");

  if (priceRange) {
    const { min, max } = priceRange.dataset;
    const inputMin = document.querySelector("#price-min");
    const inputMax = document.querySelector("#price-max");
    const inputs = [inputMin, inputMax];

    noUiSlider.create(priceRange, {
      start: [+min, +max],
      connect: true,
      range: {
        min: [+min],
        max: [+max],
      },
    });

    priceRange.noUiSlider.on("update", (values, handle) => {
      inputs[handle].value = Math.round(values[handle]);
    });

    const setRangeSlider = (i, value) => {
      let arr = [null, null];
      arr[i] = value;

      priceRange.noUiSlider.set(arr);
    };

    inputs.forEach((el, index) => {
      el.addEventListener("change", (e) => {
        setRangeSlider(index, e.currentTarget.value);
      });
    });
  }
}
