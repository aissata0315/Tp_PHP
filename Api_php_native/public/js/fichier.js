
// Pour selectionner le type de client(particulier ou entreprise)

var radios1 = document.querySelectorAll('.typeClient');
for (i = 0; i < radios1.length; i++){
    radios1[i].addEventListener('click',function(){
        var id = this.getAttribute('id');
        console.log(id);
        var formTypeClient = document.querySelector('.'+ id);
        var hiddens = document.querySelectorAll('.hidden');
        for (i = 0; i < hiddens.length; i++) {
            hiddens[i].style.display = 'none';
        }
        formTypeClient.style.display = 'block';
        var hidden1 = document.querySelector('.hidden1');
        hidden1.style.display = 'none';
    })
}

// Pour selectionner le type de compte(courant, bloqué, epargne)


/* Pour afficher le formulaire de creation clients en fonction du choix de type de client(salarier ou non salarier)*/
var radios = document.querySelectorAll('.type_client');
for (i = 0; i < radios.length; i++) {
    radios[i].addEventListener('click', function () {
        var id = this.getAttribute('id');
        console.log(id);
        var divTypeClient= document.querySelector('.' + id);
        var champsClientSalarier= document.querySelector('.salarier');
        console.log(champsClientSalarier);
        champsClientSalarier.style.display = 'none';
        var champsClientnonsalarier = document.querySelector('.non_salarier');
        champsClientnonsalarier.style.display = 'none';
        divTypeClient.style.display = 'block';

    });
}


/*verification input entreprise */
document.forms['form3'].addEventListener('submit', function(e)
{

    var erreur;
    /* selectionner et parcourir input*/
    var inputs = document.querySelectorAll('.ClientEntreprise input ');
    console.log(inputs);
    for (i=0;i < inputs.length; i++){
        if (!inputs[i].value){
            erreur = 'Veuillez renseigez tous les champs!';
            break;

        }
    }
    if (erreur) {
        document.getElementById("erreur").innerHTML = erreur;
        return false;

    } else{

        document.getElementById("erreur").innerHTML = "";
        alert('Client Enregistrer!');
        /* apres soumission on vide les inputs*/
        var inputs = document.querySelectorAll('.ClientEntreprise input');
        console.log(inputs);
        /*for (i=0;i < inputs.length; i++){
            inputs[i].value = "";
        }*/

    }

});
/*verification input formulaires client particulier*/
document.forms['form2'].addEventListener('submit', function(e)
{


    var erreur;
    /*recuperer le radio choisi*/
    var choix = document.querySelectorAll('.type_client');
    var typeClientSelectionnee;
    for (i=0; i< choix.length; i++){
        if ( choix[i].checked == true)
        {
            typeClientSelectionnee = choix[i].getAttribute('id');
            break;
        }

    }
    /* recuperer les inputs correspondant aux type de compte choisi*/
    var inputs = document.querySelectorAll('.'+typeClientSelectionnee+' input');
    console.log(inputs);
    for (i=0;i < inputs.length; i++){
        if (!inputs[i].value){
            erreur = 'Veuillez renseigez tous les champs!';
            break;
        }
    }
    if (erreur) {
        document.getElementById("erreur").innerHTML = erreur;
        return false;

    } else{

        document.getElementById("erreur").innerHTML = "";
        alert('Client Enregistrer!');
        /* apres soumission on vide les inputs*/
        var inputs = document.querySelectorAll('.'+typeClientSelectionnee+' input');
        console.log(inputs);
        /*for (i=0;i < inputs.length; i++){
            inputs[i].value = "";
        }*/

    }
} );

// Les fonctions de verifications de champs

function surligne(champ, erreur)
{
    if(erreur){

        champ.style.backgroundColor = "#fba";

    }

    else
        champ.style.backgroundColor = "";
}

function verifMail(champ)
{
    var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
    if(!regex.test(champ.value))
    {
        surligne(champ, true);
        return false;
    }
    else
    {
        surligne(champ, false);
        return true;
    }
}

function verifTEL(champ)
{
    var regex = /^(77|78|70|76)[0-9]{7}$/;

    if (!regex.test (champ.value))
    {
        surligne(champ, true);
        return false;
    }
    else
    {
        return(false);
    }
}
function verifCNI(champ)
{
    if(champ.value.length < 13 || champ.value.length > 13)
    {
        surligne(champ, true);
        return false;
    }
    else
    {
        surligne(champ, false);
        return true;
    }
}




// choix chekhbox avec jquery
/*$(document).ready(function(){

    $('.typeCompte').click(function() {
        var id = $(this).attr('id');
        $('.hidden').hide();
        $('.' + id).show();
    });

});*/


