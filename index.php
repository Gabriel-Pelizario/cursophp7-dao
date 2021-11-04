<?php 

require_once("config.php");

//carrega um usuario
//$root = new Usuario();
//$root->loadById(8);
//echo $root;

//carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("Tobias","444999");
//echo $usuario;

//insert com procedure
//$aluno = new Usuario("Aluno", "Root");
//$aluno->insert();
//echo $aluno;

//alterar um usuario
//$usuario = new Usuario();
//$usuario->loadById(8);
//$usuario->update("professor", "!@#%&*");
//echo $usuario;

//deletando um usuario
$usuario = new Usuario();
$usuario->loadById(8);
$usuario->delete();

echo $usuario;


 ?>