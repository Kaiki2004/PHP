<?php

/*echo "oi estamos bem";
echo '<br>';
$_GET; 
$_GET['email'];               | ($_GET) e ($_POST) são variáveis globais de metódos de requisição de servidor 
$_GET['senha'];
                                
print_r($_GET);                 | include ("nome do script") => essa tag faz com que seja possível incluir um script em outro script 
echo '<br>';                        reaproveiitando outros scritps                         
print_r($_GET['email']);        | require ("nome do script") => essa tag faz com que seja possível incluir um script em outro script 
echo '<br>';                           reaproveiitando outros scritps
print_r($_GET['senha']);        | já o include_once e require_once => faz com que seja possível adicionar outro script apenas uma vez
                                        | A diferença entre os dois é que o include, quando há algum erro ele da (warning) e continua interpretando o script
                                                enquanto que o require ele da um (fatal error) e para de interpretar o script

*/

session_start();
// relação de usuário
$usuario_autenticado = false;
$usuario_id = null;
$usuario_perfil_id = null;

$perfis = array(1 => 'administrativo', 2 => 'usuário');

$usuarios_app = array(
    array('id' => 1, 'email' => 'kaikiandrade64@gmail.com', 'senha' => '1234', 'perfil_id' => 1),
    array('id' => 2, 'email' => 'user@teste.com.br', 'senha' => '1234', 'perfil_id' => 1),
    array('id' => 3, 'email' => 'user2@teste.com.br', 'senha' => '1234', 'perfil_id' => 2),
    array('id' => 4, 'email' => 'user3@teste.com.br', 'senha' => '1234', 'perfil_id' => 2)
);



foreach ($usuarios_app as $user) {

    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
        $usuario_autenticado = true;
        $usuario_id = $user['id'];
        $usuario_perfil_id = $user['perfil_id'];
    }
}

if ($usuario_autenticado == true) {
    echo 'usuario autorizado';

    $_SESSION['autenticado'] = 'sim';
    $_SESSION['id'] = $usuario_id;
    $_SESSION['perfil_id'] = $usuario_perfil_id;
    header('Location: home.php');
} else if($usuario_autenticado == false){
    $_SESSION['autenticado'] = 'não';
    header('Location: index.php?login=erro');
}

/*
print_r($_POST);
echo $_POST['email'];
echo '<br>';
echo $_POST['senha'];
*/

?>