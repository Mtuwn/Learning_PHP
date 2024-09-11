
var listClassNavbar = [".result-register, .container-login, .container-loop, .container-calculate"]

hiddenPage()

function hiddenPage() {
    listClassNavbar.forEach(function (classname) {
        var elements = document.querySelectorAll(classname);
        elements.forEach(function (element) {
            element.classList.add("hidden");
        });
    }
    )
}

function clickButton(classname){
    hiddenPage();
    var hidenPage = document.querySelector(classname);
    hidenPage.classList.remove("hidden");
}

document.getElementById("btn-register-page").addEventListener("click", function () {
    clickButton(".container-login");
});

document.getElementById("btn-register").addEventListener("click", function () {
    clickButton(".result-register");
});

document.getElementById("btn-drawtable").addEventListener("click", function () {
    clickButton(".container-loop");
});

document.getElementById("btn-calculate").addEventListener("click", function () {
    clickButton(".container-calculate");
});


