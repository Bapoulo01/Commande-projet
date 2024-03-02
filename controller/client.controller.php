<?php
// require_once('../models/client.model.php');

if (isset($_REQUEST["action"])) {
    if ($_REQUEST["action"]=="client") {
        $client=findAllclient();
        loadView("client.html.php",["client"=>$client]);

    }
    elseif($_REQUEST["action"]=="new-client") {
        $client=findAllclient();
        loadView("newclient.html.php");

    }
    elseif($_REQUEST["action"]=="addClient") {
       $errors=[];
       obligatoire("nom",$_POST['nom'],$errors,"Le nom est obligatoire");
       obligatoire("prenom",$_POST['prenom'],$errors,"Le prenom est obligatoire");
       obligatoire("tel",$_POST['tel'],$errors);
    //    dd($errors);
       if (validate($errors)) {
        $client=SelectClientByTel($_POST['tel']);
        if($client==null){
            // dd("ok");
            $newclient=[
                "prenom"=>$_POST["prenom"],
                "nom"=>$_POST["nom"],
                "telephone"=>$_POST["tel"],
            ];
            AddClient($newclient);
            redirecToRoute("client","client");
            // exit;
            // header("location:".WEBROOT."/?controller=client&action=newclient");
        }else{
            $_SESSION['errors']=["tel"=>"Ce numero existe deja dans la BD"];
        }
       } else {
        $_SESSION['errors']=$errors;
       }
        // dd("ok"); 
        redirecToRoute("client","new-client");// controller=client,action=client
    }
} else{
    header("location:".WEBROOT."/?controller=client&action=client");
    // loadView("client.html.php");
    }