<?php
// Receber a URL do .htaccess. Se não existir o nome da página, carregar a página inicial (home).
$url = (!empty(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)) ? filter_input(INPUT_GET, 'url', FILTER_DEFAULT) : 'home');

// Converter a URL de uma string para um array.
$url = array_filter(explode('/', $url));

// Criar o caminho da página com o nome que está na primeira posição do array criado acima e atribuir a extenção .php
$arquivo = 'pages/' . $url[0] . '.php';

if(is_file($arquivo)){
  include $arquivo;
}else{
  include 'pages/404.php';
}

?>