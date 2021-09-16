//Parallax en fonction de la position de la souris

document.addEventListener('mousemove', parallax);

function parallax(e){
    document.querySelectorAll(".darth-vader").forEach(function(move){
        newX = e.clientX /100
        if (newX => 8.75){
        var x = -((e.clientX ) / 200);
        var y = -((e.clientY ) / 200);

        move.style.transform = "translateX(" + x + "px) translateY(" + y + "px)";
        }
        else{
        var x = -((e.clientX ) / 200)
        var y = -((e.clientY ) / 200)

        move.style.transform = "translateX(" + -x + "px) translateY(" + y + "px)"; 
        }
    })
}
