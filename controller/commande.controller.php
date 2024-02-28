<?php
// require_once('../models/commande.model.php');

if (isset($_REQUEST["action"])) {
    if ($_REQUEST["action"]=="commande") {
        $commande=findAllcommande();
        loadView("commande.html.php",["commande"=>$commande]);

    }elseif ($_REQUEST["action"]=="addcommande") {
        loadView("ajout.commande.php");

    }
}
 else{
    header("location:".WEBROOT."/?controller=commande&action=commande");  
    }

