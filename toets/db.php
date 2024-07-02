<?php

class db {
    private $dbh;
    protected $stmt;
    
    public function __construct($db = "telefoon", $host = "localhost:3307", $user = "root", $pass = "")
    {
        try {
            $this->dbh = new PDO("mysql:host=$host;dbname=$db;", $user, $pass);
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die ("Connection error: " . $e->getMessage());
        }
    }

    function execute($sql, $placeholders = NULL){
        $stmt = $this->dbh->prepare($sql);
        $stmt->execute($placeholders);
        return $stmt;
    }   

}
$myDb = new DB('telefoon');
?>