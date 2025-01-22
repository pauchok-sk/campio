export default function profile() {
  const items = document.querySelectorAll(".profile-sect");
  const anchorsItems = document.querySelectorAll(".profile__sidebar-btn");
  const headerHeight = document.querySelector(".header").clientHeight;

  if (items.length && window.matchMedia("(min-width: 1139px)").matches) {
    let currentIndex = 0;

    window.addEventListener("scroll", (e) => {
      handlerScroll(currentIndex);
    });

    function handlerScroll(index) {
      if (index <= items.length - 1) {
        const rectTop = items[index].getBoundingClientRect().top - headerHeight;
        const top = rectTop + document.documentElement.scrollTop;

        if (
          window.scrollY >= top &&
          window.scrollY <= top + items[index].clientHeight
        ) {
          anchorsItems.forEach((a) => a.classList.remove("active"));
          anchorsItems[index].classList.add("active");
        } else {
          handlerScroll(index + 1);
        }
      }
    }
  }
}
