<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Pessoa.php';
        require_once 'Livro.php';
        
        
       
       $p[0]=new Pessoa("Lisiane",35, "F");
       $p[1]=new Pessoa("Joao",15, "M");
       
       $l[0]= new Livro("O triunfo","Napoleon Hill", 500, $p[0]);
       $l[1]=new Livro("O poder do subconciente","Joseph Murf", 200, $p[1]);
       $l[2]= new Livro("Nano","Josef", 500, $p[0]);
       
       
       $l[0]->abrir(); 
       $l[0]->folhear(200);
       $l[0]->detalhes();
       
       $l[1]->abrir(); 
       $l[1]->folhear(330);
       $l[1]->detalhes();
       
       $l[2]->abrir(); 
       $l[2]->folhear(40);
       $l[2]->detalhes();
        ?>
</pre>
    </body>
</html>
