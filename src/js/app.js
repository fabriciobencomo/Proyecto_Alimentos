document.addEventListener('DOMContentLoaded',() =>{
    eventListeners();
})

function eventListeners(){
    slider();
}

window.sr = ScrollReveal();

function slider(){
    let btn = document.querySelectorAll('.btn');
    let slider = document.querySelectorAll('.user-text')

    btn[0].addEventListener('click', ()=>{
        console.log("hola")
    })

    btn[0].onclick = function(){
        
    }
    btn[1].onclick = function(){
        slider[1].style.transform = "translate(-630px, -180px)"
        slider[0].style.display= "none"
    }
    btn[2].onclick = function(){
        slider[2].style.transform = "translate(-1255px, -180px)"
        slider[1].style.display = "none"
    }
}

