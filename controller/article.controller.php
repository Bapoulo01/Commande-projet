<?php
// require_once('../models/article.model.php');

if (isset($_REQUEST["action"])) {
    if ($_REQUEST["action"]=="article") {
        $article=findAllarticle();
        loadView("article.html.php",["article"=>$article]);
    }elseif ($_REQUEST["action"]=="detail"){
        $detail=findCommandeByDetail($_REQUEST["id"]);
       
        loadView("detail.commande.html.php",["detail"=>$detail]);
    }
} else{
    header("location:".WEBROOT."/?controller=article&action=article");  
    }