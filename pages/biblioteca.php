<?php
  include 'header.php';
  include 'menu.php';
?>
  <div id="logout" class="corpo-logado">

    <div class="user-name">
      <img src="assets/icons/user-circle.svg" class="user-icon" />Admin User
    </div>

    <div class="ola-user">
      <h1>Minha Biblioteca</h1>
    </div>

    <div class="dois-elementos">

      <div class="elemento">
        <h3>Livros Em Leitura</h3>
        <div class="sub-elemento">
          <div class="sub-elemento-interno">
          </div>
        </div>
      </div>

      <div class="elemento">
        <h3>Último Livro Lido</h3>
        <div class="sub-elemento">
          <div class="sub-elemento-interno">
            <p>Você ainda não iniciou uma leitura conosco.</p>
            <p>Clique abaixo para cadastrar seu primeiro livro.</p>
            <div class="cadastra-livro">
              <a href="cadastro-de-livro" class="link-Register">
                <div id="btn-secondary" class="btn btn-primary" onclick="btnAwait()">Cadastrar Livro</div>
              </a>
            </div>
          </div></div>
      </div>

    </div>

    <div class="ola-user">
      <h3>Meus Livros</h3>
      <div class="sub-elemento"></div>
    </div>

  </div>
<?php
include 'footer.php';
?>