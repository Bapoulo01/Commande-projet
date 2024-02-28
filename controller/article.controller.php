<?php
// require_once('../models/article.model.php');

if (isset($_REQUEST["action"])) {
    if ($_REQUEST["action"]=="article") {
        $article=findAllarticle();
        loadView("article.html.php",["article"=>$article]);

    }
} else{
    header("location:".WEBROOT."/?controller=article&action=article");  
    }