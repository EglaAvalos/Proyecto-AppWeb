function ejecutar (){
    var valor1 = document.getElementById("valor1").value;
    var valor2 = document.getElementById("valor2").value;
    var div_elemento = document.getElementById("elemento");

    div_elemento.innerHTML = "";
    div_elemento.innerHTML += `<p><strong>Nota:</strong> Los años bisiestos están en <span style="color: blue;">azul</span> 
    y los números que NO son bisiestos en <span style="color: purple;">morado</span>.</p>`;

    for(let i = valor1; i<=valor2 ; i++){
        if(i%4==0){
        div_elemento.innerHTML += '<p style="color: blue";>' + i + '</p>';

        }else{
        div_elemento.innerHTML += '<p style = "color:purple";>' + i + '</p>';
        }
    }
}

function primos (){
    var valor1 = document.getElementById("valor1").value;
    var valor2 = document.getElementById("valor2").value;
    var div_elemento = document.getElementById("elemento");

    div_elemento.innerHTML = "";
    div_elemento.innerHTML += `<p><strong>Nota:</strong> Los números/años primos están en <span style="color: black;">negro</span> 
    y los números que NO son primos en <span style="color: yellow;">amarillo</span>.</p>`;

    for (let i = valor1; i <= valor2; i++) {
        function siPrimo(num) {
            if (num <= 1) return false;
            if (num === 2) return true;
            for (let j = 2; j <= Math.sqrt(num); j++) {
                if (num % j === 0) return false;
            }
            return true;
        }
        if (siPrimo(i)) {
            div_elemento.innerHTML += '<p style="color: black;">' + i + '</p>';
        } else {
            div_elemento.innerHTML += '<p style="color: yellow;">' + i + '</p>';
        }
    }
}

function paresImpares() {
    var valor1 = parseInt(document.getElementById("valor1").value);
    var valor2 = parseInt(document.getElementById("valor2").value);
    var div_elemento = document.getElementById("elemento");

    div_elemento.innerHTML = "";

    div_elemento.innerHTML += `<p><strong>Nota:</strong> Los números/años pares están en <span style="color: red;">rojo</span> 
    y los números impares en <span style="color: white;">blanco</span>.</p>`;
    for (let i = valor1; i <= valor2; i++) {
        if (i % 2 === 0) {
            div_elemento.innerHTML += '<p style="color: red;">' + i + '</p>';
        } else {
            div_elemento.innerHTML += '<p style="color: white;">' + i + '</p>';
        }
    }
}

