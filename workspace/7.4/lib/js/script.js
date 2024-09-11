const form = document.querySelector(".form-input");
const input = form.querySelector("#input");
const btns = form.querySelectorAll(".custom-button");
console.log(input.value);
btns.forEach((el) => {
    // console.log(el.value);
  el.addEventListener("click", (e) => {
    // Lấy giá trị từ thuộc tính "value" của nút bấm
    input.value = el.value;
    // console.log(input.value);
    // Gửi form
    form.submit();
  });
});
