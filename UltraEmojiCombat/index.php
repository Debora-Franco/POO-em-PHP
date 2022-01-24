<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Lutador.php';
        $l=array();
        $l[0]= new Lutador(" Pretty Boy", "França", 30, 1.75, 68.9, 11, 2, 1);
        $l[1]=new Lutador    ("PUTSCRIPT", "BRASIL", 29, 1.68, 57.8, 14, 2, 3);
        $l[2]=new Lutador("SNAPSHDOW", "EUA", 35, 1.65, 80.9, 12, 2, 1);
        $l[3]=new Lutador("DEAD CODE", "AUTRÁLIA", 28, 1.93, 81.6, 13, 0, 2);
        $l[4]=new Lutador("UFOCOBOL", "BRASIL", 37, 1.70, 119.3, 5, 4, 3);
        $l[5]=new Lutador("NERDAARF", "BRASIL", 30, 1.81, 105.7, 12, 2, 4);
        
        $l[0]->status();
        $l[0]->apresentar();
        $l[1]->status();
        $l[1]->apresentar();
        $l[2]->status();
        $l[2]->apresentar();
        $l[3]->status();
        $l[3]->apresentar();
        $l[4]->status();
        $l[4]->apresentar();
        $l[5]->status();
        $l[5]->apresentar();
        
        ?>
</pre>
    </body>
</html>
