//Animation du logo du menu burger

document.addEventListener('DOMContentLoaded', docLoad)

function docLoad(){
    document.getElementById('nav-icon').addEventListener('click', animeLogo)
    function animeLogo(){
        document.getElementById('nav-icon').classList.toggle('open');
    }
}

//aparition et fermeture du menu burger

var bouton = document.getElementById('nav-icon');

bouton.addEventListener('click',compteur);

var i = 0;

function compteur(){
    if (i % 2 == 0){
        document.getElementById('fondBlanc').classList.toggle('visible');
        document.getElementById('fondBlanc').classList.remove('invisible');
        i++;
    }
    else{
        document.getElementById('fondBlanc').classList.toggle('invisible');
        document.getElementById('fondBlanc').classList.remove('visible');
        i++;
    }
}

//fleche pour remonter en haut de la page


$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        
        $('#return-to-top').fadeIn(200);    
    } else {
        $('#return-to-top').fadeOut(200);   
    }
});
$('#return-to-top').click(function() {      
    $('body,html').animate({
        scrollTop : 0                       
    }, 300);
});

//dark theme bascule


document.getElementById('darkthemeButton').addEventListener('click', darktheme)



var body = document.getElementsByTagName('body')[0]

var texteButton = document.getElementById('darkthemeButton')


isDarkThemeOn = localStorage;

function darktheme(){
    if (isDarkThemeOn.getItem('darktheme') == 'on'){
        body.classList.toggle('dark');
        texteButton.innerHTML="Mode lumineux"
        document.getElementsByClassName('fa-chevron-up')[0].style.color = "white";
        isDarkThemeOn.setItem('darktheme', 'off')
    }
    else{
        body.classList.toggle('dark');
        texteButton.innerHTML="Mode sombre"
        document.getElementsByClassName('fa-chevron-up')[0].style.color = "black";
        isDarkThemeOn.setItem('darktheme', 'on')
    }

    console.log(isDarkThemeOn.getItem('darktheme'))
}

document.addEventListener('DOMContentLoaded', verifdarktheme)

function verifdarktheme(){
    if (isDarkThemeOn.getItem('darktheme') == 'on'){
        body.classList.add('dark');
        texteButton.innerHTML="Mode sombre"
        document.getElementsByClassName('fa-chevron-up')[0].style.color = "black";
    }
}



//filtre photo tournage only js 

var boutonTournage = document.getElementsByClassName('button1')[0]

boutonTournage.addEventListener('click', visTournage)

function visTournage(){
    var photoSerie = document.getElementsByClassName('serie')
    var photoSerieArray = Array.from(photoSerie);
    photoSerieArray.forEach(function(item){
        item.classList.toggle('displayNone')
    })
}

//filtre photo serie only js 

var boutonSerie = document.getElementsByClassName('button1')[1]

boutonSerie.addEventListener('click', visSerie)

function visSerie(){
    var photoTournage = document.getElementsByClassName('tournage')
    var photoTournageArray = Array.from(photoTournage);
    photoTournageArray.forEach(function(item){
        item.classList.toggle('displayNone')
    })
}

//affichage de toutes les photos

var boutonAll = document.getElementsByClassName('button1')[2]

boutonAll.addEventListener('click', addVisibility)

function addVisibility(){
    var photoTournage = document.getElementsByClassName('tournage')
    var photoTournageArray = Array.from(photoTournage);
    photoTournageArray.forEach(function(item){
        item.classList.remove('displayNone')
    })
    var photoSerie = document.getElementsByClassName('serie')
    var photoSerieArray = Array.from(photoSerie);
    photoSerieArray.forEach(function(item){
        item.classList.remove('displayNone')
    })
}


//remettre l'affichage de photo serie quand tournage est activé et qu'on switch

var boutonSerie2 = document.getElementsByClassName('button1')[1]

boutonSerie2.addEventListener('click', addVisSerie)

function addVisSerie(){
    var photoSerie = document.getElementsByClassName('serie')
    if(document.getElementsByClassName('serie')[0].classList.contains('displayNone') == true)
    var photoSerieArray = Array.from(photoSerie)
    photoSerieArray.forEach(function(item){
        item.classList.remove('displayNone')
    })
}

