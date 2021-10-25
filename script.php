<?php

session_start();

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescentes';
$categorias[] = 'adulto';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome))
{
    $_SESSION['mensagem de erro'] = 'O nome não pode ser vazio, por favor preencha novamente';
    header('location: index.php');
    return;
}

else if(strlen($nome)<=3)
{
    $_SESSION['mensagem de erro'] = 'O nome deve conter mais que 3 caracteres';
    header('location: index.php');
    return;
}

else if(strlen($nome)>40)
{
    $_SESSION['mensagem de erro'] = ' O nome é muito extenso';
    header('location: index.php');
    return;
}

else if(!is_numeric($idade))
{
    $_SESSION['mensagem de erro'] ='informe um número para a idade';
    header('location: index.php');
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
        {
            $_SESSION['mensagem de sucesso'] =  "O nadador "  $nome  " compente na categoria "  $categorias[$i];
            header('location: index.php');
            return;
        }
        
    }
    
}
else if($idade >= 13 && $idade<=18)
{
    for ($i =0; $i <=count($categorias); $i++)
    {
        if($categorias[$i] == 'adolescente')
        {
            $_SESSION['mensagem de sucesso'] ="O nadador " $nome   " compente na catetogoria adolescente";
            header('location: index.php');
            return;
        }
        
    }
    
}
else
{
    for ($i =0; $i <=count($categorias); $i++)
    {
        if($categorias[$i] == 'adulto')
        {
            $_SESSION['mensagem de sucesso'] = "O nadador"  $nome " compete na categoria adulto ";
            header('location: index.php');
            return;
        }
        
    }
}
