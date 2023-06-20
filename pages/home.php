<?php
  include 'header.php';
?>

<div id="theme" class="theme">
  <!-- <div class="alter-theme">
    <label class="switch">
      <input type="checkbox" checked>
      <span class="slider round"></span>
    </label>
  </div> -->

  <div class="corpo">
    <div class="img-computer-books">
      <img src="assets/img/computer-books.svg" alt="E-books" class="computer-books"/>
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
          
          <a href="<?php echo 'cadastrar'; ?>" class="link-Register">
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