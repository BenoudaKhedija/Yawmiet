let nomInput = document.getElementById("nom");
let domaineInput = document.getElementById("domaine");
let dateInput = document.getElementById("date");
let descriptionInput = document.getElementById("description");
let prix_billetInput = document.getElementById("prix_billet");
let nb_placeInput = document.getElementById("nb_place");
let nb_placeparreservationInput = document.getElementById("nb_placeparreservation");
let id_bookeurInput = document.getElementById("id_bookeur");
let ideventInput = document.getElementById("idevent");

//var letters = /^[A-Za-z]+$/;


/*function passValidationn() 
{
    if ( nb_placeparreservationInput.value == "" || id_bookeurInput.value == "" || ideventInput.value == "") 
    {
        alert("Remplissez toutes les cases !");
        return false;
    } 
    else
    {
        alert(" OK");
    }
}*/

function passValidationn() {
    let nb_placeparreservationInput = document.getElementById("nb_placeparreservation");
    let id_bookeurInput = document.getElementById("id_bookeur");
    let ideventAInput = document.getElementById("ideventA");
    let nbMax = 10; // nombre donné dans la base de données
    let nbSaisi = nb_placeparreservationInput.value;
    
    if (nbSaisi == "" || id_bookeurInput.value == "" || ideventAsInput.value == "") {
        alert("Remplissez toutes les cases !");
        return false;
    } else if (nbSaisi > nbMax) {
        alert("Le nombre saisi est supérieur à la limite !");
        return false;
    } else {
        alert("OK");
        return true;
    }
}

function passValidation() {
    if (
        nomInput.value == "" || dateInput.value == "" ||
         descriptionInput.value == "" || prix_billetInput.value == "" 
        || nb_placeInput.value == ""
        
    ) {
        alert("Remplissez toutes les cases !");
        return false;
    } 
    else
     {
        alert(" OK");
    }
}


  function validerDate() {
    var dateSaisie = document.getElementById("date").value;
    var dateActuelle = new Date();
    
    if (new Date(dateSaisie) <= dateActuelle) {
      alert("La date saisie doit être supérieure à la date actuelle !");
     // window.location.href = "http://localhost/projet/view/";

      return false;
    }
    return true;
  }

  var formulaire = document.getElementById("formDate");
  formulaire.addEventListener("submit", validerDate);

  function alertID() 
   { alert("L'id de l'événement n'existe pas dans la base de données. Essayer autre chose .");}

 
  