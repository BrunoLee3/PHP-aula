<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // in array() -> true ou false para existencia do que esta sendo procurado
        // array_search() -> retorna o indicie do valor pesquisado, caso ele exista
        $listaFrutas = ['banana', 'maçã', 'morango', 'uva'];
    /*
        echo '<pre>';
        print_r($listaFrutas);
        echo '</pre>';
        
        //true -> 1
        //false -> vazio
        // $existe = in_array('morango', $listaFrutas);
    
        $existe = array_search('abacaxi', $listaFrutas);
        //retorno indicie ou null
        

        if($existe != null){
            echo 'o valor existe no array';
        }else{
            echo 'o valor não existe no array';
        }
    */
        $listaCoisas = [
            'frutas' => $listaFrutas,
            'pessoas' => ['João', 'Maria']
        ];

        echo '<pre>';
        print_r($listaCoisas);
        echo '</pre>';

        echo in_array('melancia', $listaCoisas['frutas'])
    ?>
</body>
</html>