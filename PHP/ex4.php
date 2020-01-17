<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="utf-8"/>
    <title></title>
    </head>
    <body>
        <?php
           //for,while,do..while, foreach
           // Mostrar numeros de 1-10
        echo "<h4>Números de 1 até 10</h4>";
        for($cont =1;$cont <=10;$cont++){
            echo $cont."<br />";
        }
            echo "<h4>Contagem Regressiva..</h4>";
          //contagem de 10-1
        for($cont=10;$cont >= 1;$cont--){
            echo $cont." ";
        } 
        echo "<br />";
        echo "<h4>Usando o While 2-10</h4>";
        //Usando While
        //exibir 2-10
        $cont = 2;
        while($cont <=10){
            echo $cont." ";
            $cont++;
        }
        echo "<h4>Pares de 2 até 10</h4>";
            $cont = 2;
            while($cont <=10){
                echo $cont." ";
                $cont +=2; //$cont = $cont +2
            }
     echo "<h4>Pares de 3 até 10</h4>";
            $cont = 0;
            while($cont <=10):
                echo $cont." ";
                $cont +=2; //$cont = $cont +2
            endwhile;
        echo "<br />";
        echo "<h4>Usando o Do..While<h4/>";
        echo "<h5>Multiplos de 5</h5>";
        $cont = 0;
        do{
            echo $cont." ";
            $cont += 5;
        }while($cont <= 50);
        
        echo "<br />";
        echo "<h4>Mostrar 10 números Randômicos pares<h4/>";
            for($par = 1; $par <= 10; $par++){
                $numero = (int)rand(0,100);
                if($numero % 2 == 0){
                    echo $par." - ".$numero." /";
                }else{
                    $par--;
                        
                    }
                }
                            
       ?>
    </body>
</html>