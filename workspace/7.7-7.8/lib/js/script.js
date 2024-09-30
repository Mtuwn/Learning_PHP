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


const reset_btn = document.querySelector(".reset");

reset_btn.addEventListener('click', function (event) {
  event.preventDefault(); 
  let value_user = document.querySelector("#user-input");
  let value_pass = document.querySelector("#pass-input");
  value_pass.value = "";
  value_user.value = ""; 
});




