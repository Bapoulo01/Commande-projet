<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
<div class="prof-body">
            <div class="container">
                <h3>LISTE DES ARTICLES</h3>
                <table class="table-style">
                    <thead>
                        <tr>
                            <td>Libelle</td>
                            <td>Prix unitaire</td>
                            <td>Qtestock</td>
                            <td>Reference</td>

                        </tr>
                    </thead>
                    <?php  
                    foreach ($article as  $value):?>
                    <tbody>
                        <tr>
                            <td><?=$value["libelle"]?></td>
                            <td><?=$value["prixunitaire"]?></td>
                            <td><?=$value["qtestock"]?></td>
                            <td><?=$value["Reference"]?></td>
                        </tr>
                    </tbody>
                    <?php endforeach;?>
                </table>
            </div>
</body>
</html>