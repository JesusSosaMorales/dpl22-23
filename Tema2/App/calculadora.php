<?php declare(strict_types=1)?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Calculadora en NATIVO</h1>
    <form name="form" action="" method="post">
        <div>
            <label for="Num1">Valor 1:</label>
            <input type="number" name="num1" value="0">
        </div>
        <div>
            <label for="Num2">Valor 2:</label>
            <input type="number" name="num2" value="0">
        </div>
        <div>
            <label for="operacion">Operacion:</label>
            <select name="operacion" id="">
    
                <option value="Suma" selected="true">Suma</option>
                <option value="Resta">Resta</option>
                <option value="Multiplicacion">Multiplicacion</option>
                <option value="Division">División</option>
            </select>
        </div>
        
        
        <img src="calculadora.png" alt="Imagen calculadora" >
        <button type="submit">Calcular</button>
    </form>
    <p>Solucion:</p>
    
    <?php
        if(isset($_POST['num1']) && isset($_POST['num2']) ){
            $n1 = $_POST['num1'];
            $n2 = $_POST['num2'];
            $operacion = $_POST['operacion'];
            if($n1 !="" && $n2 !=""){
                $resultado = operar($n1,$n2,$operacion);
                echo $resultado;
            }else{
                echo "Algún campo vacio, rellene todos los campos";
            }
            
        }



        function operar($num1, $num2, $operacion){
            switch ($operacion) {
                case 'Suma':
                    return ($num1+$num2);
                case 'Resta':
                    return ($num1-$num2);
                case 'Multiplicacion':
                    return ($num1*$num2);
                case 'Division':
                    if($num2!=0){
                        return ($num1/$num2);
                    }else{
                        return ("No se puede dividir entre 0");
                    }
                default:
                    break;
            }

        }
    ?>
    
</body>
</html>