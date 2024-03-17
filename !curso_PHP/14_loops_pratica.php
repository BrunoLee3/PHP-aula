<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $registros = array(
            array('titulo' => 'titulo 1', 'conteudo' => 'conteudo 1'),
            array('titulo' => 'titulo 2', 'conteudo' => 'conteudo 2'),
            array('titulo' => 'titulo 3', 'conteudo' => 'conteudo 3'),
            array('titulo' => 'titulo 4', 'conteudo' => 'conteudo 4')
        );

        echo '<pre>';
        print_r($registros);
        echo '</pre>';

        echo '<br><br><br>';
        
        $idx = 0;

        while($idx < count($registros)){

            echo '<h3>' . $registros[$idx]['titulo'] . '</h3>'; 
            echo '<p>' . $registros[$idx]['conteudo'] . '</p>'; 
            echo "<hr>";

            $idx++;
        }
    ?>
</body>
</html>