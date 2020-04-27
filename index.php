<?php

$data = '2020-12-31';

// formataData($data);

echo "A data no padr&atilde;o Americano: $data <br />";

echo "A data formatada: " . formataData($data);


function formataData( $entrada ){
    $retorno = explode('-', $entrada);
    $retorno = array_reverse($retorno);
    $retorno = implode('/', $retorno);
    //var_dump($retorno);
    return $retorno;
}
?>