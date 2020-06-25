<?php

function validaNome(string $nome) : bool
{
  if (empty($nome)) 
    {
      setarMensagemErro( 'O nome não pode ser vazio, por favor preencha-o ');
    return false;
    }
else if (strlen($nome) < 3) 
    {       
    setarMensagemErro('O nome deve conter mais de 3 caracteres');    
    return false ;
    } 
else if (strlen($nome) > 40) 
    {   
   setarMensagemErro( 'O nome é muito extenso'); 
    return false;
    } 
    else
        {return true;}
}
function validaIdade (string $idade) : bool
{
   if (is_numeric($idade)) 
    {
    return true;
    } 
    else
        { 
        setarMensagemErro( 'Informe um numero para a idade');
    header('location: index.php');
        return false;
        }
    
}

