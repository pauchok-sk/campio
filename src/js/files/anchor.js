export default function anchor() {
  const anchors = document.querySelectorAll(".anchor");
  if (anchors.length) {
    anchors.forEach((link) => {
      link.addEventListener("click", function (e) {
        e.preventDefault();

        let href = this.getAttribute("href").substring(1);

        const scrollTarget = document.getElementById(href);

        if (scrollTarget) {
          const offsetPosition =
            scrollTarget.getBoundingClientRect().top -
            document.querySelector(".header").clientHeight;

          anchors.forEach((a) => a.classList.remove("active"));
          link.classList.add("active");

          window.scrollBy({
            top: offsetPosition,
            behavior: "smooth",
          });
        }
      });
    });
  }
}
