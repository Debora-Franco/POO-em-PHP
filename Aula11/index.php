<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body><pre>
        <?php
         require_once 'Visitante.php';
         require_once 'ALuno.php';
         require_once 'Bolsista.php';
         require_once 'Professor.php';
         require_once 'Tecnico.php';
         
         $v1=new Visitante();
         $v1->setNome("Maria");
         $v1->setIdade(30);
         $v1->setSexo("F");
         print_r($v1);
         
         
         $a1=new Aluno();
         $a1->setNome("Pedro");
         $a1->setMatricula(1111);
         $a1->setIdade(16);
         $a1->setSexo("M");
         $a1->setCurso("Informático");
         $a1->pagarMensalidade();
         print_r($a1);
         
         
         $b1=new Bolsista();
         $b1->setMatricula(1112);
         $b1->setNome("Jubileu");
         $b1->setBolsa(12.5);
         $b1->setCurso("Administração");
         $b1->setIdade(15);
         $b1->setSexo("M");
         $b1->pagarMensalidade();
         print_r($b1);
         
         $p1=new Professor();
         $p1->setNome("Mariana");
         $p1->setSexo("F");
         $p1->setIdade(45);
         $p1->setEspecialidade("Geografia");
         $p1->setSalario(2500.00);
         $p1->receberAumento(200);
         print_r($p1);
         
         $t1=new Tecnico();
         $t1->setNome("Joana");
         $t1->setIdade(20);
         $t1->setSexo("F");
         $t1->setMatricula(2451);
         $t1->setRegistroProfissional("Junior");
         $t1->setCurso("Java");
         $t1->praticar(true);
         print_r($t1);
         
        ?>
 </pre>
    </body>
</html>
