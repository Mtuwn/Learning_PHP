
<?php
require_once 'model/connect.php';

$connect = connect();
function lop_index()
{
    $connect = connect();
    $sql = "select * from lop";
    $result = mysqli_query($connect, $sql);
    mysqli_close($connect);
    return $result;
}

function lop_store($ten_lop)
{
    $connect = connect();
    $sql = "insert into lop(Lop) values ('$ten_lop')";
    mysqli_query($connect, $sql);
    mysqli_close($connect);
    header('location: index.php');
    header('location:index.php?controller=lop');
}

function lop_edit($ma)
{
    $connect = connect();
    $sql = "select * from lop
                where maLop = '$ma'";

    $result = mysqli_query($connect, $sql);
    $each = mysqli_fetch_array($result);
    mysqli_close($connect);
    return $each;
}

function lop_update($ma, $ten)
{
    $connect = connect();
    $sql = "update lop
                set Lop ='$ten'
                where maLop='$ma'";
    mysqli_query($connect, $sql);
    mysqli_close($connect);
    header('location:index.php?controller=lop');
}

function lop_delete($ma)
{
    $connect = connect();
    $sql = "delete from lop
                where maLop='$ma'";
    mysqli_query($connect, $sql);
    mysqli_close($connect);
    header('location:index.php?controller=lop');
}
