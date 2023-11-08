//logica de troca de imagens do carrossel

let carrossel = document.getElementsByClassName('carrossel')[0]
let count = 1
setInterval(function(){
    
    if(count == 0){
        count = 1
    }
    else if(count == 1){
        count = 2
    }
    else if(count == 2){
        count = 3
    }
    else if(count == 3){
        count = 4
    }
    else if(count == 4){
        count = 1
    }
carrossel.className = `carrossel img0${count}`
},5000)