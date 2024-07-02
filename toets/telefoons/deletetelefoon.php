<?php
include 'telefoon.php';

try {
   $db = new Telefoon($myDb);
    $db->deletetelefoons($_GET['telefoon_id']);
    header("Location:viewtelefoon.php");
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
  }

?>