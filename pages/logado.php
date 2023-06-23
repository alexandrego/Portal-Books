<?php
  include 'header.php';
  include 'menu.php';
?>
  <div id="logout" class="corpo-logado">

    <div class="user-name">
      <img src="assets/icons/user-circle.svg" class="user-icon" />Admin User
    </div>

    <div class="ola-user">
      <h1>Bem Vindo(a) Admin User</h1>
    </div>

    <div class="dois-elementos">

      <div class="elemento">
        <h3>Curiosidades</h3>
        <div class="sub-elemento">
          <div class="sub-elemento-interno">
            <p>Ler é uma ótima forma de melhorar seu vocabulário, sua capacidade de interpretação e sua escrita! Ao ler histórias de vários estilos, você se permite ver palavras que não conhece ou com que não está familiarizado. Desse modo, você pode até expressar melhor como se sente.</p>
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

    <?php
      include_once 'meus-livros.php';
    ?>

  </div>
<?php
include 'footer.php';
?>