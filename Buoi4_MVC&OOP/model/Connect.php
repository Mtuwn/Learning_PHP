<?php

class Connect{
    private $server = 'localhost';
    private $user = 'root';
    private $pwd = '';
    private $db = 'j2school';

    public function cnt(){
        $connect = mysqli_connect('localhost', 'root', '', 'j2school');
        mysqli_set_charset($connect, 'utf8');

        return $connect;
    }

    public function select($sql){
        $connect = $this->cnt();
        $result = mysqli_query($connect, $sql);
        mysqli_close($connect);
        return $result;
    }

    public function excute($sql): void{
        $connect = $this->cnt();
       mysqli_query($connect, $sql);
        mysqli_close($connect);

    }


}