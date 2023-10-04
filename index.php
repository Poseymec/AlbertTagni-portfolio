<!DOCTYPE html>
<html lang="en">
<head>
    <!--lien des icon-->
    <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!--lien scrollbar-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-----------lien bootstrap----->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  

    <!--javascrit lien-->
    <script src="js/script.js" type="module" defer></script>
    <!--css lien-->
    <link rel="stylesheet" href="css/style.css">
    <title>CV albert TAGNI</title>
</head>
<body data-bs-spy="scroll" data-bs-target="maBar">

    <!--------------------------------------bar de navigation---------------------------------->
 
     <!--section header-->
     <header>
        <a href="#" class="logo"><span>A</span>lbert<span>.</span></a>

        <ul class="navbar">
            <li><a href="#section1" class="active">Accueil</a></li>
            <li><a href="#section-moi">Moi</a></li> 
            <li><a href="#section2">Competences</a></li>
            <li><a href="#section3">Education</a></li>
            <li><a href="#section4">Portfolio</a></li>
            <li><a href="#section5">Contacts</a></li>

        </ul>   
        <div class="menu-btn">
            
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>


    <!--------------------------------------------------------------------------------------->

    <!--------------------------------section 1 parge d'accueil du site--------------------------------------->

    
    <section  id= "section1"class="container-fluid home">
   
            <div class=" home-text">
                <h1>Albert Tagni</h1>
                <h2>developpeur web <span>junior</span>.</h2>
                <p>Autodidacte et passionné de la programmation informatique, <br>
                j'apprends a coder chaque jour en suivant des tutoriels et formations en ligne   
                </p>
                <a href="#" class="btn">telecharger mon CV</a>
                <div class="partage">
                    <div class="social">
                        <a href="#"><i class="bx bxl-facebook"></i></a>
                        <a href="#"><i class="bx bxl-twitter"></i></a>
                        <a href="#"><i class="bx bxl-linkedin"></i></a>
                        <a href="#"><i class="bx bxl-whatsapp"></i></a>
                    </div>
                </div>
            </div>
            <div class="  home-img ">
                <img src="image/alb15.png" alt="photo">     
            </div>




    </section>

    <!-----------------------------------------------------section apropos------------------------------------------------------>
    <section id="section-moi" class="  a-propos">
    <div class="divider"></div>
        <div class="heading">
            <h2>A propos de moi</h2>
        </div>
        <div class="  main">
    
            <div class=" a-propos-text">
                <h3 class="biographie-1"><span>Vendeur</span>  &  <span>Developpeur Web Autodidacte</span> </h3>
                <p class="biographie-2">
                    
                    Salut, je m'appelle TAGNI GOUACHI ALBERT PIRES, un développeur web junior passionné par les nouvelles technologies.
                    Je suis né au Cameroun, dans la région de l'Ouest et   j'ai grandi  a douala dans un environnement bilingue. 
                    J'ai appris le français et l'anglais (beaucoup plus le français)  à l'école primaire et au lycée, où j'ai 
                    obtenu mon baccalauréat de série D en 2018. Depuis, je travaille comme vendeur dans une boutique de téléphones
                    portables et d'appareils électroniques à Douala-Bonaberi. Mais ce n'est pas tout. Le soir, après le travail,
                    je me forme en autodidacte en programmation informatique. J'ai appris à maîtriser plusieurs langages de programmation, 
                    tels que HTML, CSS, JavaScript,PHP et d'autres outils de programmation  . Je suis capable de créer des sites web dynamiques et interactifs, qui répondent 
                    aux besoins des utilisateurs. Je vous invite à découvrir mes projets personnels sur mon portfolio, où vous pourrez 
                    voir mes réalisations et mes compétences. N'hésitez pas à me contacter si vous avez des questions ou des propositions
                    de collaboration. Je serai ravi de discuter avec vous. Merci de votre visite et à bientôt ! 
                </p>
            </div>
            <img  src="image/albert16.jpg"  class="imag" alt=""  >
        </div>

        </section>
 
   


    <!----------------------------section 2 competences----------------------------------->
      
    <section id="section2">
        <div class="divider"></div>
        <div class="heading">
            <h2>Competences</h2>
        </div>
        <div class="container-fluid">
            
            <!---------------- langages et niveau de maitrise-------------------------------->
            <div class="row  LaGrid2  anime1">
                <div class=" cadre col-md-4">
                    <div class="glass"> </div>
                    <div class="pourcentage" style="--clr:#ee9626;--numero:70">
                        <div class="point"></div>
                        <svg>
                            <circle cx="70" cy="70" r="70"></circle>
                            <circle cx="70" cy="70" r="70"></circle>
                        </svg>
                        <div class="text">
                            <h3>70 <span>%</span></h3>
                            <h4>html</h4>
                        </div>
                    </div>                        
                </div>
                <div class=" cadre col-md-4">
                    <div class="glass"> </div>
                    <div class="pourcentage" style="--clr:#ee9626;--numero:50">
                        <div class="point"></div>
                        <svg>
                            <circle cx="70" cy="70" r="70"></circle>
                            <circle cx="70" cy="70" r="70"></circle>
                        </svg>
                        <div class="text">
                            <h3>50 <span>%</span></h3>
                            <h4>css</h4>
                        </div>
                    </div>                        
                </div>
                <div class=" cadre col-md-4">
                    <div class="glass"> </div>
                    <div class="pourcentage" style="--clr:#ee9626;--numero:30">
                        <div class="point"></div>
                        <svg>
                            <circle cx="70" cy="70" r="70"></circle>
                            <circle cx="70" cy="70" r="70"></circle>
                        </svg>
                        <div class="text">
                            <h3>30<span>%</span></h3>
                            <h4>javascript</h4>
                        </div>
                    </div>       
                </div>               
                <!--<div class=" cadre col-md-4">
                    <div class="pourcentage" style="--clr:#ee9626;--numero:50">
                        <div class="point"></div>
                        <svg>
                            <circle cx="70" cy="70" r="70"></circle>
                            <circle cx="70" cy="70" r="70"></circle>
                        </svg>
                        <div class="text">
                            <h3>50 <span>%</span></h3>
                            <h4>html</h4>
                        </div>
                    </div>
                </div>-->
            </div>
            <div class="row  LaGrid2 anime2">
               
                <!--<div class=" cadre col-md-4">
                    <div class="pourcentage" style="--clr:#ee9626;--numero:50">
                        <div class="point"></div>
                        <svg>
                            <circle cx="70" cy="70" r="70"></circle>
                            <circle cx="70" cy="70" r="70"></circle>
                        </svg>
                        <div class="text">
                            <h3>50 <span>%</span></h3>
                            <h4>html</h4>
                        </div>
                    </div>                       
                </div>-->                
                <div class=" cadre col-md-4">
                    <div class="glass"> </div>
                    <div class="pourcentage" style="--clr:#ee9626;--numero:40">
                        <div class="point"></div>
                        <svg>
                            <circle cx="70" cy="70" r="70"></circle>
                            <circle cx="70" cy="70" r="70"></circle>
                        </svg>
                        <div class="text">
                            <h3>40 <span>%</span></h3>
                            <h4>php</h4>
                        </div>
                    </div> 
                </div>
                <div class=" cadre col-md-4">
                    <div class="glass"> </div>
                    <div class="pourcentage" style="--clr:#be7b07;--numero:10">
                        <div class="point"></div>
                        <svg>
                            <circle cx="70" cy="70" r="70"></circle>
                            <circle cx="70" cy="70" r="70"></circle>
                        </svg>
                        <div class="text">
                            <h3>10 <span>%</span></h3>
                            <h4>laravel</h4>
                        </div>
                    </div>
                </div>
                <div class=" cadre col-md-4">
                    <div class="glass"> </div>
                    <div class="pourcentage" style="--clr:#ee9626;--numero:60">
                        <div class="point"></div>
                        <svg>
                            <circle cx="70" cy="70" r="70"></circle>
                            <circle cx="70" cy="70" r="70"></circle>
                        </svg>
                        <div class="text">
                            <h3>60 <span>%</span></h3>
                            <h4>git & github</h4>
                        </div>
                    </div>                 
                </div>
            </div>
        </div>
    </section>
   
    <!------------------------section 3 education --------------------------------------->
  
    <section id="section3">
        <div class="divider  "></div>
        <div class="heading">
            <h2>Education</h2>
        </div>
        <div class="containern education">
            <div class="row">
                <div class="  col-md-6 anime1">
                    <div class="education-block  masque masque-visible">
                        <h6>2011-2018</h6>
                        <span class="bi-award-fill"></span>
                        <h6>ecole secondaire</h6>
                        <h3>lycee bilingue de bonaberi (<a href="#">LYBIBO</a>)</h3>
                        <div class="divider "></div>
                        <div>
                            <h5><a href="">baccalaureat ESG serie D </a> </h5>
                            <h6>session 2017-2018</h6>
                        </div>
                    </div>
                </div>
                <div class=" col-md-6 anime2">
                    <div class="education-block">
                        <h6>2021-2023</h6>
                        <span class="bi-award-fill"></span>
                        <h6>formation autodidate en developpement web d'abord sur youtube en suit sur udemy</h6>
                        <h3>certificat udemy</h3>
                        <div class="divider "></div>

                        <div><h5><a href="">php et mysql: la formation ultime</a></h5>(louis nicolas leuillet)</div>
                        <div class="divider1 "></div>
                        <div><h5><a href="">git et github: la formation ultime</a></h5>(louis nicolas leuillet)</div>
                        <div class="divider1 "></div>
                        <div><h5><a href="">formation complete developpeur web</a></h5>(john taieb)</div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--------------------------------section 4 porfolio et projet --------------------------------------------->

    <section id="section4">
        <div class="divider "></div>
        <div class="heading">
            <h2>Portfolio</h2>
        </div>
        <div class="container">
            <div class="row anime1">
                <div class="col-md-4">
                    <a href="#" target="-bank">
                        <img src="image/twitter_retweet (1).png" alt="twitter" class="imag-twitter" >
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" target="-bank">
                        <img src="image/facebook_share.png" alt="twitter" class="imag-twitter" >
                    </a>
                </div>
                <div class="col-md-4">  <a href="#" target="-bank">
                    <img src="image/facebook_video.png" alt="twitter" class="imag-twitter" >
                </a></div>
            </div>
            <div class="row anime2">
                <div class="col-md-4">
                    <a href="#" target="-bank">
                        <img src="image/google_translate.png" alt="twitter" class="imag-twitter" >
                    </a>
                </div>
                <div class="col-md-4 ">  <a href="#" target="-bank">
                    <img src="image/twitter_video.png" alt="twitter" class="imag-twitter" >
                </a></div>
                <div class="col-md-4 ">  <a href="#" target="-bank">
                    <img src="image/youtube.png" alt="twitter" class="imag-twitter" >
                </a></div>
            </div>
        </div>
    </section>

    <!-------------------------------formulaire de contact----------------------->

    
    
    <?php


