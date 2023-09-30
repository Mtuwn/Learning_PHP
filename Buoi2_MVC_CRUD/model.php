<?php
$connect = mysqli_connect('localhost', 'root', '', 'j2school');
mysqli_set_charset($connect, 'utf8');

switch ($action) {
    case '':
        $sql = "select * from sinh_vien";
        $result = mysqli_query($connect, $sql);
        break;
    case 'store':
        $sql = "insert into sinh_vien(hoTen) values('$hoTen')";
        mysqli_query($connect, $sql);
        header("location:index.php");
        break;
    case 'edit':
        $sql = "select * from sinh_vien where ma = '$ma'";
        $result = mysqli_query($connect, $sql);
        $each = mysqli_fetch_array($result);
        break;
    case 'update':
        $sql = "update sinh_vien set hoTen = '$hoTen' where ma = '$ma'";
        $result = mysqli_query($connect, $sql);
        header("location:index.php");
        break;
    case 'delete':
        $sql = "delete from sinh_vien where ma='$ma'";
        $result = mysqli_query($connect, $sql);
        header("location:index.php");
        break;
    default:
        echo 1;
}
