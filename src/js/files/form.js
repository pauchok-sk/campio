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
