<?php

if ((isset($_REQUEST["controller"]))) {
    if($_REQUEST["controller"]=="commande"){
        require_once('../controller/commande.controller.php');
    }
    elseif($_REQUEST["controller"]=="article"){
        require_once('../controller/article.controller.php');
    }
    elseif($_REQUEST["controller"]=="client"){
        require_once('../controller/client.controller.php');
    }
} else {
    require_once('../controller/article.controller.php');
}