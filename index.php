<?php

$categoria = [];
$categoria[] = 'Adulto';
$categoria[] = 'Adolecentes';
$categoria[] = 'Infantil';
//print_r($categoria); Ele imprime na tela se o arrey está usado corretamente.

$nome = 'Eduardo';
$idade = 15;

//var_dump($nome);
//var_dump($idade); ele mostra tipo da variavel.

if($idade >= 6 && $idade <= 12)
{
       for ($i=0; $i < count($categoria) ; $i++) 
    
        if($categoria[$i] == 'infantil');
            echo "O nadador ".$nome." está na categoria Infantil";
        
      
}
else if($idade >= 13 && $idade <= 18)
{
    for ($i=0; $i < count($categoria) ; $i++) 
    
        if($categoria[$i] == 'Adolecentes');
            echo "O nadador ".$nome." está na categoria Adolecentes";
}   
else
{
    echo'Categoria: Adulto';
}