<?php
if(!isset($_GET["page"])) {
    $page=1;
}else{$page=$_GET["page"];}
$taille=count($commande);
$nombre_ligne=3;
$nombre_page=ceil($taille/$nombre_ligne);
// var_dump($nombre_page );
$position=($page-1)*$nombre_ligne;
$tab=array_slice($commande  , $position, $nombre_ligne);
// var_dump($tab);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>commande</title>
</head>
<body>
<div class="prof-body">
            <div class="container">
            <form action="<?=WEBROOT?>" method="post">
                    <label style="margin-left: 3%;">Etat</label>
                  <select  name="etat" id="">
                        <option value="All">Tout</option>
                        <option value="En cours">En cours</option>
                        <option value="En attente">En attente</option>
                        <option value="Livré">Livré</option>
                        <option value="Annulé">Annulé</option>
                    </select>
                    <input type="hidden" name="controller" value="commande">
                    <button class="bout" type="submit" name="action" value="commande">OK</button>
                </form>
                <h3>LISTE DES COMMANDES</h3>
                <table class="table-style">
                    <thead>
                        <tr>
                            <td>Client</td>
                            <td>Date</td>
                            <td>Montant</td>
                            <td>Etat</td>
                            <td>Action</td>

                        </tr>
                    </thead>
                    <?php foreach ($tab as  $value):?>
                    <tbody>
                        <tr>
                            <td><?=$value["prenom"] ." " . $value["nom"]?></td>
                            <td><?=$value["datec"]?></td>
                            <td><?=$value["montant"]?></td>
                            <td><?=$value["nometat"]?></td>
                            <td>
                            <a href="<?=WEBROOT;?>/?controller=article&action=detail&id=<?=$value["idc"]?>"><button class="bo" type="submit">Articles</button></a>
                            </td>
                            
                        </tr>
                    </tbody>
                    <?php endforeach;?>
                </table>
                <div class="page">
                    <a href=""><span class="fa fa-long-arrow-left"></span></a>
                    <?php for ($i=1; $i <=$nombre_page ; $i++):?>
                  <a href="<?=WEBROOT;?>/?controller=commande&action=commande&page=<?= $i?>"><?= $i ?> </a>
                <?php endfor?>
                    <a href=""><span class="fa fa-long-arrow-right"></span></a>
                </div>
            </div>
</body>
</html>