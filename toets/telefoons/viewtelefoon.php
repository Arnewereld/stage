<?php
    include "telefoon.php";

    $dbtelefoons = new Telefoon(new DB());
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overzicht Telefoons</title>
</head>
<body>
    <table class="table dark">
        <tr>
            <th>telefoon_id</th>
            <th>merk</th>
            <th>model</th>
            <th>opslag </th>
            <th>prijs</th>
            <th colspan="2">Action</th>
        </tr>

        <tr> <?php
            $telefoon = $dbtelefoons->selecttelefoons(); 
            if ($telefoon) { 
                foreach ($telefoon as $telefoons) {?>
            <td><?php echo $telefoons['telefoon_id']?></td>
            <td><?php echo $telefoons['model']?></td>
            <td><?php echo $telefoons['merk']?></td>
            <td><?php echo $telefoons['opslag']?></td>
            <td><?php echo $telefoons['prijs']?></td>
            <td><a href="edittelefoon.php?telefoon_id=  <?php echo $telefoons['telefoon_id']?>">Edit</a></td>
            <td><a href="deletetelefoon.php?telefoon_id=  <?php echo $telefoons['telefoon_id']?>">Delete</a></td>
           <td></td>
        </tr> <?php } }?>
    </table>
</body>
</html>