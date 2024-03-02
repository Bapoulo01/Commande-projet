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
    }elseif ($_REQUEST["action"]=="detail"){
        $detail=findCommandeByDetail();
        loadVie("detail.commande.php",["commande"=>$detail,]);
    }
}
 else{
    header("location:".WEBROOT."/?controller=commande&action=commande");  
    }



