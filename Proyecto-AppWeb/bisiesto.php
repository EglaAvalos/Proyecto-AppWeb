<?php include("header.php")?>
<head>
    <title>AÑOS</title>
    <link rel="stylesheet" href="css/stylesa.css" type="text/css" />

    <script src="scripts/bisiesto.js"></script>
    <div class = "container">
        <h1> Año bisiesto y Primos </h1>
        <h2>Ingresa los años y/o números a calcular</h2>
        <h3>Seleccione una opción</h3>

        <input type="number" id= "valor1"></input>
        <input type="number" id= "valor2"></input>
        <button onclick= ejecutar()> Bisiesto</button>
        <button onclick= primos()> Primos</button>
        <button onclick= paresImpares()> Par o Impar</button>


        <div id = elemento></div>
        
    </div>
</head>
<?php include("footer.php")?>