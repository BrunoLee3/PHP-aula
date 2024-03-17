<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $funcionarios = array(
            ['Nome' => 'Joao', 'Salario' => 2500],
            ['Nome' => 'Maria', 'Salario' => 3000],
            ['Nome' => 'Julia', 'Salario' => 3300],

        );

        echo '<pre>';
        print_r($funcionarios);
        echo '</pre>';

        foreach($funcionarios as $idx => $funcinario){
            foreach($funcinario as $idx2 => $valor){
                echo "$idx2 - $valor <br>";
            }
            echo '<hr>';
        }
    ?>
</body>
</html>