
<div class="menu-externo">
  <div class="menu-interno">

    <div class="show-icons">

    <?php
      if($url[0] === 'logado'){
    ?>
      <img src="assets/icons/house.svg" class="icon active"/>
    <?php
      }else{
    ?>
      <a href="logado" class="link-icon" onclick="carregando()">
        <img src="assets/icons/house.svg" class="icon"/>
      </a>
    <?php
      }
    ?>

    <?php
      if($url[0] === 'biblioteca'){
    ?>
      <img src="assets/icons/books.svg" class="icon active"/>
    <?php
      }else{
    ?>
      <a href="biblioteca" class="link-icon" onclick="carregando()">
        <img src="assets/icons/books.svg" class="icon"/>
      </a>
    <?php
      }
    ?>

    <?php
      if($url[0] === 'dados-pessoais'){
    ?>
      <img src="assets/icons/faders-horizontal.svg" class="icon active"/>
    <?php
      }else{
    ?>
      <a href="dados-pessoais" class="link-icon" onclick="carregando()">
        <img src="assets/icons/faders-horizontal.svg" class="icon"/>
      </a>
    <?php
      }
    ?>
      
      <a href="db/logout.php" class="link-icon" onclick="waitLogout()">
        <img src="assets/icons/plugs.svg" class="icon"/>
      </a>
    </div>

  </div>
  <div class="version">Versão 1.0.0.0</div>
</div>