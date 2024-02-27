<?php
require_once('../models/client.model.php');

if (isset($_REQUEST["action"])) {
    if ($_REQUEST["action"]=="client") {
        $client=findAllclient();
        require_once('../views/client.html.php');
    }
    elseif($_REQUEST["action"]=="new-client") {
        require_once('../views/newclient.html.php');
    }
    elseif($_REQUEST["action"]=="addClient") {
       
        $newclient=[
            "prenom"=>$_POST["prenom"],
            "nom"=>$_POST["nom"],
            "telephone"=>$_POST["tel"],
        ];
        AddClient($newclient);
        
        header("location:".WEBROOT."/?action=client");  
    }
}