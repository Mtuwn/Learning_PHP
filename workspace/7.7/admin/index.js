const form_admin = document.querySelector(".form-input-admin");
const input_admin = form_admin.querySelector("#input-admin");
const btns_admin = form_admin.querySelectorAll(".custom-button-admin");
btns_admin.forEach((el) => {
  // console.log(el.value);
  el.addEventListener("click", (e) => {
    input_admin.value = el.value;
    form_admin.submit();
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
      span.style.backgroundColor = 'rgb(207, 197, 205)';
      span.style.border = 'solid 1px #999';
      span.textContent = '';
    });
  
    document.querySelectorAll('.file-upload').forEach(input => {
      input.value = '';
    });
  });