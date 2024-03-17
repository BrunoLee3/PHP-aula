<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // arrays sequenciais
        // $listaFrutas = array('banana', 'maçã', 'morango', 'uva');
        $listaFrutas = ['banana', 'maçã', 'morango', 'uva'];

        $listaFrutas[] = 'abacaxi';

        echo '<pre>';
            var_dump($listaFrutas);
        echo '<pre>';
        echo '<hr>';
        echo '<pre>';
            print_r($listaFrutas);
        echo '<pre>';

        echo '<hr>' . $listaFrutas[2] . '<hr>';

        //arrays associativos
        $listaNomes = ['a' => 'Jose', 'b' => 'Maria', 'c' => 'Roberto', 'd' => 'Carlos'];

    $listaNomes['e'] = 'Eduarda';

        echo '<pre>';
            var_dump($listaNomes);
        echo '<pre>'; 
    ?>
</body>
</html>