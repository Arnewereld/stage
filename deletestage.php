<?php
include 'stage.php';

try {
   $db = new zaak($myDb);
    $db->deletetezaak($_GET['id']);
    header("Location:viewtelefoon.php");
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
  }

?>