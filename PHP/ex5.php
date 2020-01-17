<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="utf-8"/>
    <title></title>
    </head>
    <body>
        <?php
         echo "<h4> Vetores <br /></h4>";
        $nome1=" Ana";
        $nome2=" Paula";
        $nome3=" Ivana";
        echo "Primeiro Nome".$nome1."<br />";
        echo "Segundo Nome".$nome2."<br />";
        echo "Terceiro Nome".$nome3."<br />";
        
    //Array com os nomes
        echo "<h4> Array com os nomes </h4>";
        $nomes = array("Ana","Paula","Ivana");
        echo $nomes[0]." ".$nomes[1]." ".$nomes[2];
        $nomes[3]="Joana";
        echo "<br />".$nomes[3];
            
        //Alterar os valores colocando os indices;
        // Mesmo pulando os indices os vetores não funcionam;
        //Temos uma ordem e essa ordem deve ser registrada na forma que ele trabalha;
        echo "<br />";
        echo "<h4> Lista de Alunas </h4>";
        $nomeAlunas = array(1 => "Ana", 3 => "Paula", 5 => "Ivana", 6 => "Pietra", 8 => "Suzana", 10 => "Carla");
        foreach($nomeAlunas as $alunas){
            echo $alunas." /";
        }
            //Array Nomeando os Indices
        echo "<br />";
        echo "<h4>Array Indices Nomeados</h4>";
        $a = array("nome" =>"Ana", "idade" => 18, "peso" => 65.2);
        echo "$a[nome] tem $a[idade] anos e pesa $a[peso]";
        
        //Array Multidimensional
        echo "<br />";
        echo "<h4>Array Multidimensional</h4>";
        $valores = array(10,40, 'outroarray' => array (100,200,300,400,500),
                        50,60,70);
        echo $valores['outroarray'][4]." /";
        
        foreach($valores['outroarray'] as $valor){
            echo $valor." ";
        }
        
        ?>
    </body>
</html>