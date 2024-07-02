<?php
    include "stage.php";

    $dbzaak = new zaak(new DB());
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overzicht Zaak</title>
</head>
<body>
    <table class="table dark">
        <tr>
            <th>id</th>
            <th>naam</th>
            <th>aantal</th>
            <th>user</th>
            <th>edit</th>
            <th>delete</th>
        </tr>

        <tr> <?php
            $stage = $dbzaak->selectzaak(); 
            if ($stage) { 
                foreach ($stage as $zaak) {?>
            <td><?php echo $zaak['id']?></td>
            <td><?php echo $zaak['naam']?></td>
            <td><?php echo $zaak['aantal']?></td>
            <td><?php echo $zaak['user']?></td>
            <td><a href="updatestage.php?id=  <?php echo $zaak['id']?>">Edit</a></td>
            <td><a href="deletestage.php?id=  <?php echo $zaak['id']?>">Delete</a></td>
           <td></td>
        </tr> <?php } }?>
    </table>
</body>
</html>