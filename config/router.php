<?php

if ((isset($_REQUEST["controller"]))) {
    if($_REQUEST["controller"]=="commande"){
        require_once('../commande.controller.php');
    }
    elseif($_REQUEST["controller"]=="article"){
        require_once('../article.controller.php');
    }
}