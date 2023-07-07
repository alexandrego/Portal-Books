<?php
  session_start();
  include('conectadb.php');

  // Recebe as variaves da página de cadastro
  $firstName = mysqli_real_escape_string($conectadb, trim($_POST['primeiroNome']));
  $lastName = mysqli_real_escape_string($conectadb, trim($_POST['ultimoNome']));
  $usuario = mysqli_real_escape_string($conectadb, trim($_POST['nomeDeUsuario']));
  $email = mysqli_real_escape_string($conectadb, trim($_POST['email']));
  $senha = mysqli_real_escape_string($conectadb, trim($_POST['password']));
  $confirmaSenha = mysqli_real_escape_string($conectadb, trim($_POST['samePassword']));

  // Se a página for acessada diretamente as várias estarão vazias, desta forma retornamos a página de cadastrado, evitando assim cadastros "fantasmas" no banco de dados.
  if(empty($firstName)){
    header('Location: ../cadastro-de-leitor');
  }else{

    // Verifica se já existe nome de usuario
    $query_usuario = "SELECT nome_usuario FROM leitor WHERE nome_usuario = '{$usuario}'";
    $result_usuario = mysqli_query($conectadb, $query_usuario);

    $row_usuario = mysqli_num_rows($result_usuario);

    if($row_usuario == 1) {
      foreach($result_usuario as $leitor) {
        echo $leitor['nome_usuario'] .'</br></br>';

        if($result_usuario) {
          echo 'Nome de usuário indisponivel </br></br>';
          
          $_SESSION['usuario_indisponivel'] = true;
          header('Location: ../cadastro-de-leitor');
        }
      }
    } else {

      // Verifica se já existe o e-mail cadastrado
      $query_email = "SELECT email FROM leitor WHERE email = '{$email}'";
      $result_email = mysqli_query($conectadb, $query_email);
  
      $row_email = mysqli_num_rows($result_email);
  
      if($row_email == 1) {
        foreach($result_email as $email_leitor) {
          echo $email_leitor['email'] .'</br></br>';
  
          if($result_email) {
            echo 'Este e-mail já esta sendo utilizado </br></br>';
            
            $_SESSION['email_indisponivel'] = true;
            header('Location: ../cadastro-de-leitor');
          }
        }
      } else {

        if ($senha === $confirmaSenha) {
          // $senhaVerificada = 'Senha válida';
          $cryptoSenha = password_hash($senha, PASSWORD_DEFAULT);          

          $query_register_leitor = "INSERT INTO leitor (nome, ultimo_nome, nome_usuario, email, senha) VALUES ('$firstName', '$lastName', '$usuario', '$email', '$cryptoSenha')";
          $result_register_leitor = mysqli_query($conectadb, $query_register_leitor);

          if($result_register_leitor){            
            $_SESSION['leitor_cadastrado_com_sucesso'] = true;
            header('Location: ../home');
          }

        } else {
          // $senhaVerificada = 'Senha invalida';
              
          $_SESSION['senha_diferente'] = true;
          header('Location: ../cadastro-de-leitor');
        }
      }
    }
  }
?>