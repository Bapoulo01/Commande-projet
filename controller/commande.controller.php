<?php
// require_once('../models/commande.model.php');

if (isset($_REQUEST["action"])) {
    if ($_REQUEST["action"]=="commande") {
        $etat=isset($_REQUEST['etat'])?$_REQUEST['etat']:"All";
        $commande=findAllcommande($etat);
        $etats=findAllEtat();
        loadView("commande.html.php",["commande"=>$commande,"etats"=>$etats]);

    }elseif ($_REQUEST["action"]=="addcommande") {
        loadView("ajout.commande.php");
    }
}
 else{
    header("location:".WEBROOT."/?controller=commande&action=commande");  
    }



