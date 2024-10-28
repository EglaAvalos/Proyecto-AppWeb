<?php include("header.php")?>
<script src="scripts/ejemplo.js"></script>
<div class="container">
    <h1>Ejemplo de Javascript</h1>
    <h2>Suma</h2>
    <input type = "number" id="valor1"></input>
    <input type = "number" id="valor2"></input>  
    <button onclick= sumar()> Sumar </button>
    <p id="resultado">Esperando valores...</p>

    <h2>Resta</h2>  
    <input type = "number" id="valor"></input>
    <input type = "number" id="valor3"></input>
    <button onclick= restar()> Restar </button>
    <p id="resultado1">Esperando valores...</p>
    
    <h2>Multiplicar</h2>
    <input type = "number" id="valor0"></input>
    <input type = "number" id="valor4"></input> 
    <button onclick= multiplicar()> Multiplicar </button>
    <p id="resultado2">Esperando valores...</p>

</div>
<?php include("footer.php")?>