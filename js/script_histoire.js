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


//Affichage de l'image

document.getElementsByClassName('button1')[0].addEventListener('click', showImg)

var imgRange1 = document.getElementsByClassName('photoRange1')[0];

function showImg(){
        imgRange1.classList.add('appear');
        imgRange1.classList.remove('disappear');
}

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

//Suivie des épisodes 

var rondBleu = document.querySelectorAll('.rondBleu')

isWatched = localStorage

var y = isWatched.getItem('watched');

rondBleu.forEach(rond =>{
    rond.addEventListener('click', () =>{
        if (confirm("Avez-vous vu cette épisode ?")) {
            rond.style.backgroundColor = "var(--bg-color-bleu)";
            y++

        } 
        else{
            if (rond.style.backgroundColor == "var(--bg-color-bleu)"){
                y--
            }
            rond.style.backgroundColor = "var(--color-dark-green)";
        }
        isWatched.setItem('watched', y)
    })  
})

//Suivie épisodes après reload
document.addEventListener('DOMContentLoaded', () => {
    for (var i = 0; i < isWatched.getItem('watched'); i++){
        document.getElementsByClassName('rondBleu')[i].style.backgroundColor = "var(--bg-color-bleu)"
    }
})


