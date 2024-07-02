<?php
include "db.php";

class zaak {
    private $dbh;

    public function __construct(DB $dbh)
    {
        $this->dbh = $dbh;
    }
    public function insertzaak ($naam, $aantal, $user){
        return $this->dbh->execute("INSERT INTO zaak (naam, aantal, user) 
        VALUES (?, ?, ?)", [$naam, $aantal, $user]);
    }

    public function selectzaak() : array {
        $stmt = $this->dbh->execute("SELECT * FROM zaak");
        $result = $stmt->fetchAll();
        return $result; 
}

public function updatetezaak($naam, $aantal) {
    $stmt = $this->dbh->execute("UPDATE zaak SET naam = ?, aantal = ?
    WHERE telefoon_id = ?", [$naam, $aantal]);
} 

public function deletezaak(int $id) {
    $stmt = $this->dbh->execute("DELETE from zaak WHERE id = ?", [$id]);
}

}
?>