export default function email() {
  const inputs = document.querySelectorAll("input[type='email']");

  if (inputs.length) {
    inputs.forEach((input) => {
      const EMAIL_REGEXP =
        /^(([^<>()[\].,;:\s@"]+(\.[^<>()[\].,;:\s@"]+)*)|(".+"))@(([^<>()[\].,;:\s@"]+\.)+[^<>()[\].,;:\s@"]{2,})$/iu;

      function onInput() {
        console.log("fa")
        if (isEmailValid(input.value)) {
          input.style.borderColor = "green";
        } else {
          input.style.borderColor = "#FF4158";
        }
      }

      input.addEventListener("input", onInput);

      function isEmailValid(value) {
        return EMAIL_REGEXP.test(value);
      }
    });
  }
}
