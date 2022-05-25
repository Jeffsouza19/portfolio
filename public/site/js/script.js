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

function showMore(){
    const item = document.querySelectorAll('.hidden');
    item.forEach(element => {
        element.classList.remove('hidden');
    })
    document.querySelector('.text--more').classList.add('hidden');
}

function showLess(){
    const item = document.querySelectorAll('.less');
    item.forEach(element => {
        element.classList.add('hidden');
    })
    document.querySelector('.text--less').classList.add('hidden');
    document.querySelector('.text--more').classList.remove('hidden');
}
