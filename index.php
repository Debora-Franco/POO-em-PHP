<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Caneta.php';
        
        $c1=new Caneta("BIC","Verde", 0.5);
        $c2=new Caneta("kkk", "Azul",0.8);
        
        print_r($c1);
        print_r($c2);
        
        //$c1->setModelo("Bic");(Pode usar esse como o exemplo abaixo)
       // $c1->modelo="Bic";
      // $c1->setPonta (0.5);
       // $c1->ponta= 0.6; ( Não pode usar, pois é privado)
       // print_r($c1);
       // print "Eu tenho uma caneta $c1->getModelo() de ponta $c!->getPonta()";
        
        ?>
        </pre>
    </body>
</html>
