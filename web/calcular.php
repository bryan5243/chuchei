<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<?php
                                            if (isset($_POST["calcular"])) {
                                                $n1 = $_POST["a"];
                                                $n2 = $_POST["b"];
                                                $operacion = $_POST['operacion'];
                                                function operaciones($n1, $n2, $operacion)
                                                {

                                                    $resultado = 0;
                                                    if ($operacion == "Sumar") {
                                                        $resultado = $n1 + $n2;
                                                    } else if ($operacion == "Restar") {
                                                        $resultado = $n1 - $n2;
                                                    } else if ($operacion == "Multiplicar") {
                                                        $resultado = $n1 * $n2;
                                                    } else if ($operacion == "Division") {
                                                        $resultado = $n1 / $n2;
                                                    }
                                                    return $resultado;
                                                }
                                                $r = operaciones($n1, $n2, $operacion);

                                                echo "Resultado: " . $r;
                                            }
                                            ?>, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>