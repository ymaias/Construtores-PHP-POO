<?php
//set seria usado, por exemplo para obter informações em um input.

    include 'assingment.php';

    print_r($aluno1);
    $aluno1->setNome("Bruna");
    print_r($aluno1);

    echo "A aluna {$aluno1->getNome()} é legal";
?>