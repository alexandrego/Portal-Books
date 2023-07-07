<?php
  session_start();
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
        <img src="assets/img/register-user.svg" alt="E-books" class="computer-books-register"/>
      </div>

      <div class="login">
        <div class="title">
          <h1>Cadastre-se</h1>
        </div>

        <?php
          // Verificação de usuario já existente
          if(isset($_SESSION['usuario_indisponivel'])):
          ?>
          <div class="notification is-danger">
            <p>Este usuário já esta sendo utilizado</p>
          </div>
          <?php
          endif;
          unset($_SESSION['usuario_indisponivel']);

          // Verificação de e-mail já existente
          if(isset($_SESSION['email_indisponivel'])):
            ?>
            <div class="notification is-danger">
              <p>Este e-mail já esta sendo utilizado</p>
            </div>
            <?php
            endif;
            unset($_SESSION['email_indisponivel']);

            // Verificação se as senhas são iguais
            if(isset($_SESSION['senha_diferente'])):
              ?>
              <div class="notification is-danger">
                <p>As senhas precisam ser iguais</p>
              </div>
              <?php
              endif;
              unset($_SESSION['senha_diferente']);
        ?>

        <div class="form-login">
          <form method="post" action="db/register.php" id="form-login" name="form-login">
            
            <div class="dois-campos">
              <div class="sub-campos">
                <p>
                  <label>Primeiro Nome</label>
                </p>
                <p>
                  <input type="text" name="primeiroNome" placeholder="Insira seu primeiro nome" class="input-form-sub-campos" required>
                </p>
              </div>
              
              <div class="sub-campos">
                <p>
                  <label>Último Nome</label>
                </p>
                <p>
                  <input type="text" name="ultimoNome" placeholder="Insira seu último nome" class="input-form-sub-campos" required>
                </p>
              </div>
            </div>

            <div class="nome-de-usuario">
              <p>
                <label>Nome de Usuário</label>
              </p>
              <p>
                <input type="text" name="nomeDeUsuario" placeholder="Digite seu nome de usuário" class="input-form" required>
              </p>
            </div>

            <div class="nome-de-usuario">
              <p>
                <label>E-mail</label>
              </p>
              <p>
                <input type="text" name="email" placeholder="Digite seu melhor e-mail" class="input-form" required>
              </p>
            </div>
            
            <div class="dois-campos">
              <div class="sub-campos">
                <p>
                  <label>Senha</label>
                </p>
                <p>
                  <input type="password" name="password" placeholder="Digite sua senha" class="input-form-sub-campos" required>
                </p>
              </div>
              <div class="sub-campos">
                <p>
                  <label>Confirme a Senha</label>
                </p>
                <p>
                  <input type="password" name="samePassword" placeholder="Confirme a senha" class="input-form-sub-campos" required>
                </p>
              </div>
            </div>

            <!-- <button id="btn-wait-register" class="btn btn-primary" onclick="btnAwaitRegister()">Cadastrar</button> -->
            <input type="submit" id="btn-wait-login" class="btn btn-primary" name="cadastrar" value="Cadastrar">

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