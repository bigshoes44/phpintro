<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescentes';
$categorias[] = 'adulto';

$nome = 'Eduardo';
$idade = 18;

//var_dump($nome);
//var_dump($idade);

if($idade>=6 && $idade <=12)
{
    echo 'infantil';
}
else if($idade >= 13 && $idade<=18)
{
    echo '<h1>adolescente</h1>';
}
else
{
     echo 'adulto';
}
