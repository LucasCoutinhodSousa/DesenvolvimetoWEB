<?php
    //exibindo variavel superglobal $_GET
    echo '<pre>';
    print_r($_GET);
    echo '<pre>';
    // Acessar posição  especifica variavel superglobal que é uma array
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
    $operacao = $_GET['operacao'];

    /*echo $operacao;
    echo '<br>';
    echo '<h1>soma</h1>';
    echo $n1 + $n2;*/

    if($operacao == 'soma'){
        echo '<h1>Soma</h1>';
        echo $n1 + $n2;
    }
    elseif($operacao == 'subtracao'){
        echo '<h1>Subtração</h1>';
        echo $n1 - $n2;
    }elseif($operacao == 'dividir'){
        echo '<h1>Dividir</h1>';
        echo $n1 / $n2;
    }elseif($operacao == 'multiplicacao'){
        echo '<h1>Mutiplicação</h1>';
        echo $n1 * $n2;
    }

?>