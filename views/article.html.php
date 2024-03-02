<?php
if(!isset($_GET["page"])) {
    $page=1;
}else{$page=$_GET["page"];}
$taille=count($article);
$nombre_ligne=3;
$nombre_page=ceil($taille/$nombre_ligne);
// var_dump($nombre_page );
$position=($page-1)*$nombre_ligne;
$tab=array_slice($article  , $position, $nombre_ligne);
// var_dump($tab);
?>




<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>article</title>
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
                <div class="page">
                    <a href=""><span class="fa fa-long-arrow-left"></span></a>
                    <?php for ($i=1; $i <=$nombre_page ; $i++):?>
                  <a href="<?=WEBROOT;?>/?controller=article&action=article&page=<?= $i?>"><?= $i ?> </a>
                <?php endfor?>
                    <a href=""><span class="fa fa-long-arrow-right"></span></a>
                </div>
            </div>
</body>
</html>