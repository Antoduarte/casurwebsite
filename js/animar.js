

window.addEventListener('scroll', function(){
    let animado = document.querySelectorAll(".animar");
    
    for (let i=0; i < animado.length; i++){
       
        let altura = window.innerHeight/1.8
        let distancia = animado[i].getBoundingClientRect().top;
       
        if(distancia <= altura){
            animado[i].style.opacity = 1;
            animado[i].classList.add("mostrarArriva");
        }
    }
} 
)
