<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $listaCoisas = [];

        $listaCoisas['frutas'] = [1 => 'banana', 2 => 'maçã', 3 => 'uva'];
        $listaCoisas['nomes'] = ['João', 'José', 'Maria'];

        echo '<pre>';
        print_r($listaCoisas);
        echo '<pre>';

        echo '<hr>';
        echo $listaCoisas['frutas'][2];
    ?>
</body>
</html>