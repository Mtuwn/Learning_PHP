const cauhoi = document.getElementById('title');
const cautraloi = document.querySelectorAll('.cautraloi');
const table = document.querySelector('.show_result');
const a_cautraloi = document.getElementById('a_cautraloi');
const b_cautraloi = document.getElementById('b_cautraloi');
const c_cautraloi = document.getElementById('c_cautraloi');
const d_cautraloi = document.getElementById('d_cautraloi');
const btnSubmit = document.getElementById('submit_next');
const btnBackPre = document.getElementById('submit_pre');

let cau_hoi_hien_tai = 0;
let diem = 0;
var data_cauhoi = 0;
var Array = [];
var result = [];

table.classList.add('hidden');
load_cauhoi();

function createArray(data_cauhoi) {

    for (let i = 0; i < data_cauhoi; i++) {
        let currentQuestion;
        currentQuestion = {
            "questionIndex": i,
            "selectedAnswer": ""
        };
        Array.push(currentQuestion);
    }
}

function saveAnswer() {

    let answer = "";
    cautraloi.forEach((cautraloi) => {
        if (cautraloi.checked) {
            answer = cautraloi.id;
        }
    });

    Array.forEach(item => {
        if (item.questionIndex === cau_hoi_hien_tai) {
            item.selectedAnswer = answer;
        }
    });

}

function result_Answer(cau_dung, pos) {
    result.push({
        "cau_so": pos,
        "dap_an": cau_dung
    });

}

function check_empty() {

    return Array.some(item => item.selectedAnswer === "");
}


function check_result() {
    var answersHTML = "<ul>";
    Array.forEach(item => {
        result.forEach(result_item => {
            if (item.questionIndex == result_item.cau_so) {
                item.selectedAnswer == result_item.dap_an ? diem++ : "";

                var color = item.selectedAnswer == result_item.dap_an ? "green" : "red";
                answersHTML += `<li style="color: ${color}; margin-right: 35px;">Câu hỏi ${item.questionIndex}: Đáp án của bạn: ${item.selectedAnswer}&nbsp;&nbsp;&nbsp;&nbsp; Đáp án: ${result_item.dap_an}</li>`;
            }
        })
    })

    alert(diem)
    table.classList.remove('hidden');
    answersHTML += "</ul>";

    // Hiển thị câu hỏi và đáp án trong thẻ div
    var answersContainer = document.getElementById("answersContainer");
    answersContainer.innerHTML = answersHTML;


}
function load_cauhoi() {
    return fetch('http://localhost/Baitap/restful_php_api/api/question/read.php')
        .then(res => res.json())
        .then(
            data => {
                data_cauhoi = data.data.length;
                (Object.keys(Array).length === 0) ? createArray(data_cauhoi) : ""; // Khởi tạp Array để lưu câu trả lời được chọn
                let pos = 0;
                if (Object.keys(result).length == 0)

                    data.data.forEach(item => {
                        result_Answer(item['cau_dung'], pos++)
                    })

                if (cau_hoi_hien_tai < data_cauhoi && cau_hoi_hien_tai >= 0) {
                    const get_cauhoi = data.data[cau_hoi_hien_tai];
                    cauhoi.innerText = get_cauhoi.tittle;
                    a_cautraloi.innerText = get_cauhoi.caua;
                    b_cautraloi.innerText = get_cauhoi.caub;
                    c_cautraloi.innerText = get_cauhoi.cauc;
                    d_cautraloi.innerText = get_cauhoi.caud;


                    Array.forEach(item => {
                        if (item.questionIndex == cau_hoi_hien_tai && item.selectedAnswer != "") { // Nếu tồn tại câu trả lời trước đó thì cho nó hiển thị ra
                            const radioElement = document.getElementById(item.selectedAnswer);
                            radioElement.checked = true;
                        } else if (item.questionIndex == cau_hoi_hien_tai && item.selectedAnswer == "") { // Nếu chưa có câu trả lời thì không chọn gì
                            cautraloi.forEach(cautraloi => {
                                cautraloi.checked = false;
                            })
                        }
                    })
                }
            })
        .catch(error => {
            console.error();
        })

}



btnSubmit.addEventListener("click", () => {
    saveAnswer();
    if (data_cauhoi - 2 == cau_hoi_hien_tai || data_cauhoi - 1 == cau_hoi_hien_tai) {
        btnSubmit.innerText = "Nộp bài";
    }

    if (data_cauhoi - 1 > cau_hoi_hien_tai) {
        cau_hoi_hien_tai++;
        load_cauhoi();
    } else {

        check_empty() ? alert("Vui lòng không để trống!!!") : check_result();
    }
})

btnBackPre.addEventListener("click", () => {
    saveAnswer();
    btnSubmit.innerText = "Câu kế tiếp";
    if (cau_hoi_hien_tai > 0)
        cau_hoi_hien_tai--;

    load_cauhoi()
})