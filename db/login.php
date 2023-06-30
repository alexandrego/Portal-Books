<?php
session_start();
include('conectadb.php');

if(empty($_POST['username']) || empty($_POST['password'])) {
	header('Location: index.php');
	exit();
}

$usuario = mysqli_real_escape_string($conectadb, $_POST['username']);
$senha = mysqli_real_escape_string($conectadb, $_POST['password']);

// $encrypta_senha = password_hash($senha, PASSWORD_DEFAULT);

// echo 'Olá ' . $usuario . '</br></br>';
// echo 'Sua senha é: ' . $senha . '</br></br>';

$query_usuario = "SELECT nome_usuario FROM leitor WHERE nome_usuario = '{$usuario}'";
$result_usuario = mysqli_query($conectadb, $query_usuario);

$row = mysqli_num_rows($result_usuario);

if($row == 1) {
  foreach($result_usuario as $leitor) {
    echo $leitor['nome_usuario'] .'</br></br>';

    if($result_usuario) {
      echo 'Leitor encontrado </br></br>';

      $query_senha = "SELECT senha FROM leitor WHERE nome_usuario = '{$usuario}'";
      $result_senha = mysqli_query($conectadb, $query_senha);

      foreach($result_senha as $password){
        echo $password['senha'] .'</br></br>';
        $senha_db = $password['senha'];

        if (password_verify($senha, $senha_db)) {
          echo 'Senha válida';
                
          $_SESSION['usuario'] = $usuario;
          header('Location: ../logado');
          exit();

        } else {
          echo 'Senha invalida';

          $_SESSION['nao_autenticado'] = true;
          header('Location: ../home');
          exit();
        }
      }
    } else {
      echo 'Leitor não encontrado';

      $_SESSION['nao_autenticado'] = true;
      header('Location: ../home');
      exit();
    }
  }
} else {
  echo 'Leitor não encontrado';

  $_SESSION['nao_autenticado'] = true;
  header('Location: ../home');
  exit();
}