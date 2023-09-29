<?php



/**traiter les données du formulaire */
//$mesg="erreur de php";
//variable corespondants aux nom des different champs du formulaire

//$nom=$prenom=$email=$phone=$message="";
//$nomErreur=$prenomErreur=$emailErreur=$phoneErreur=$messageErreur="";

//variables qui vont contenir les differents messages d'erreur

 $tableau=[ "nom"=>"","prenom"=>"","email"=>"","phone"=>"","message"=>"" ,  "nomErreur"=>"","prenomErreur"=>"","emailErreur"=>"","phoneErreur"=>"","messageErreur"=>"",  "isSuccess"=>false ,'envoi'=>"message envoyé"];
 
 //message de success

//$isSuccess=false;

//ladresse qui envoi l'email
$emailTo="posseymec22@gmail.com";
//contenu de l'email



if($_SERVER['REQUEST_METHOD']=='POST'){
    $tableau["nom"]=Controle($_POST['nom']);
    $tableau["prenom"]=Controle($_POST['prenom']);
    $tableau["email"]=Controle($_POST['email']);
    $tableau["phone"]=Controle($_POST['phone']);
    $tableau["message"]=Controle($_POST['message']);
    $tableau["isSuccess"]=true;
    $emailText="";
    
    //verifier si les champs sont remplies

    if(empty( $tableau["nom"]) || is_numeric( $tableau["nom"])){
        $tableau["nomErreur"]='veillez saisir un  nom valide !';
        //$tableauErreur["nomErreur"]='veillez saisir un  nom valide!';
       $tableau["isSuccess"]=false;
    }
    else{
        $emailText.="nom: {$tableau["nom"]}\n";

    }
    if(empty( $tableau["prenom"]) || is_numeric( $tableau["prenom"])){
        $tableau["prenomErreur"]='veillez saisir un   prenom valide !';
       // $tableauErreur["prenomErreur"]='veillez saisir  prenom valide !';
       $tableau["isSuccess"]=false;

    }
    else{
        $emailText.="prenom:  {$tableau["prenom"]}\n";
    }
    
    if(!isEmail($tableau["email"])){
       //$mesg= $emailErreur="adresse  email non valide";
        $tableau["emailErreur"]="adresse  email non valide";
        $tableau["isSuccess"]=false;
    }
    else{
        $emailText.="email:  {$tableau["email"]}\n";
        
    }
    
    if(!isPhone($tableau["phone"])){
       //$mesg= $phoneErreur="numero de telephone nom valide";
        $tableau["phoneErreur"]="numero de telephone nom valide";
        $tableau["isSuccess"]=false;
        
    }
    else{
        $emailText.="telephone:  {$tableau["phone"]}\n";
    }
    if(empty(  $tableau["message"])){
       //$mesg= $messageErreur="veillez saisir votre message";
        $tableau["messageErreur"]="veillez saisir votre message";
        $tableau["isSuccess"]=false;
    }
    else{
        $emailText.="message: {$tableau["message"]}\n";
        
    }
    
    if( $tableau["isSuccess"]){
        /*en-tete du mail* */
        $headers="from:  {$tableau["nom"]}   {$tableau["prenom"]} < {$tableau["email"]}>\r\n Reply-to:  {$tableau["email"]}";
        
        /**envoi du mail */
        mail($emailTo, "un message de votre site" , $emailText, $headers);
        /*supprimer les information dans les champs* */

       ;
        
        
        
    }
    
    echo json_encode($tableau);
    
    //$tableau=[ "nom"=>"","prenom"=>"","email"=>"","phone"=>"","message"=>"" ,  "nomErreur"=>"","prenomErreur"=>"","emailErreur"=>"","phoneErreur"=>"","messageErreur"=>"",  "isSuccess"=>false ,'envoi'=>"message envoyé"];
    

    
    


   // header("location:../index.php");
}


/**-----------------------------FONCTIONS--------------------- */

//fonction qui permet de controler les information passées dans le formulaire

function Controle($variable){
    $variable=trim($variable);
    $variable=htmlspecialchars($variable);
    $variable=stripslashes($variable);

    return $variable;
}

//verifier l'email

function isEmail($variable){
    return filter_var($variable , FILTER_VALIDATE_EMAIL);
}

//verifier le numero de telephne
function isPhone($variable){
    return preg_match("/^[0-9]*$/",$variable);
}


//$resultat=["success"=>$isSuccess , "message"=>$mesg /* "messageErreur"=>$messageErreur,"nomErreur"=>$nomErreur,'prenomErreur'=>$prenomErreur,'phoneErreur'=>$phoneErreur,'emailErreur'=>$emailErreur */];





































?>