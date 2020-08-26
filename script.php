<?php 
// criar uma sessao php
session_start();

//criar array de categorias
$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolecente';
$categorias[] = 'adulto';

// solicitar informaçoes do usuario
$nome = $_POST['nome'];
$idade = $_POST['idade'];


//criar condiçoes para preenchimento
if(empty($nome))
{
    $_SESSION['mensagem de erro'] = "O campo não pode ser vazio preencha para continuar";
    header('location: index.php');
    return;
}
else if(strlen($nome) < 3)
{
    $_SESSION['mensagem de erro'] = 'O nome deve conter mais de 3 caracteres';
    header('location: index.php');
    return;
}

else if(strlen($nome) > 40)
{
    $_SESSION['mensagem de erro'] = "O nome é muito extenso";
    header('location: index.php');
    return;
}

else if(!is_numeric($idade))
{
    $_SESSION['mensagem de erro'] = "Informe um numero para a idade";
    header('location: index.php');
    return;
}

if($idade >= 6 && $idade <= 12)
{
	for($i = 0; $i < count($categorias); $i++)
	{
        if($categorias[$i] == 'infantil')
        {
            $_SESSION['mensagem de sucesso'] = "O nadador ".$nome. " compete na categoria ".$categorias[$i];
            header('location: index.php');
            return;
        }

	}
}
else if($idade >= 13 && $idade <= 18)
{
	for($i = 0; $i < count($categorias); $i++)
	{
        if($categorias[$i] == 'adolecente')
        {
            $_SESSION['mensagem de sucesso'] = "O nadador ".$nome. " compete na categoria ".$categorias[$i];
            header('location: index.php');
            return;
        }

	}
}
else
{
	for($i = 0; $i < count($categorias); $i++)
	{
        if($categorias[$i] == 'adulto')
        {
            $_SESSION['mensagem de sucesso'] = "O nadador ".$nome. " compete na categoria ".$categorias[$i];
            header('location: index.php');
            return;
        }
	}
}