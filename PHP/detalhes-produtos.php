<?php
$item = $_GET['id_produto']; // A variavel tem que ser de acordo com o metodo;

$produtos = array();
$produtos[1] = "Detalhes da Cadeira <br>Preço: R$340,00";
$produtos[2] = "Detalhes do Fogão  <br>Preço: R$1.149,69";
$produtos[3] = "Detalhes do Roteador wi-fi  <br>Preço: R$98,10";
$produtos[4] = "Detalhes da TV 29  <br>Preço: R$895,49 ";

echo "<h4>Detalhes do produto escolhido</h4>";
echo $produto[$item];


?>