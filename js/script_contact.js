//Animation du logo du menu burger

document.addEventListener('DOMContentLoaded', docLoad)

function docLoad() {
    document.getElementById('nav-icon').addEventListener('click', animeLogo)

    function animeLogo() {
        document.getElementById('nav-icon').classList.toggle('open');
    }
}

//aparition et fermeture du menu burger

var bouton = document.getElementById('nav-icon');

bouton.addEventListener('click', compteur);

var i = 0;

function compteur() {
    if (i % 2 == 0) {
        document.getElementById('fondBlanc').classList.toggle('visible');
        document.getElementById('fondBlanc').classList.remove('invisible');
        i++;
    } else {
        document.getElementById('fondBlanc').classList.toggle('invisible');
        document.getElementById('fondBlanc').classList.remove('visible');
        i++;
    }
}

//fleche pour remonter en haut de la page


$(window).scroll(function () {
    if ($(this).scrollTop() >= 50) {
        $('#return-to-top').fadeIn(200);
    } else {
        $('#return-to-top').fadeOut(200);
    }
});
$('#return-to-top').click(function () {
    $('body,html').animate({
        scrollTop: 0
    }, 300);
});

//lock du boutton submit

var submit = document.getElementsByClassName('button')[0]

submit.disabled = true;

//formulaire de contact 

var k = 0

//verif du prénom

var nameInput = document.getElementById('firstName')

var nameError0 = document.getElementsByClassName('verifFirstName')[0]
var nameError1 = document.getElementsByClassName('verifFirstName')[1]

var nameVerif;

nameInput.addEventListener('click', function () {
    if (nameInput.value != '') {
        nameError0.classList.remove('displayVisible')
        if (nameInput.value.match(/^[A-Za-z]+$/)) {
            nameError1.classList.remove('displayVisible')
            nameVerif = true
        }
    }
})

nameInput.onfocus = function () {
    nameVerif = false;
    nameError0.classList.add('displayVisible')
    nameError1.classList.add('displayVisible')
    nameInput.addEventListener("keyup", function () {
        if (nameInput.value != '') {
            nameError0.classList.remove('displayVisible')
            if (nameInput.value.match(/^[A-Za-z]+$/)) {
                nameError1.classList.remove('displayVisible')
                nameVerif = true
            }
        }

    })
}




nameInput.onblur = function () {
    nameError0.classList.remove('displayVisible')
    nameError1.classList.remove('displayVisible')
}

//verif du nom


var lastnameInput = document.getElementById('lastName')

var lastnameError0 = document.getElementsByClassName('verifLastName')[0]
var lastnameError1 = document.getElementsByClassName('verifLastName')[1]

var lastnameVerif;

lastnameInput.addEventListener('click', function () {
    if (lastnameInput.value != '') {
        lastnameError0.classList.remove('displayVisible')
        if (lastnameInput.value.match(/^[A-Za-z]+$/)) {
            lastnameError1.classList.remove('displayVisible')
            lastnameVerif = true;
        }
    }
})

lastnameInput.onfocus = function () {
    lastnameVerif = false;
    lastnameError0.classList.add('displayVisible')
    lastnameError1.classList.add('displayVisible')
    lastnameInput.addEventListener("keyup", function () {
        if (lastnameInput.value != '') {
            lastnameError0.classList.remove('displayVisible')
            if (lastnameInput.value.match(/^[A-Za-z]+$/)) {
                lastnameError1.classList.remove('displayVisible')
                lastnameVerif = true;
            }
        }

    })
}

lastnameInput.onblur = function () {
    lastnameError0.classList.remove('displayVisible')
    lastnameError1.classList.remove('displayVisible')
}

//verif mail

var mailInput = document.getElementById('email')

var mailError0 = document.getElementsByClassName('verifMail')[0]
var mailError1 = document.getElementsByClassName('verifMail')[1]

var mailVerif;

mailInput.addEventListener('click', function () {
    if (mailInput.value != '') {
        mailError0.classList.remove('displayVisible')
        if (mailInput.value.match(/[@]/) && mailInput.value.match(/[.]/)) {
            mailError1.classList.remove('displayVisible')
            mailVerif = true;
        }
    }
})

mailInput.onfocus = function () {
    mailVerif = false;
    mailError0.classList.add('displayVisible')
    mailError1.classList.add('displayVisible')
    mailInput.addEventListener("keyup", function () {
        if (mailInput.value != '') {
            mailError0.classList.remove('displayVisible')
            if (mailInput.value.match(/[@]/) && mailInput.value.match(/[.]/)) {
                mailError1.classList.remove('displayVisible')
                mailVerif = true;
            }
        }
    })
}
mailInput.onblur = function () {
    mailError0.classList.remove('displayVisible')
    mailError1.classList.remove('displayVisible')
}

//verif msg

var msgInput = document.getElementById('contenu')

var msgError0 = document.getElementsByClassName('verifMsg')[0]
var msgError1 = document.getElementsByClassName('verifMsg')[1]

var msgVerif;

msgInput.addEventListener('click', function () {
    if (msgInput.value != '') {
        msgError0.classList.remove('displayVisible')
        if (msgInput.value.length >= 2) {
            msgError1.classList.remove('displayVisible')
            msgVerif = true;
        }
    }
})

msgInput.onfocus = function () {
    msgVerif = false;
    msgError0.classList.add('displayVisible')
    msgError1.classList.add('displayVisible')
    msgInput.addEventListener("keyup", function () {
        if (msgInput.value != '') {
            msgError0.classList.remove('displayVisible')
            if (msgInput.value.length >= 2) {
                msgError1.classList.remove('displayVisible')
                msgVerif = true;
            }
        }
    })
}
msgInput.onblur = function () {
    msgError0.classList.remove('displayVisible')
    msgError1.classList.remove('displayVisible')
}

//Unlock du submit si les 4 conditions sont remplis

msgInput.addEventListener("keyup", function () {
    if (nameVerif && lastnameVerif && mailVerif && msgVerif) {
        submit.disabled = false;
    } else {
        submit.disabled = true;
    }
})

//dark theme bascule


document.getElementById('darkthemeButton').addEventListener('click', darktheme)



var body = document.getElementsByTagName('body')[0]

var texteButton = document.getElementById('darkthemeButton')


isDarkThemeOn = localStorage;

function darktheme() {
    if (isDarkThemeOn.getItem('darktheme') == 'on') {
        body.classList.toggle('dark');
        texteButton.innerHTML = "Mode lumineux"
        document.getElementsByClassName('fa-chevron-up')[0].style.color = "white";
        isDarkThemeOn.setItem('darktheme', 'off')
    } else {
        body.classList.toggle('dark');
        texteButton.innerHTML = "Mode sombre"
        document.getElementsByClassName('fa-chevron-up')[0].style.color = "black";
        isDarkThemeOn.setItem('darktheme', 'on')
    }

    console.log(isDarkThemeOn.getItem('darktheme'))
}

document.addEventListener('DOMContentLoaded', verifdarktheme)

function verifdarktheme() {
    console.log('oui')
    if (isDarkThemeOn.getItem('darktheme') == 'on') {
        body.classList.add('dark');
        texteButton.innerHTML = "Mode sombre"
        document.getElementsByClassName('fa-chevron-up')[0].style.color = "black";
    }
}