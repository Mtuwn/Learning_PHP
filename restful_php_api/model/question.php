<?php
class Question{
    private $conn;
    
    public $id_cauhoi;
    public $title;
    public $caua;
    public $caub;
    public $cauc;
    public $caud;
    public $cau_dung;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function read(){
        $query = "select * from question";
        $sttm = $this->conn->prepare($query);
        $sttm->execute();
        return $sttm;
    }

    public function show(){
        $query = "select * from question where id_cauhoi = ? limit 1";
        $sttm = $this->conn->prepare($query);
        $sttm->bindParam(1, $this->id_cauhoi);
        $sttm->execute();
        $row = $sttm->fetch(PDO::FETCH_ASSOC);
        $this->title = $row['tittle'];
        $this->caua = $row['caua'];
        $this->caub = $row['caub'];
        $this->cauc = $row['cauc'];
        $this->caud = $row['caud'];
        $this->cau_dung = $row['cau_dung'];
    }

    public function create(){
        $query = "insert into question values(?,?,?,?,?,?,?)";
        $stmt = $this->conn->prepare($query);

        // Lọc kí tự đặc biệt
        $this->id_cauhoi = htmlspecialchars(strip_tags($this->id_cauhoi));
        $this->title = htmlspecialchars(strip_tags($this->title));
        $this->caua = htmlspecialchars(strip_tags($this->caua));
        $this->caub = htmlspecialchars(strip_tags($this->caub));
        $this->cauc = htmlspecialchars(strip_tags($this->cauc));
        $this->caud = htmlspecialchars(strip_tags($this->caud));
        $this->cau_dung = htmlspecialchars(strip_tags($this->cau_dung));

        $stmt->bindValue(1, $this->id_cauhoi);
        $stmt->bindValue(2, $this->title);
        $stmt->bindValue(3, $this->caua);
        $stmt->bindValue(4, $this->caub);
        $stmt->bindValue(5, $this->cauc);
        $stmt->bindValue(6, $this->caud);
        $stmt->bindValue(7, $this->cau_dung);
        if($stmt->execute()){
            return true;
        } else printf("ERROR %s\n" ,$stmt->ERROR);
        return false;

    }

    public function update(){
        $query = "update  question set tittle = ? , caua = ?, caub = ?, cauc = ?,caud = ?, cau_dung = ? where id_cauhoi = ?";
        $stmt = $this->conn->prepare($query);

        // Lọc kí tự đặc biệt
        $this->id_cauhoi = htmlspecialchars(strip_tags($this->id_cauhoi));
        $this->title = htmlspecialchars(strip_tags($this->title));
        $this->caua = htmlspecialchars(strip_tags($this->caua));
        $this->caub = htmlspecialchars(strip_tags($this->caub));
        $this->cauc = htmlspecialchars(strip_tags($this->cauc));
        $this->caud = htmlspecialchars(strip_tags($this->caud));
        $this->cau_dung = htmlspecialchars(strip_tags($this->cau_dung));

        
        $stmt->bindValue(1, $this->title);
        $stmt->bindValue(2, $this->caua);
        $stmt->bindValue(3, $this->caub);
        $stmt->bindValue(4, $this->cauc);
        $stmt->bindValue(5, $this->caud);
        $stmt->bindValue(6, $this->cau_dung);
        $stmt->bindValue(7, $this->id_cauhoi);
        if($stmt->execute()){
            return true;
        } else printf("ERROR %s\n" ,$stmt->ERROR);
        return false;

    }

    public function delete(){
        $query = "delete from question where id_cauhoi = ?";
        $stmt = $this->conn->prepare($query);

        // Lọc kí tự đặc biệt
        $this->id_cauhoi = htmlspecialchars(strip_tags($this->id_cauhoi));
        $stmt->bindValue(1, $this->id_cauhoi);
        
        if($stmt->execute()){
            return true;
        } else printf("ERROR %s\n" ,$stmt->ERROR);
        return false;

    }
}
