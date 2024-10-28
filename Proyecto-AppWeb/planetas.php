<!DOCTYPE html>
<html>
<head>
    <title>Planetas</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css" />
</head>
<body>
    <h1>Planetas</h1>

    <p>
    <?php
        include("php/entities/planetas.php");
        $registros = getAllPlanetas();
        if (count($registros) > 0) {
            foreach ($registros as $row) {
                $url = str_replace('C:\\xampp\\htdocs', '', $row->imgs);                
                echo "<p>". $row->nombre. "</p>";   
                echo "<img class='planetas' src='". $url . "' alt='" . $row->nombre . "' />";
            }
        } 
    ?>
    </p>
</body>
</html>
