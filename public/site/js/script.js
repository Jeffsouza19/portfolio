function typeWriter(element){
    const textoArray = element.innerHTML.split('');
    element.innerHTML = '';
    textoArray.forEach((letra, i) =>{
        setTimeout(() => {
            element.innerHTML += letra;
        }, 100 * i);
    });

}
const titulo = document.querySelector('.anima');
typeWriter(titulo);
