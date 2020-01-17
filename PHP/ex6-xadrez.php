


<?php
$valores = array(34,12,10,6,8);
//var_dump($valores);
print_r($valores);
//Utiliza muito array para guardar dados de Banco de Dados
foreach($valores as $value){
    echo "<br/>".$value;
}

echo '<img src="xadrez2.jpeg" width="300"/>';
$tabuleiro[8]['a'] = "torre preta";
$tabuleiro[8]['b'] = "bispo preta";
$tabuleiro[8]['c'] = "cavalo preta";
$tabuleiro[8]['d'] = "rainha preta";
$tabuleiro[8]['e'] = "rei preta";
$tabuleiro[8]['f'] = "bispo preta";
$tabuleiro[8]['g'] = "cavalo preta";
$tabuleiro[8]['h'] = "torre preta";
$tabuleiro[7]['a'] = "peão";
$tabuleiro[7]['b'] = "peão";
$tabuleiro[7]['c'] = "peão";
$tabuleiro[7]['d'] = "peão";
$tabuleiro[7]['e'] = "peão";
$tabuleiro[7]['f'] = "peão";
$tabuleiro[7]['g'] = "peão";
$tabuleiro[7]['h'] = "peão";

echo '<table border="1">';
for($i = 8; $i >= 7; $i--){    //Trabalha as linhas da tabela;
    echo '<tr>';
    for($j = 'a'; $j <= 'h'; $j++){
        echo '<td>'.$tabuleiro[$i][$j].'</td>';
    }
    echo '</tr>';
}


?> 
