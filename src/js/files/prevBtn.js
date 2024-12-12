export default function prevBtn() {
  const prevBtns = document.querySelectorAll(".prev-btn");

  if (prevBtns.length) {
    prevBtns.forEach(btn => {
      btn.addEventListener("click", (e) => {
        e.preventDefault();
        window.history.back();
      })
    })
  }
}