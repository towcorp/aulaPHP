<?php 

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolecente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';


$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome) || empty($idade))
{
    echo "O campo não pode ser vazio";
    return;
}
if(strlen($nome) < 3 )
{
    echo 'O nome deve conter mais de 3 caracteres';
    return;
}

if(strlen($nome) > 40)
{
    echo "O nome é muito extenso";
    return;
}

if(!is_numeric($idade))
{
    echo "Informe um numero para a idade";
    return;
}

if($idade >= 6 && $idade <= 12)
{
	for($i = 0; $i <= count($categorias); $i++)
	{
		if($categorias[$i] == 'infantil')
			echo "O nadador ".$nome. " compete na categoria ".$categorias[$i];
	}
}
else if($idade >= 13 && $idade <= 18)
{
	for($i = 0; $i <= count($categorias); $i++)
	{
		if($categorias[$i] == 'adolecente')
			echo "O nadador ".$nome. " compete na categoria adolecente";
	}
}
else
{
	for($i = 0; $i <= count($categorias); $i++)
	{
		if($categorias[$i] == 'adulto')
			echo "O nadador ".$nome. " compete na categoria adulto";
	}
}


?>