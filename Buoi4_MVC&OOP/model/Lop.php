<?php

require_once 'Connect.php';
require_once 'LopObject.php';

class Lop
{
    public function all(): array
    {
        $sql = "select * from lop";
        $result = (new Connect())->select($sql);
        $arr = [];
        foreach ($result as $row) {
            $object = new LopObject($row);
            $arr[] = $object;
        }
        return $arr;
    }

    public function create($params): void
    {
        $object = new LopObject($params);
        $sql = "insert into lop(Lop) values('{$object->get_lop()}')";
        (new Connect())->excute($sql);
    }

    public function find($ma): Object
    {
        $sql = "select * from lop
            where maLop = '$ma'";
        $result = (new Connect())->select($sql);
        $each = mysqli_fetch_array($result);
        return new LopObject($each);
    }

    public function edit($params): void
    {
        $object = new LopObject($params);
        echo $object->get_lop(), $object->get_ma();
        $sql = "update lop
        set Lop ='{$object->get_lop()}'
        where maLop='{$object->get_ma()}'";
        (new Connect())->excute($sql);
    }

    public function delete($ma): void
    {
        $sql = "delete from lop
            where maLop = '$ma'";
        (new Connect())->excute($sql);
    }
}
