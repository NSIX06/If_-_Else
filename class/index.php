<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="">
    <label for="valor">Valor da conta</label>
    <input type="text" name = "valor">
    <input type="submit" value = "Verificar">
</form>

<?php

    if(isset($_GET["valor"]))
    {

        $valor = $_GET["valor"];

        if($valor > 150){

            echo "<p>Você está gastando muito!!!</p>"
        }
        else{

            echo "<p>Seu gasto está normal :D</p>"
        }



    }




?>
    
</body>
</html>