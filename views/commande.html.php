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
            <form>
                    <label style="margin-left: 3%;">Etat</label>
                  <select  name="etat" id="">
                        <option value="All">Tout</option>
                        <option value="En cours">En cours</option>
                        <option value="En attente">En attente</option>
                        <option value="Livré">Livré</option>
                        <option value="Annulé">Annulé</option>

                    </select>
                    <button class="bout" type="submit">OK</button>
                </form>
                <h3>LISTE DES COMMANDES</h3>
                <table class="table-style">
                    <thead>
                        <tr>
                            <td>Client</td>
                            <td>Date</td>
                            <td>Montant</td>
                            <td>Etat</td>
                            <td>Action</td>

                        </tr>
                    </thead>
                    <?php   foreach ($commande as  $value):?>
                    <tbody>
                        <tr>
                            <td><?=$value["prenom"] ." " . $value["nom"]?></td>
                            <td><?=$value["datec"]?></td>
                            <td><?=$value["montant"]?></td>
                            <td><?=$value["nometat"]?></td>
                            <td>
                            <a href="<?=WEBROOT;?>/?action=detail"><button class="bo" type="submit">Articles</button></a>
                            </td>
                            
                        </tr>
                    </tbody>
                    <?php endforeach;?>
                </table>
            </div>
</body>
</html>