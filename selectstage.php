<?php
    include "telefoon.php";

    $dbtelefoons = new (new DB());
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
            <th>id</th>
            <th>naam</th>
            <th>aantal</th>
            <th>user</th>
        </tr>

        <tr> <?php
            $stage = $dbzaak->selectzaak(); 
            if ($telefoon) { 
                foreach ($telefoon as $telefoons) {?>
            <td><?php echo $telefoons['id']?></td>
            <td><?php echo $telefoons['naam']?></td>
            <td><?php echo $telefoons['aantal']?></td>
            <td><?php echo $telefoons['user']?></td>
            <td><a href="updatestage.php?id=  <?php echo $zaak['id']?>">Edit</a></td>
            <td><a href="deletestage.php?id=  <?php echo $zaak['id']?>">Delete</a></td>
           <td></td>
        </tr> <?php } }?>
    </table>
</body>
</html>