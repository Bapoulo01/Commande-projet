<?php
require_once('../models/article.model.php');

if (isset($_REQUEST["action"])) {
    if ($_REQUEST["action"]=="article") {
        $article=findAllarticle();
        require_once('../views/article.html.php');
    }
}