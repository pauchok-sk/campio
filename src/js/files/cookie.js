export default function cookie() {
  const btnOn = document.querySelector("#cookie-on");
  const btnOff = document.querySelector("#cookie-off");
  const cookieHtml = document.querySelector(".cookie");

  if (cookieHtml) {
    if (!document.cookie.includes("cookie=on")) {
      cookieHtml.classList.add("active");
    }

    btnOn.addEventListener("click", () => {
      const date = Date.now() + 60 * 60 * 1000;

      document.cookie = "cookie=on; expires=" + date;
      cookieHtml.classList.remove("active");
    });
    btnOff.addEventListener("click", () => {
      cookieHtml.classList.remove("active");
    });
  }
}
