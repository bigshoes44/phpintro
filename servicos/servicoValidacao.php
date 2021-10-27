<?php


function validaNome(string $nome) : bool
{
    if(empty($nome))
    {
        setarMensagemErro( ' O nome não pode ser vazio, por favor preencha novamente');
        return false;
    }
    
    else if(strlen($nome)<=3)
    {
        setarMensagemErro( ' O nome deve conter mais que 3 caracteres');
        return false;;
    }
    
    else if(strlen($nome)>40)
    {
        setarMensagemErro(' O nome é muito extenso');
        return false;;
    }
    return true;
    
} 

function ValidaIdade(string $idade) : bool
{
    if(!is_numeric($idade))
    {
        setarMensagemErro(' Informe um número para a idade');
        return false;
    }
    return true;

}

