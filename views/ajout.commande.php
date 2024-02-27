<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="prof-body">
        <div class="cont1">
            <h3>CLIENT</h3>
            <form class="form1" method="post" action="<?=WEBROOT;?>">
            <div class="input-lab">
                <label style="margin-left: 11%;">Tel</label>
                <input class="inpt" type="text" name="tel">
                <button class="bout" type="submit">OK</button>
            </div>
            <div class="input-lab1" >
                <label style="margin-left: 3%;">Nom</label>
                <input class="inpt1"  type="text" name="nom" readonly>
                <label style="margin-left: 5%;">Prenom</label>
                <input class="inpt1"  type="text" name="prenom" readonly>    
            </div>
            </form>
        </div>
        <div class="cont2">
             <h3>ARTICLE</h3>
            <form class="form1" method="post" action="<?=WEBROOT;?>">
            <div class="input-lab">
                <label style="margin-left: 8%;">Reference</label>
                <input class="inpt" type="text" name="Ref">
                <button class="bout" type="submit">OK</button>
            </div>
            <div class="input-lab2" >
                <label style="margin-left: 5%;">Libelle</label>
                <input class="inpt2"  type="text" name="libelle" readonly>
                <label style="margin-left: 8%;">P.Unitaire</label>
                <input class="inpt2"  type="text" name="Pu" readonly> 
                <label style="margin-left: 3%;">Q.stock</label>
                <input class="inpt2"  type="text" name="Qstok" readonly>    
            </div>
            <div class="input-lab">
                <label style="margin-left: 8%;">Qte Comd</label>
                <input class="inpt" type="text" name="Qcom">
                <button class="bout" type="submit">OK</button>
            </div>
            </form>
        </div>
    </div>
</body>
</html>