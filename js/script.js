


/**animaton scroll*/


  let menu= document.querySelector('#menu-icon');
let navbar=document.querySelector('.navbar');


menu.onclick=()=>{
    menu.classList.toggle("bx-x");
    navbar.classList.toggle('open')
};


const scroll=ScrollReveal({
    distance:'40px',
    duration:2500,
    reset: true,
});

//scroll.reveal('.logo',{delay:200, origin:'left'});
scroll.reveal('.home-text h1',{delay:500, origin:'top'});
scroll.reveal('.home-text h2',{delay:400, origin:'left'});
scroll.reveal('.home-text p',{delay:400, origin:'right'});
//scroll.reveal('.navbar',{delay:400, origin:'top'});
scroll.reveal('.anime1',{delay:600, origin:'left'});
scroll.reveal('.anime2',{delay:600, origin:'right'});
//scroll.reveal('',{delay:400, origin:'top'});
//scroll.reveal('. ',{delay:400, origin:'top'});
//scroll.reveal('.',{delay:400, origin:'top'});
  


/*ajax pour le formulaire 


const form = document.getElementById('contactForm');
form.addEventListener('submit', (event) => {
  event.preventDefault();
  const erreur=document.getElementsByClassName('erreur').empty();
  const xhr = new XMLHttpRequest();
  xhr.open('POST', '../index.php',true);
  xhr.setRequestHeader('Content-Type', 'application/json');
  xhr.onload = () => {
    if (xhr.status === 200) {
      console.log(xhr.responseText);
    } else {
      console.error(xhr.statusText);
    }
  };
  xhr.onerror = () => {
    console.error(xhr.statusText);
  };
  const formData = new FormData(form);
  const data = {};
  for (const [key, value] of formData.entries()) {
    data[key] = value;
  }
  xhr.send(JSON.stringify(data));
});*/

/*document.getElementById('contactForm').addEventListener('submit',function(e){

  e.preventDefault();
    
  const data=new FormData(this);
  const xhr=new XMLHttpRequest();

 

  xhr.onreadystatechange=function(){

    if(this.readyState==4 && this.status==200){
     
      console.log(this.response);
      const result=this.response;
      if(result.isSuccess){

       
        const success= document.getElementById('merci');
        success.innerHTML=result.envoi;
        retirer(success);

        delete result.nomErreur;    
      document.getElementById('contactForm').reset();
      }
      else{

      
        document.getElementById('nomErreur').innerHTML=result.nomErreur;
        document.getElementById('prenomErreur').innerHTML=result.prenomErreur;
        document.getElementById('emailErreur').innerHTML=result.emailErreur;
       document.getElementById('phoneErreur').innerHTML=result.phoneErreur;
       document.getElementById('messageErreur').innerHTML=result.messageErreur;
       

      }

    }else if (this.readyState==4){
      alert ('une erreur est survenue..!');
     }
  };

  xhr.open("POST","",true);
  xhr.responseType='json';
 // xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  xhr.send(data );
 






  return false;






})*/

//fonction qui permet de retirer un message apres un temps defini

function retirer (valeur)
{
setTimeout(function(){
    valeur.remove()
    
},3000)
}