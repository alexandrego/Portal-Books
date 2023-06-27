<?php
  include 'header.php';
  include 'menu.php';
?>
  <div id="logout" class="corpo-logado">

    <div class="user-name">
      <img src="assets/icons/user-circle.svg" class="user-icon" />Admin User
    </div>

    <div class="ola-user">
      <h1>Dados Pessoais</h1>
    </div>

    <div class="corpo-dados-pessoais">
      <div class="elemento-dados-pessoais">
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

          <div class="nome-de-usuario">
            <p>
              <label>E-mail</label>
            </p>
            <p>
              <input type="text" name="email" placeholder="Digite seu melhor e-mail" class="input-form">
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
      </div>

      <div class="elemento-dados-pessoais">
        <h1>Escolha seu tema</h1>

        <div class="ajusta-temas">

          <div class="temas">
            <h3>Tema Rosa</h3>
            <div class="selecionaTema">
              <img src="assets/img/WomanTheme.svg" class="imgSelecionaTema" />
              <input type="radio" id="WomanTheme" class="selectTheme" name="selectTheme" value="0">
            </div>

          </div>

          <div class="temas">
            <h3>Tema Azul</h3>
            <div class="selecionaTema">
              <img src="assets/img/ManTheme.svg" class="imgSelecionaTema"  />
              <input type="radio" id="ManTheme" class="selectTheme" name="selectTheme" value="1" checked>
            </div>
          </div>

        </div>  
      </div>
    </div>    

    <button id="btn-wait-register" class="btn btn-primary spaceButton" onclick="btnAwaitRegister()">Atualizar</button>
    </form>

  </div>
<?php
include 'footer.php';
?>