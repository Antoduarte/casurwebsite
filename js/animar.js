

window.addEventListener('scroll', function(){
    var animado = document.querySelectorAll(".animar");
    
    for (var i=0; i < animado.length; i++){
       
        var altura = window.innerHeight/1.8
        var distancia = animado[i].getBoundingClientRect().top;
       
        if(distancia <= altura){
            animado[i].style.opacity = 1;
            animado[i].classList.add("mostrarArriva");
        }
    }
} 
)