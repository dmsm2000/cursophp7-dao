<?php

require_once("config.php");

// carrega um usuario
//$user = new Usuario();
//$user->loadById(1);
//echo $user;

//Carrega uma lista de usuario
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios pelo login
//$search = Usuario::search("use");
//echo json_encode($search);

//Carrega um usuario usando o logine e a senha
$usuario = new Usuario();
$usuario->login("user", "12345678");

echo $usuario;

?>