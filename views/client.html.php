<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Client</title>
</head>
<body>
<div class="prof-body">
            <div class="container">
                <h3>LISTE DES CLIENTS</h3>
                <a href="<?=WEBROOT;?>/?action=new-client"><button class="boo" type="submit">Ajouter</button></a>

                <table class="table-style">
                    <thead>
                        <tr>
                            <td>Prenom</td>
                            <td>Nom</td>
                            <td>Telephone</td>
                        </tr>
                    </thead>
                    <?php  
                    foreach ($client as  $value):?>
                    <tbody>
                        <tr>
                            <td><?=$value["prenom"]?></td>
                            <td><?=$value["nom"]?></td>
                            <td><?=$value["telephone"]?></td>
                        </tr>
                    </tbody>
                    <?php endforeach;?>
                </table>
            </div>
</body>
</html>