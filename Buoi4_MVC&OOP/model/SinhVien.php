<?php

require_once 'Connect.php';
require_once 'SinhVienObject.php';

class SinhVien
{
    public function all(): array
    {
        $sql = "select sinh_vien.*,lop.Lop from sinh_vien left join lop on sinh_vien.maLop = lop.maLop";
        $result = (new Connect())->select($sql);
        $arr = [];
        foreach ($result as $row) {
            $object = new SinhVienObject($row);
            $arr[] = $object;
        }
        return $arr;
    }

    public function create($params): void
    {
        $object = new SinhVienObject($params);
        $sql = "insert into sinh_vien(maLop, hoTen) values('{$object->get_maLop()}','{$object->get_hoTen()}')";
        (new Connect())->excute($sql);
    }

    public function find($ma): Object
    {
        $sql = "select * from sinh_vien
            where ma = '$ma'";
        $result = (new Connect())->select($sql);
        $each = mysqli_fetch_array($result);
        return new SinhVienObject($each);
    }

    public function edit($params): void
    {
        $object = new SinhVienObject($params);
        $sql = "update sinh_vien
        set hoTen ='{$object->get_hoTen()}', maLop = '{$object->get_maLop()}'
        where ma ='{$object->get_ma()}'";
        (new Connect())->excute($sql);
    }

    public function delete($ma): void
    {
        $sql = "delete from sinh_vien
            where ma = '$ma'";
        (new Connect())->excute($sql);
    }
}
