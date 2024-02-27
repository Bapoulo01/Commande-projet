<?php
function findAllclient():array{
    $sql="select * from client ";
    $data=null;
    //Classe PDO
    //1-Connexion SGBD et selectionner la BD
    $servername = 'localhost';
    $username = 'root';//root
    $password = '';
    $dbname="commande_bd";
     //On essaie de se connecter
    try {  
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        //On définit le mode d'erreur de PDO sur Exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // $conn->setAttibute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_NUM);
      //Select
    //2-Executer la requete
    $statement = $conn->query( $sql); //resultat 
  
    //3-Recuperer les donnes de la requete
    $data= $statement->fetchAll(); //retourne plusieur resultat
  
    //4-fermer la connexion
    $conn==null;
    $statement==null;
    } catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
    return $data;

  }

function AddClient(array $newclient):void{
    $sql="INSERT INTO `client` (prenom,nom, telephone) VALUES(:prenom,:nom,:telephone)";
    //Classe PDO
    //1-Connexion SGBD et selectionner la BD
    $servername = 'localhost';
    $username = 'root';//root
    $password = '';
    $dbname="commande_bd";
     //On essaie de se connecter
    try {  
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        //On définit le mode d'erreur de PDO sur Exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // $conn->setAttibute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_NUM);
      //Select
    //2-Executer la requete
    $statement = $conn->prepare( $sql); //resultat 
    $statement->execute($newclient);
    //3-Recuperer les donnes de la requete
    // $data= $statement->fetchAll(); //retourne plusieur resultat
  
    //4-fermer la connexion
    $conn==null;
    $statement==null;
    } catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
}