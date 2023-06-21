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
        <img src="assets/img/register-user.svg" alt="E-books" class="computer-books"/>
      </div>

      <div class="login">
        <div class="title">
          <h1>Cadastre-se</h1>
        </div>

        <div class="form-login">
          <form method="post" /*action="http://portalbooks.seutelefonedasorte.com"*/ id="form-login" name="form-login">
            
            <div class="dois-campos">
              <div class="sub-campos">
                <p>
                  <label>Primeiro Nome</label>
                </p>
                <p>
                  <input type="text" name="primeiroNome" placeholder="Insira seu primeiro nome" class="input-form-sub-campos">
                </p>
              </div>
              
              <div class="sub-campos">
                <p>
                  <label>Último Nome</label>
                </p>
                <p>
                  <input type="text" name="ultimoNome" placeholder="Insira seu último nome" class="input-form-sub-campos">
                </p>
              </div>
            </div>

            <div class="nome-de-usuario">
              <p>
                <label>Nome de Usuário</label>
              </p>
              <p>
                <input type="text" name="nomeDeUsuario" placeholder="Digite seu nome de usuário" class="input-form">
              </p>
            </div>
            
            <div class="dois-campos">
              <div class="sub-campos">
                <p>
                  <label>Senha</label>
                </p>
                <p>
                  <input type="password" name="password" placeholder="Digite sua senha" class="input-form-sub-campos">
                </p>
              </div>
              <div class="sub-campos">
                <p>
                  <label>Confirme a Senha</label>
                </p>
                <p>
                  <input type="password" name="password" placeholder="Confirme a senha" class="input-form-sub-campos">
                </p>
              </div>
            </div>

            <button class="btn btn-primary">Cadastrar</button>

            <a href="<?php echo 'home'; ?>" class="link-Register">
              <div id="btn-secondary" class="btn btn-secondary" onclick="btnAwait()">Voltar</div>
            </a>
          </form>
        </div>
      </div>
    </div>
  </div>

<?php
  include 'footer.php';
?>