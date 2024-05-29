"use strict";

function controlarNumero(num){
    return !Number.isNaN(num);
}

function isNumeroTelefono(){
    let num = document.getElementById("telefono").value;

    if(controlarNumero(num)){
        let esLongitudCorrecta = 9;
        if(num.toString().length === esLongitudCorrecta){
            return true;
        }else{
            alert("El numero no tiene 9 cifras");
            return false;
        }
        
    } else {
        alert("El telefono no es un numero");
        return false;
    }
}

function generarAleatorio(min,max){
    return Math.floor((Math.random() * (max - min +1)) + min);
    }


//funciones para pintar img en orden aleatorio


const urls = [
    '',
    './img/coche1.jpg',
    './img/coche2.jpg',
    './img/coche3.jpg',
    './img/coche4.jpg',
    './img/coche5.jpg',
];

const textos = [
    "bmw z3m",
    "bmw e30",
    "bmw e36",
    "bmw m1",
    "bmw e38"
];

function pintarTexto() {
    const contenedor = document.getElementById("contenedorTextos");
    contenedor.innerHTML = "";

    let aleatorio = generarAleatorio(0, textos.length - 1);
    let desc = textos[aleatorio];

    let texto = document.createElement("h3");
    texto.innerText = desc;

    contenedor.appendChild(texto);
}


function pintarImagen() {
    const contenedor = document.getElementById("contenedorimg");
    contenedor.innerHTML = "";
    let num = 0;
    let aleatorio = generarAleatorio(0, urls.length - 1);

    while (num == aleatorio) {
        aleatorio = generarAleatorio(0, urls.length - 1);
    }
    num = aleatorio;
    let url = urls[aleatorio];
    let image = document.createElement("img");

    image.src = url;
    contenedor.appendChild(image);

    pintarTexto();
}

function generarAleatorio(min, max) {
    return Math.floor((Math.random() * (max - min + 1)) + min);
}
//Boton index: NuestrosProyectos

const botonTexto = document.getElementById('botonProyectos');

// Obtenemos el chiste
function chistesAPI(){
  fetch('https://api.chucknorris.io/jokes/random')
  .then(response => response.json())
  .then(json => {
      printChuck(json.value);
  });
  }
  
    // Pinta el chiste
  function printChuck(joke) {
  
    var chuckJokesDiv = document.getElementById("chuckJokes");
    chuckJokesDiv.innerHTML='';
    var paragraph = document.createElement("h4");
    var jokeText = document.createTextNode(joke);
    paragraph.appendChild(jokeText);
    chuckJokesDiv.appendChild(paragraph);
  }


  //pintar tu nombre
    const textInput = document.getElementById('textInput');
    const displayArea = document.getElementById('displayArea');
    
    textInput.addEventListener('keydown', (event) => {
      if (event.key === 'Enter') {
        const enteredText = "Bienvenido a Radikal MotorWorks, " + textInput.value + "!";
        displayArea.textContent = enteredText;
        textInput.value = "";
      }
    });
    
    const form = document.getElementById('myForm'); 
    form.addEventListener('submit', (event) => {
      event.preventDefault(); 
      const enteredText = textInput.value;
      displayArea.textContent = enteredText;
      textInput.value = "";
    });
