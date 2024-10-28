//console.log("Hellow, World")
function sumar(){
    var valor1= document.getElementById("valor1").value;
    var valor2= document.getElementById("valor2").value;
 
    var result = parseFloat(valor1)+parseFloat(valor2);
    document.getElementById("resultado").innerText = "El resultado de la suma es: "+result;

 }

 function restar(){
    var valor= document.getElementById("valor").value;
    var valor3= document.getElementById("valor3").value;

    var result1 = parseFloat(valor)-parseFloat(valor3);
    document.getElementById("resultado1").innerText = "El resultado de la resta es: "+result1;
 }

 function multiplicar(){
    var valor0= document.getElementById("valor0").value;
    var valor4= document.getElementById("valor4").value;

    var result2 = parseFloat(valor0)*parseFloat(valor4);
    document.getElementById("resultado2").innerText = "El resultado de la multiplicación es: "+result2;
 }

