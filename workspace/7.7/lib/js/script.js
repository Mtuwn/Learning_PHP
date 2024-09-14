const form = document.querySelector(".form-input");
const input = form.querySelector("#input");
const btns = form.querySelectorAll(".custom-button");
btns.forEach((el) => {
  // console.log(el.value);
  el.addEventListener("click", (e) => {
    input.value = el.value;
    form.submit();
  });
});






