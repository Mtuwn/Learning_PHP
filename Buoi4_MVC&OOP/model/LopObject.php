<?php

class LopObject{
    private $ma;
    private $lop;

    public function __construct($row)
    {
        $this->ma = $row['maLop'] ?? '';
        $this->lop = $row['Lop'] ?? '';
    }

    public function get_ma(){
        return $this->ma;
    }

    public function show_ma(){
        
        return '#' . $this->ma;
    }

    public function set_ma($var){
        $this->ma = $var;
    }

    public function get_lop(){
        return $this->lop;
    }

    public function set_lop($var){
        $this->lop = $var;
    }


}