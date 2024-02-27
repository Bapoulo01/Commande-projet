<?php

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
<div class="prof-body">
            <div class="container">
                <h3>AJOUTER UN CLIENT</h3>
                <form class="form"  method="post" action="<?=WEBROOT;?>">
                <div style="display:flex">
                    <label>Prénom</label>
                    <input class="input"  type="text" name="prenom">
                </div><br>
                <div style="display:flex">
                    <label style="margin-left: 10%;">Nom</label>
                    <input class="input"  type="text" name="nom">
                </div>
                <div style="display:flex;margin-left: 12%;;">
                    <label >Tel</label>
                    <input class="input"style="" type="text" name="tel">
                </div><br>
                <div class="valid">
                    <button class="bt" type="reset" name="">Annuler</button>
                    <button class="but" type="submit" name="action" value="addClient">Enregister</button>
                </div>
                </form>
                
            </div>
        </div>
</body>
</html>