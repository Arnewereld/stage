<?php
include "../db.php";

class telefoon {
    private $dbh;

    public function __construct(DB $dbh)
    {
        $this->dbh = $dbh;
    }
    public function inserttelefoons ($merk, $model, $opslag, $prijs){
        return $this->dbh->execute("INSERT INTO telefoons (merk, model, opslag, prijs) 
        VALUES (?, ?, ?, ?)", [$merk, $model, $opslag, $prijs]);
    }

    public function selecttelefoons() : array {
        $stmt = $this->dbh->execute("SELECT * FROM telefoons");
        $result = $stmt->fetchAll();
        return $result; 
}

public function updatetelefoons($klant, $merk, $model, $opslag, $prijs) {
    $stmt = $this->dbh->execute("UPDATE telefoons SET merk = ?, model = ?, opslag = ?, prijs = ?
    WHERE telefoon_id = ?", [$klant, $merk, $model, $opslag, $prijs]);
} 

public function deletetelefoons(int $telefoon_id) {
    $stmt = $this->dbh->execute("DELETE from telefoons WHERE telefoon_id = ?", [$telefoon_id]);
}

}
?>