//remettre l'affichage de photo tournage quand serie est activé et qu'on switch

var boutonTournage2 = document.getElementsByClassName('button1')[0]

boutonTournage2.addEventListener('click', addVisTournage)

function addVisTournage(){
    var photoTournage = document.getElementsByClassName('tournage')
    var photoTournageArray = Array.from(photoTournage);
    if(document.getElementsByClassName('tournage')[0].classList.contains('displayNone') == true)
    photoTournageArray.forEach(function(item){
        item.classList.remove('displayNone')
    })
}



//lightbox

var fondNoir = document.getElementsByClassName('fondNoir')[0]

fondNoir.addEventListener('click', removePhoto)
    
function removePhoto(){
    fondNoir.classList.remove('displayFlex')
}

var images = document.querySelectorAll('.tournage, .serie')
var photoGrand = document.getElementsByClassName('photoGrand')[0]

images.forEach(image =>{
    image.addEventListener('click', () => {
        photoGrand.style.backgroundImage = image.getAttribute("data-url")
        fondNoir.classList.add('displayFlex')
    })
})

//faire apparaitre le formulaire pour les com

var bouttonCom = document.getElementsByClassName('button1')[3]
var formCom = document.getElementsByClassName('formulaireCom')[0]

bouttonCom.addEventListener('click', function(){
    formCom.classList.toggle('displayNone')
})

//verif form com

//lock du boutton submit

var submit = document.getElementsByClassName('button')[0]

submit.disabled = true;

//verif du pseudo

var nameInput = document.getElementById('firstName')

var nameError0 = document.getElementsByClassName('verifFirstName')[0]

var nameVerif;

nameInput.addEventListener('click', function(){
    if(nameInput.value != ''){
        nameError0.classList.remove('displayVisible')
    }
})

nameInput.onfocus = function(){
    nameVerif = false;
    nameError0.classList.add('displayVisible')
    nameInput.addEventListener("keyup", function(){
        if(nameInput.value != ''){
            nameError0.classList.remove('displayVisible')
            nameVerif = true;
        }
    })
}

nameInput.onblur = function(){
    nameError0.classList.remove('displayVisible')
}

//verif message

var msgInput = document.getElementById('contenu')

var msgError0 = document.getElementsByClassName('verifMsg')[0]
var msgError1 = document.getElementsByClassName('verifMsg')[1]

var msgVerif;

msgInput.addEventListener('click', function(){
    if(msgInput.value != ''){
        msgError0.classList.remove('displayVisible')
        if(msgInput.value.length >= 2){
            msgError1.classList.remove('displayVisible')
            msgVerif = true;
        }
    }
})

msgInput.onfocus = function(){
    msgVerif = false;
    msgError0.classList.add('displayVisible')
    msgError1.classList.add('displayVisible')
    msgInput.addEventListener("keyup", function(){
        if(msgInput.value != ''){
            msgError0.classList.remove('displayVisible')
            if(msgInput.value.length >= 2){
                msgError1.classList.remove('displayVisible')
                msgVerif = true;
            }
        }
    })
}
msgInput.onblur = function(){
    msgError0.classList.remove('displayVisible')
    msgError1.classList.remove('displayVisible')  
}


//Unlock du submit si les 2 conditions sont remplis

msgInput.addEventListener("keyup", function(){
    if(nameVerif && msgVerif){
        submit.disabled = false;
    }
    else{
        submit.disabled = true;
    }
})

//Com afficher le delete on hover

var coms = document.querySelectorAll('.commentaire')

coms.forEach(com =>{
    com.addEventListener('mouseover', function(){
        var enfantCom = Array.from(com.children)
        var removeCom = enfantCom[1].children
        var removeCom = removeCom[0]
        removeCom.classList.toggle('displayNone')
    })
    com.addEventListener('mouseout', function(){
        var enfantCom = Array.from(com.children)
        var removeCom = enfantCom[1].children
        var removeCom = removeCom[0]
        removeCom.classList.toggle('displayNone')
    })
})