/**traiter les données du formulaire */

//variable corespondants aux nom des different champs du formulaire
/*
$nom=$prenom=$email=$phone=$message="";

//variables qui vont contenir les differents messages d'erreur

$nomErreur=$prenomErreur=$emailErreur=$phoneErreur=$messageErreur="";

//message de success

//$isSuccess=false;

//ladresse qui envoi l'email
$emailTo="posseymec22@gmail.com";
//contenu de l'email



if($_SERVER['REQUEST_METHOD']=='POST'){
    $nom=Controle($_POST['nom']);
    $prenom=Controle($_POST['prenom']);
    $email=Controle($_POST['email']);
    $phone=Controle($_POST['phone']);
    $message=Controle($_POST['message']);
    $emailText="";
    $isSuccess=true;
    
    //verifier si les champs sont remplies

    if(empty($nom) || is_numeric($nom)){
        $nomErreur='veillez saisir un  nom valide!';
        $isSuccess=false;
    }
    else{
        $emailText.="nom: $nom\n";

    }
    if(empty($prenom) || is_numeric($prenom)){
        $prenomErreur='veillez saisir  prenom valide !';
        $isSuccess=false;

    }
    else{
        $emailText.="prenom: $prenom\n";
    }
    
    if(!isEmail($email)){
        $emailErreur="adresse  email non valide";
        $isSuccess=false;
    }
    else{
        $emailText.="email: $email\n";
        
    }
    
    if(!isPhone($phone)){
        $phoneErreur="numero de telephone nom valide";
        $isSuccess=false;
        
    }
    else{
        $emailText.="telephone: $phone\n";
    }
    if(empty($message)){
        $messageErreur="veillez saisir votre message";
        $isSuccess=false;
    }
    else{
        $emailText.="message: $message\n";
        
    }
    
    if($isSuccess){
        /*en-tete du mail* */
     /*   $headers="from: $nom  $prenom <$email>\r\n Reply-to: $email";
        
        /**envoi du mail */
       /* mail($emailTo, "un message de votre site" , $emailText, $headers);
        /*suppreimer les information dans les champs* */
      /*  $nom=$prenom=$email=$phone=$message="";
    }




   // header("location:../index.php");
}


/**-----------------------------FONCTIONS--------------------- */

