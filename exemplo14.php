<!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Document</title>
        <link type="text/css" rel="stylesheet" href="estilo.css"/>
    </head>
    <body>
    <h1>CT Desenvolvimento de Sistemas Back-End</h1>
    <div id="container">
        <?php
            echo "Variáveis REFERENCIADAS em PHP. <br><br>";
            
            $iNum1 = 3;
            $iNum2 = &$iNum1;

            $iNum2*=10;

            echo "iNum1 = $iNum1<br>";
            echo "iNum2 = $iNum2<br>";

        
        ?>
        </div>
    </body>
</html>