<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //is_array() -> verifica se é array
        /*
        $array = array();
        $retorno = is_array($array);

        if($retorno){
            echo 'sim, é um array';
        }else{
            echo 'nao, nao é um array';
        }
        */

        //array_keys() -> retorna os indicies
        /*
        $array = [1 => 'a', 7 => 'b', 18 => 'c'];
        echo '<pre>';
        print_r($array);
        echo '</pre>';

        $chaves_array = array_keys($array);
        echo '<pre>';
        print_r($chaves_array);
        echo '</pre>';
        */

        //sort() -> arranja elementos em ordem alfabetica
        /*
        $array = array('notebook', 'teclado', 'mouse', 'fonte');
        echo '<pre>';
        print_r($array);
        echo '</pre>';

        sort($array); //true ou false
        echo '<pre>';
        print_r($array);
        echo '</pre>';
        */

        //asort() -> arranja elementos em ordem alfabetica, presenvando os indicies
        /*
        $array = array('notebook', 'teclado', 'mouse', 'fonte');
        echo '<pre>';
        print_r($array);
        echo '</pre>';

        asort($array); //true ou false
        echo '<pre>';
        print_r($array);
        echo '</pre>';
        */

        //count() -> conta a quantidade elementos
        /*
        $array = array('notebook', 'teclado', 'mouse', 'fonte');
        echo '<pre>';
        print_r($array);
        echo count($array);
        echo '</pre>';
        */

        //array_merge() -> funde um ou mais arrays
        /*
        $array1 = ['osx', 'windows'];
        $array2 = array('linux');
        $array3 = ['Solaris'];

        $novo_array = array_merge($array1, $array2, $array3);
        echo '<pre>';
        print_r($novo_array);
        echo '</pre>';
        */

        //explode() -> divide uma string baseada em um delimitador
        /*
        $string = '26/04/2024';
        $array_retorno = explode('/', $string);
        echo '<pre>';
        echo $string;
        print_r($array_retorno);
        echo $array_retorno[2] . '-' . $array_retorno[1] . '-' . $array_retorno[0]; 
        echo '</pre>';
        */

        //implode() -> junta elementos de um array em um string
        $array = ['a', 'b', 'x', 'y'];
        $string_retorno = implode(', ', $array);
        echo $string_retorno;

    ?>
</body>
</html>