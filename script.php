<?php
$categoria = [];
$categoria[] = "infantil";
$categoria[] = "adolecente";
$categoria[] = "Adulto";

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if (empty($nome)) {
    echo "Erro Digite o Nome";
    return;
}

if (strlen($nome) <3 ) {
    echo "O nome deve aver mais de três caracteres.";
    return;

}
if (strlen($nome) > 40 ) {
    echo "nome muito extenso.";
    return;

}
if (!is_numeric($idade)) {
    echo "Erro idade não valida.";
    return;
}
//empty Define sem a um produto de variavel.
//strlen define quantos caracteries tem uma varialvel.

if ($idade >= 6 && $idade <= 12) 
{
    for ($i=0; $i < count($categoria); $i++) 
      if ($categoria[$i] == "infantil") 
        echo "O Nadador ".$nome." compete na categoria: INFANTIL";

}
else if($idade >= 13 && $idade <= 18) 
{
    for ($i=0; $i < count($categoria); $i++) 
        if ($categoria[$i] == "adolecente") 
            echo "O Nadador ".$nome." compete na categoria: ADOLECENTE";
}
else{

    for ($i=0; $i < count($categoria); $i++) 
        if ($categoria[$i] == "Adulto") 
            echo "O Nadador ".$nome." compete na categoria: ADULTO";
}
