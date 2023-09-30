<?php
require_once 'model/connect.php';


function sinh_vien_index()
{
    $connect = connect();
    $sql = "select sinh_vien.*,lop.Lop from sinh_vien left join lop on lop.maLop = sinh_vien.maLop";
    $result = mysqli_query($connect, $sql);
    mysqli_close($connect);
    return $result;
}

function sinh_vien_store($ten_sinh_vien,$ma_lop)
{
    $connect = connect();
    $sql = "insert into sinh_vien(hoTen, maLop) values ('$ten_sinh_vien','$ma_lop')";
    mysqli_query($connect, $sql);
    mysqli_close($connect);
    header('location: index.php');
    header('location:index.php?controller=sinh_vien');
}

function sinh_vien_edit($ma)
{
    $connect = connect();
    $sql = "select * from sinh_vien
                where ma = '$ma'";

    $result = mysqli_query($connect, $sql);
    $each = mysqli_fetch_array($result);
    mysqli_close($connect);
    return $each;
}

function sinh_vien_update($ten, $ma, $ma_lop)
{
    $connect = connect();
    $sql = "update sinh_vien
                set hoTen ='$ten', maLop ='$ma_lop'
                where ma='$ma'";
    mysqli_query($connect, $sql);
    mysqli_close($connect);
    header('location:index.php?controller=sinh_vien');
}

function sinh_vien_delete($ma)
{
    $connect = connect();
    $sql = "delete from sinh_vien
                where ma='$ma'";
    mysqli_query($connect, $sql);
    mysqli_close($connect);
    header('location:index.php?controller=sinh_vien');
}
