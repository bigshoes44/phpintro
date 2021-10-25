<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescentes';
$categorias[] = 'adulto';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome))
{
    echo 'O nome não pode ser vazio';
    return;
}

if(strlen($nome)<3)
{
    echo 'O nome deve conter mais que 3 caracteres';
    return;
}

if(strlen($nome)>40)
{
    echo ' O nome é muito extenso';
    return;
}

if(!is_numeric($idade))
{
    echo 'informe um número para a idade';
    return;
}

//var_dump($nome);
//var_dump($idade);
//return 0;

if($idade>=6 && $idade <=12)
{
    for($i =0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'infantil')
        echo 'O nadador ' , $nome , ' compente na categoria ' , $categorias[$i];
    }
    
}
else if($idade >= 13 && $idade<=18)
{
    for ($i =0; $i <=count($categorias); $i++)
    {
        if($categorias[$i] == 'adolescente')
        echo 'O nadador ', $nome , ' compente na catetogoria adolescente';
    }
    
}
else
{
    for ($i =0; $i <=count($categorias); $i++)
    {
        if($categorias[$i] == 'adulto')
        echo 'O nadador ', $nome , ' compete na categoria adulto ';
    }
}
