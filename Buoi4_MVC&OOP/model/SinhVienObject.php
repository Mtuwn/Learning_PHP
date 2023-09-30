<?php

class SinhVienObject{
    private $ma;
    private $hoTen;
    private $maLop;
    private $Lop;

    public function __construct($row)
    {
        $this->ma = $row['ma'] ?? '';
        $this->hoTen = $row['hoTen'] ?? '';
        $this->maLop =  $row['maLop'] ?? '';
        $this->Lop =  $row['Lop'] ?? '';
        
    }

    public function get_maLop(){
        return $this->maLop;
    }

    public function show_maop(){
        
        return $this->maLop ;
    }

    public function set_maLop($var){
        $this->maLop = $var;
    }

    public function get_hoTen(){
        return $this->hoTen;
    }

    public function set_hoTen($var){
        $this->hoTen = $var;
    }

    public function get_ma(){
        return $this->ma;
    }

    public function show_ma(){
        
        return '#' . $this->ma ;
    }

    public function set_ma($var){
        $this->ma = $var;
    }

    public function get_Lop(){
        return $this->Lop;
    }

    public function show_Lop(){
        
        return 'AT' . $this->Lop ;
    }

    public function set_Lop($var){
        $this->Lop = $var;
    }


}