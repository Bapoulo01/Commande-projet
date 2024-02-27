<?php
require_once('../models/commande.model.php');

if (isset($_REQUEST["action"])) {
    if ($_REQUEST["action"]=="commande") {
        $commande=findAllcommande();
        require_once('../views/commande.html.php');
    }elseif ($_REQUEST["action"]=="addcommande") {
        require_once('../views/ajout.commande.php');
    }
}

