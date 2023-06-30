<?php
  include 'header.php';
  include 'menu.php';
  include('db/verifica-login.php');
?>
  <div id="logout" class="corpo-logado">

    <div class="user-name">
      <img src="assets/icons/user-circle.svg" class="user-icon" />Admin User
    </div>

    <div class="ola-user">
      <h1>Cadastrar Livro</h1>
      <div class="corpo-cadastrar-livro">
        
        <form method="post" action="#" id="form-cadastrar-livro" name="form-cadastrar-livro" enctype="multipart/form-data">
          <div class="corpo-cadastrar-capa-e-titulo">
            <div class="update-capa-livro">
              <label for="adiciona-capa" id="adiciona-capa-livro" class="nuvem-adiciona-capa-livro"><img src="assets/icons/cloud-arrow-up.svg" class="img-update-capa-livro" />Adicionar Capa</label>
              
              <input name="img-capa-livro" type="file" id="adiciona-capa" class="img-capa-livro" onchange="previewImagem()">
              <img class="img-capa-livro-css" id="img-capa-livro" >

            </div>
            <div class="cadastrar-titulo-e-autor">
              <label>Titulo do Livro</label>
              <input type="text" name="input-cadastra-titulo-do-livro" placeholder="Insira o titulo do livro" class="input-form-sub-campos">

              <label>Autor</label>
              <input type="text" name="input-cadastra-autor-do-livro" placeholder="Insira o nome do autor" class="input-form-sub-campos">

            </div>
          </div>

          <div class="corpo-descricao-cadastrar-livro">
            <div class="cadastrar-descricao">
              <label>Descrição</label>
              <textarea name="textarea" rows="10" cols="50" class="input-form-sub-textarea"></textarea>
            </div>
            
            <div class="cadastrar-total-de-páginas">
              <label>Quantidade total de páginas</label>
              <input type="text" name="input-cadastra-autor-do-livro" placeholder="Insira a quantidade total de páginas" class="input-form-sub-campos">
            </div>
          </div>

          <div class="btn-atualizar-dados-pessoais">
            <button id="btn-wait-register" class="btn btn-primary" onclick="btnAwaitRegister()">Cadastrar</button>
          </div>
        </form>

      </div>
    </div>

  </div>
  

  <!-- Carrega preview da imagem de capa a ser carregada -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  <script>
    function previewImagem() {
      const imagem = document.querySelector('input[name=img-capa-livro').files[0];
      const preview = document.getElementById('img-capa-livro');

      const reader = new FileReader();

      reader.onloadend = function (event) {
        preview.src = reader.result;
      }

      if(imagem){
        reader.readAsDataURL(imagem);
      }else{
        preview.src = "Selecione uma Imagem!";
      }
    }
  </script>
<?php
include 'footer.php';
?>