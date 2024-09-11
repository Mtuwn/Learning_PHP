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


document.querySelectorAll('.file-upload').forEach((input, index) => {
  input.addEventListener('change', function () {
    const spans = document.querySelectorAll(".space-name-file");

    if (this.files.length > 0) {
      spans[index].style.backgroundColor = 'transparent';
      spans[index].style.border = 'none';
      spans[index].textContent = this.files[0].name;
    } else {
      spans[index].textContent = 'No file chosen';
    }
  });
});


document.getElementById('reset-button').addEventListener('click', function () {
  const spans = document.querySelectorAll(".space-name-file");
  spans.forEach(span => {
    span.style.backgroundColor = 'rgb(213, 134, 192)';
    span.style.border = 'solid 1px #999';
    span.textContent = '';
  });

  document.querySelectorAll('.file-upload').forEach(input => {
    input.value = '';
  });
});