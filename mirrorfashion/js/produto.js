var inputTamanho = document.querySelector('[name=tamanho]');
var outputTamanho = document.querySelector('[name=valorTamanho]');

function mostrarTamanho() {
    outputTamanho.value = inputTamanho.value;
    outputTamanho.textContent = event.target.value;
}

inputTamanho.oninput = mostrarTamanho;
inputTamanho.onchange = mostrarTamanho;