document.addEventListener('DOMContentLoaded',() =>{
    eventListeners();
})

function eventListeners(){
    mensaje()
}

function mensaje(){
    const mensaje = document.querySelector('.alert');
    const none = document.querySelector('.display-none')

    setInterval(() => {
        mensaje.classList.add('display-none')
    }, 3000);
    
}

