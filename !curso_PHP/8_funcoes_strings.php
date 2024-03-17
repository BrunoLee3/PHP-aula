<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $texto = 'curso completo de PHP';

        echo $texto;

        echo '<hr>';
        
        echo strtolower($texto); //caixa baixa
        echo '<hr>';
        echo strtoupper($texto); //caixa alta
        echo '<hr>';
        echo ucfirst($texto); //caixa alta primeira letra
        echo '<hr>';
        echo strlen($texto); //qtd caracteres
        echo '<hr>';
        echo str_replace('PHP', 'JavaScript', $texto); //substitui caracteres
        echo '<hr>';
        echo substr($texto, 0, 14) . '...' //recorta um pedaço do string
    ?>
</body>
</html>