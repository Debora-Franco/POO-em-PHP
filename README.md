# PHP_Caneta
Curso em PHP do curso em video, postarei os exercicios do mesmo.

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 02 -POO </title>
    </head>
    <body>
        <pre>
        <?php
         require_once 'caneta.php';
         
         $c1= new Caneta;
         $c1->modelo ="BIC cristal";
         $c1->cor= "Azul";
         
         
         $c1->rabiscar();
         $c1->tampar();
         print_r($c1);
         
         /*$c1->cor ="Azul";
         $c1->ponta = 0.5;
         $c1->tampada = false;
         $c1->destampar();         
         print_r($c1);
         
         echo"<br/>";
             
         $c2=new Caneta;
         $c2->cor = "Verde";
         $c2->carga = 50;
         $c2->tampar();
         print_r($c2);*/
         
         
         
         
        ?>
        </pre>
    </body>
</html>
