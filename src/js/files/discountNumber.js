export default function discountNumber() {
  const discountNumber = document.querySelector("#discount-number");
  const discountNumberBtn = document.querySelector("#discount-number-btn");

  if (discountNumber) {
    const initialNumber = discountNumber.textContent;

    showNumber();
    
    discountNumberBtn.addEventListener("click", () => {
      if (discountNumberBtn.classList.contains("active")) {
        showNumber();
        discountNumberBtn.classList.remove("active")
      } else {
        discountNumber.textContent = initialNumber;
        discountNumberBtn.classList.add("active")
      }
    })

    function showNumber() {
      const arrayNumber = initialNumber.split(" ");
  
      for (let i = 0; i < arrayNumber.length - 1; i++) {
        arrayNumber[i] = "****";
      }
  
      discountNumber.textContent = arrayNumber.join(" ");
    }
  }

}
