<?php
//tenha uma logica
try {
    //tenha uma logica onde possa ocorrer um potencial erro(exceção)
    echo '<h3>try</h3>';

    //forçando um erro
    // $sql = 'Select * from clientes';
    // mysql_query($sql);

    if(!file_exists('require_arquvivo_a.php')){
        throw new Exception('O arquivo em questão deveria estar disponivel as ' . date('d/m/Y H:i:s') . ' mas não estava. Vamos seguir mesmo assim.');
        // throw new Error('O arquivo em questão deveria estar disponivel as ' . date('d/m/Y H:i:s') . ' mas não estava. Vamos seguir mesmo assim.');

    }

}catch(Error $erro){

    echo '<h3>catch erro</h3>';
    echo $erro;

}catch(Exception $erro){
    echo '<h3>catch exception</h3>';
    echo $erro;
}

finally{ //essa parte é opcional

    echo '<h3>finally</h3>';

}

// try{

// }