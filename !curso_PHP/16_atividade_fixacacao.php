<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // echo rand(1, 60);

        $loteria = array();

        while(count($loteria) < 6){
            $num = rand(1, 60);

            if(!in_array($num, $loteria)){

                $loteria[] = $num;
            }
        }

        echo '<pre>';
        print_r($loteria);
        echo '</pre>';
        
    ?>
</body>
</html>