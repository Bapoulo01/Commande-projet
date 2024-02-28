<?php
// require_once('../models/client.model.php');

if (isset($_REQUEST["action"])) {
    if ($_REQUEST["action"]=="client") {
        $client=findAllclient();
        loadView("client.html.php",["client"=>$client]);

    }
    elseif($_REQUEST["action"]=="new-client") {
        $client=findAllclient();
        loadView("newclient.html.php",["newclient"=>$client]);

    }
    elseif($_REQUEST["action"]=="addClient") {
       
        $newclient=[
            "prenom"=>$_POST["prenom"],
            "nom"=>$_POST["nom"],
            "telephone"=>$_POST["tel"],
        ];
        AddClient($newclient);
        
        header("location:".WEBROOT."/?controller=client&action=client");  

    }
} else{
    header("location:".WEBROOT."/?controller=client&action=client");  
    }