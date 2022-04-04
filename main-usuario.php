<?php

include "usuario.php";


$objUsuario = new Usuario();
$nome = $objUsuario->nome = 'João';
$sobreNome = $objUsuario->sobreNome = 'Silva';
$email = $objUsuario->email = 'js@email.com';
$seguidores = $objUsuario->contadorSeguidores = 1000;
$login = $objUsuario->login = 'jsilva2003';
$senha = $objUsuario->senha = 'cAd178#@_PqH';

$printarDados = $objUsuario->printarDadosUsuario($nome, $sobreNome, $email, $seguidores, $login, $senha);

echo "{$printarDados}";


