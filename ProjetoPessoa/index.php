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
        require_once 'Aluno.php';
        require_once 'Professor.php';
        require_once 'Funcionario.php';
        // Programa Principal 
        
        $p1=new Pessoa();
        $p2=new Aluno();
        $p3=new Professor();
        $p4=new Funcionario();
        
        $p1->setNome("Pedro");
        $p1->setIdade(30);
        $p1->setSexo("M");
        
        $p2->setNome("Maria");
        $p2->setIdade(40);
        $p2->setSexo("F");
        
        $p3->setNome("Cláudio");
        $p3->setIdade(45);
        $p3->setSexo("M");
        
        $p4->setNome("Fabiana");
        $p4->setIdade(30);
        $p4->setSexo("F");
        
        $p2->setCurso("Informática");
        $p3->setSalario(2750.75);
        $p4->setSetor("Estoque");
        
        print_r($p1);
        print_r($p2);
        print_r($p3);
        print_r($p4);
        
        
        
        
        
       
        

        ?>
    </pre>
    </body>
</html>