//fonction qui permet de controler les information passées dans le formulaire

/*function Controle($variable){
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
*/
?>
<section id="section5" class="section5">
    <div class="divider "></div>
        <div class="heading"> 
            <h2>Contact</h2>
        </div>
    <form  id="contactForm" action="php/contact.php" method="POST" enctype="multipart/form-data">
        <div id="merci" style="color:#005b8f; font-size:30px; text-align:center">
        </div>
        
            <div class="container ">
                <div class="row row2 ">
                    <div class="col-md-6 col">
                        <div class="inputBox">
                            <label for="firstname" class="form-label">Nom <span class="blue">*</span></label>
                            <input id="firstname" type="text" name="nom" class="form-control"  value=""  >
                        </div>
                        <p id="nomErreur"></p>
                      
                    </div>
                    <div class="col-md-6 col">
                        <div class="inputBox">
                            <label for="lastname" class="form-label">Prénom <span class="blue">*</span></label>
                            <input id="name" type="text" name="prenom" class="form-control"   value=""  >
                        </div>
                        <p id="prenomErreur"></p>
                     
                    </div>
                </div>
                <div class="row row2">
                    <div class="col-md-6 col">
                        <div class="inputBox">
                            <label for="email" class="form-label">Email <span class="blue">*</span></label>
                            <input id="email" type="text" name="email" class="form-control" value=""   >
                        </div>
                        <p id="emailErreur"></p>
                       
                    </div>
                    <div class="col-md-6 col">
                        <div class="inputBox">
                             <label for="phone" class="form-label">Téléphone</label>
                             <input id="phone" type="text" name="phone" class="form-control"   value=""  >
                            </div>
                            <p id="phoneErreur"></p>
                       
                    </div>
                </div>
                <div class="row row2">
                    <div class="col-md-12 col">
                        <div class="inputBox textarea">
                            <label for="message" class="form-label">Message <span class="blue">*</span></label>
                            <textarea id="message" name="message" class="form-control"    value="" ></textarea>
                        </div>
                        <p id="messageErreur"></p>
                       
                    </div>
                </div>
                <div class="row row2">
                    <div class="col-md-12 col" >
                        <input type="submit" value="envoyer">
                    </div>
                </div>
            </div>
        </form>
    </section>

    <!------------------------footer-------------------------------------------------->
    
    <footer>
        <a href="#section1">
            <span class="bi-chevron-bar-up"></span>
        </a>
        <h4>© Albert TAGNI-cv</h4>
        <div class="partage">
                    <div class="social">
                        <a href="#"><i class="bx bxl-facebook"></i></a>
                        <a href="#"><i class="bx bxl-twitter"></i></a>
                        <a href="#"><i class="bx bxl-linkedin"></i></a>
                        <a href="#"><i class="bx bxl-whatsapp"></i></a>
                    </div>
                </div>
            </div>
    </footer>
    
</body>
</html>