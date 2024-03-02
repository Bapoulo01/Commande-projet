 <?php

  function findAllcommande(string $etat):array{
      $sql="select nom,prenom,datec,montant,nometat,c.id_client,idc FROM `commande`c,
      `client`cl, `etatcom`e WHERE c.id_client= cl.id_client AND e.idetat= c.idetat";
      $data=null;
        if ($etat!="All") {
          $sql.=" and nometat like '$etat'" ;
        }
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

  // ;

  function findAllEtat(){
      $sql="select idetat,nometat FROM `etatcom`";

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

  function findCommandeByDetail(){
    $sql="select a.`ida`,libelle,prixunitaire,qtestock,c.`montant`,c.`idc` FROM `avoir`av,`commande`c,`article`a,`client`
    WHERE a.`ida`=av.`ida` AND c.`idc`=av.`idc``";

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

  
  