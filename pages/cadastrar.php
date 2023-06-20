<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../estilos.css" media="screen" />
  <link rel="icon" type="image/x-icon" href="../assets\img\computer-books.svg">

  <title>Cadastrar Usuário</title>
</head>
<body>
  <div id="theme" class="theme">
    <div class="alter-theme">
      <label class="switch">
        <input type="checkbox" checked>
        <span class="slider round"></span>
      </label>
    </div>

    <div class="corpo">
      <div class="img-computer-books">
        <img src="../assets/img/register-user.svg" alt="E-books" class="computer-books"/>
      </div>

      <div class="login">
        <div class="title">
          <h1>Portal Books</h1>
        </div>

        <div class="form-login">
          <form method="post" /*action="http://portalbooks.seutelefonedasorte.com"*/ id="form-login" name="form-login">
            <p>
              <label>Usuário</label>
            </p>
            <p>
              <input type="text" name="username" placeholder="Insira o nome de usuário" class="input-form">
            </p>
            
            <p>
              <label>Senha</label>
            </p>
            <p>
              <input type="password" name="password" placeholder="Insira a senha de usuário" class="input-form">
            </p>

            <button class="btn btn-primary">Entrar</button>
            <a href="#">
              <button class="btn btn-secondary">Cadastre-se</button>
            </a>
          </form>
        </div>
      </div>
    </div>

    <div class="version">Versão 1.0.0.0</div>
  </div>

  <script src="../js/scripts.js"></script>  
</body>
</html>