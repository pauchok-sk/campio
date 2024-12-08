export function filtersToggle() {
  const filterOpen = document.querySelector("#filter-open");
  const filtersClose = document.querySelector("#filter-close");
  const filters = document.querySelector("#filters");

  if (filters) {
    filterOpen.addEventListener("click", handleOpen);
    filtersClose.addEventListener("click", handleClose);

    function handleOpen() {
      document.body.classList.add("body-hidden");
      filters.classList.add("open");
    }

    function handleClose() {
      document.body.classList.remove("body-hidden");
      filters.classList.remove("open");
    }
  }
}