<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $salario = 5000;

        function calculaImposto($sal){
            if($sal <= 1903.08){
                $imposto = 0;
            }
            else if($sal >= 1903.99 && $sal <= 2826.65){
                $imposto = $sal*0.075;
            }
            else if($sal >= 2826.66 && $sal <= 3751.05){
                 $imposto = $sal*0.15;
            }
            else if($sal >= 3751.06 && $sal <= 4664.68){
                 $imposto = $sal*0.225;
            }
            else if($sal >= 4664.69){
                 $imposto = $sal*0.275;
            }
            return $imposto;
        }

        echo calculaImposto($salario);
    ?>
</body>
</html>