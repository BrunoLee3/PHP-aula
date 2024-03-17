<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $listaItens = array('sofa', 'mesa', 'cadeira', 'fogao');

        echo '<pre>';
        print_r($listaItens);
        echo '</pre>';

        foreach($listaItens as $item){
            echo "$item ";

            if($item == 'mesa'){
                echo ' Compre uma mesa e ganhe 25% de desconto';
            }

            echo '<br>';
        }
    ?>
</body>
</html>