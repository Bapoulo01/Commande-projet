<?php
if(!isset($_GET["page"])) {
    $page=1;
}else{$page=$_GET["page"];}
$taille=count($client);
$nombre_ligne=5;
$nombre_page=ceil($taille/$nombre_ligne);
// var_dump($nombre_page );
$position=($page-1)*$nombre_ligne;
$tab=array_slice($client  , $position, $nombre_ligne);
// var_dump($tab);
?>


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
                <a href="<?=WEBROOT;?>/?controller=client&action=new-client"><button class="boo" type="submit">Ajouter</button></a>

                <table class="table-style">
                    <thead>
                        <tr>
                            <td>Prenom</td>
                            <td>Nom</td>
                            <td>Telephone</td>
                        </tr>
                    </thead>
                    <?php  
                    foreach ($tab as  $value):?>
                    <tbody>
                        <tr>
                            <td><?=$value["prenom"]?></td>
                            <td><?=$value["nom"]?></td>
                            <td><?=$value["telephone"]?></td>
                        </tr>
                    </tbody>
                    <?php endforeach;?>
                </table>
                <div class="page">
                    <a href=""><span class="fa fa-long-arrow-left"></span></a>
                    <?php for ($i=1; $i <=$nombre_page ; $i++):?>
                  <a href="<?=WEBROOT;?>/?controller=client&action=client&page=<?= $i?>"><?= $i ?> </a>
                <?php endfor?>
                    <a href=""><span class="fa fa-long-arrow-right"></span></a>
                </div>
            </div>
</body>
</html>