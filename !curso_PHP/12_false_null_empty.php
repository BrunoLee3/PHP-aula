<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //false (true/false) - tipo variavel booleano
        //null e empty - valores especiais

        $funcionario1 = null;
        $funcionario2 = '';
        $funcionario3 = false;

        //valores null
        if(is_null($funcionario1)){
            echo 'sim, a variavel funcionario1 é null';
        }else{
            echo 'não, a variavel funcionario1 nao é null';
        }

        echo '<br>';

        if(is_null($funcionario2)){
            echo 'sim, a variavel funcionario2 é null';
        }else{
            echo 'não, a variavel funcionario2 nao é null';
        }

        echo '<br>';

        if(is_null($funcionario3)){
            echo 'sim, a variavel funcionario3 é null';
        }else{
            echo 'não, a variavel funcionario3 nao é null';
        }

        echo '<hr>';

        //valores empty
        if(empty($funcionario1)){
            echo 'sim, a variavel funcionario1 é vazia';
        }else{
            echo 'não, a variavel funcionario1 nao é vazia';
        }

        echo '<br>';

        if(empty($funcionario2)){
            echo 'sim, a variavel funcionario2 é vazia';
        }else{
            echo 'não, a variavel funcionario2 nao é vazia';
        }

        echo '<br>';

        if(empty($funcionario3)){
            echo 'sim, a variavel funcionario3 é vazia';
        }else{
            echo 'não, a variavel funcionario3 nao é vazia';
        }
    ?>
</body>
</html>