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


var j = 0 

document.getElementById('arrowRight').addEventListener('click', changeImageDroite)

var photo = document.getElementById('photoCrew')

function changeImageDroite(){
    j++;
    if(j == 0){
        photo.style.backgroundImage="url(image/crewmate1.jpg)";
    }
    else if(j == 1){
        photo.style.backgroundImage="url(image/crewmate2.jpg)";
    }
    else if(j == 2){
        photo.style.backgroundImage="url(image/crewmate3.jpg)";
    }
    else if(j > 2 ){
        j = 0;
        photo.style.backgroundImage="url(image/crewmate1.jpg)";
    }
}

//changement d'image en appuyant sur la fleche de gauche

document.getElementById('arrowLeft').addEventListener('click', changeImageLeft)

function changeImageLeft(){
    j--;
    if(j == 0){
        photo.style.backgroundImage="url(image/crewmate1.jpg)";
    }
    else if(j == 1){
        photo.style.backgroundImage="url(image/crewmate2.jpg)";
    }
    else if(j == 2){
        photo.style.backgroundImage="url(image/crewmate3.jpg)";
    }
    else if(j == -1 ){
        j = 2;
        photo.style.backgroundImage="url(image/crewmate3.jpg)";
    }
}

//changement des nom en appuyant sur la fleche de droite


document.getElementById('arrowRight').addEventListener('click', changeNomDroite)

var nom = document.getElementById('nomCrew')

function changeNomDroite(){
    if(j == 0){
        nom.innerHTML="Pedro Pascal";
    }
    else if(j == 1){
        nom.innerHTML="Gina Carano";
    }
    else if(j == 2){
        nom.innerHTML="Carl Weathers";
    }
    else if(j > 2 ){
        j = 0;
        nom.innerHTML="Pedro Pascal";;
    }
}

//changement des nom en appuyant sur la fleche de gauche


document.getElementById('arrowLeft').addEventListener('click', changeNomGauche)

function changeNomGauche(){
    if(j == 0){
        nom.innerHTML="Pedro Pascal";
    }
    else if(j == 1){
        nom.innerHTML="Gina Carano";
    }
    else if(j == 2){
        nom.innerHTML="Carl Weathers";
    }
    else if(j == -1 ){
        j = 2;
        nom.innerHTML="Carl Weathers";;
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
        document.getElementById('arrowLeft').src = "image/arrow_left.png"
        document.getElementById('arrowRight').src = "image/arrow_right.png" 
        isDarkThemeOn.setItem('darktheme', 'off')
    }
    else{
        body.classList.toggle('dark');
        texteButton.innerHTML="Mode sombre"
        document.getElementsByClassName('fa-chevron-up')[0].style.color = "black";
        document.getElementById('arrowLeft').src = "image/arrow_left_white.png" 
        document.getElementById('arrowRight').src = "image/arrow_right_white.png"
        isDarkThemeOn.setItem('darktheme', 'on')
    }

}

document.addEventListener('DOMContentLoaded', verifdarktheme)

function verifdarktheme(){
    if (isDarkThemeOn.getItem('darktheme') == 'on'){
        body.classList.add('dark');
        texteButton.innerHTML="Mode sombre"
        document.getElementsByClassName('fa-chevron-up')[0].style.color = "black";
        document.getElementById('arrowLeft').src = "image/arrow_left_white.png" 
        document.getElementById('arrowRight').src = "image/arrow_right_white.png"
    }
}

//timeline interative

var boutonT = document.querySelectorAll('.texteBox')

boutonT.forEach(text =>{
    text.addEventListener('mouseover', function(){
        var enfantText = Array.from(text.children)
        enfantText[0].classList.add('jtevoi')
    })
})

