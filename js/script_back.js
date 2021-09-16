//dark theme bascule

var body = document.getElementsByTagName('body')[0]

isDarkThemeOn = localStorage;

document.addEventListener('DOMContentLoaded', verifdarktheme)

function verifdarktheme() {
    
    if (isDarkThemeOn.getItem('darktheme') == 'on') {
        body.classList.add('dark');
    }
}