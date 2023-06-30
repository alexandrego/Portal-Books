<?php
  session_start();
  include 'header.php';
?>

<div id="theme" class="theme">

  <div class="corpo">
    <div class="img-computer-books">
      <img src="assets/img/computer-books.svg" alt="E-books" class="computer-books"/>
    </div>

    <div class="login">
      <div class="title">
        <h1>Portal Books</h1>
      </div>

      
      <?php
        if(isset($_SESSION['nao_autenticado'])):
        ?>
        <div class="notification is-danger">
          <p>Usuário ou senha inválidos</p>
        </div>
        <?php
        endif;
        unset($_SESSION['nao_autenticado']);
      ?>

      <div class="form-login">
        <form method="post" action="db/login.php" id="form-login" name="form-login">
          <p>
            <label>Usuário ou E-mail</label>
          </p>
          <p>
            <input type="text" name="username" placeholder="Insira o nome de usuário ou email" class="input-form" required>
          </p>
          
          <p>
            <label>Senha</label>
          </p>
          <p>
            <input type="password" name="password" placeholder="Insira a senha de usuário" class="input-form" required>
          </p>

          <input type="submit" id="btn-wait-login" class="btn btn-primary" name="Entrar" value="Entrar">
          
          <a href="<?php echo 'cadastro-de-leitor'; ?>" class="link-Register">
            <div id="btn-secondary" class="btn btn-secondary" onclick="btnAwait()">Cadastre-se</div>
          </a>
        </form>
      </div>
    </div>
  </div>
</div>

<?php
  include 'footer.php';
?>