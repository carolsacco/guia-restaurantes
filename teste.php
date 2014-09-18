<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="utf-8">
        
    </head>
    
    <body>
        <?php include "operacoes.php"; 
            
         $resultado1=6;
         $resultado2=2;
         
        echo "O resultado é: " .soma($resultado1, $resultado2);
        echo"<br><br><br>";

        
        echo "O resultado é: " .subtracao($resultado1, $resultado2);
        
        echo"<br><br><br>";
                
        echo "O resultado é: " .multiplicacao($resultado1, $resultado2);
        echo"<br><br><br>";
        
        echo "O resultado é: " .divisao($resultado1, $resultado2);
        
        echo"<br><br><br>";
        ?>
    </body>
</html>