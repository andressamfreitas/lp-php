<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu portfolio</title>
    <script> src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-white">
    <h1>
        <?php
            echo "Portfólio da Andressa";
        ?>
    </h1>
       <p>
            <?php
            $subtitulo = "Seja bem vindo!";
                echo $subtitulo . " Esta é minha primeira página utilizando o php e um pouquinho de html.";
            ?>
        </p>
        <p>
       <h3>
    <hr>
       <?php
         echo " - Módulo 1: Fundamentos do PHP";
         ?>
         </h3>
</hr>
        <?php
        echo "- Sobre condicionais e booleanos:";
        ?>
        <p>
         <?php 
        echo "Basicamente dizer se é true or false; 1 ou 0";
        ?>
        </p>
        <?php
         $iniciado = "true";
         $dataDeInicio = "2025-04-18";
         $finalizado = "false";
         $dataDeFinalização = "xxxx-xx-xx";
     ?>
    <p><?php echo "Iniciado: " . $dataDeInicio?></p>
    <p><?php echo "Finalizado: " . $dataDeFinalização?></p>
       <?php
                echo " - Sobre variáveis:"
        ?> 
        </h3>
        <?php
            $variaveldesaudação = "Olá!";
            $variaveldenome = "Andressa";
            $variaveldetitulo = "Esse portfólio será organizado ao final, juro!";
        ?>    
        <p>
            <?php
            echo "a) Utilizar espaços para guardar informações que serão úteis no futuro";
            ?>
        </p>
         <p>   
            <?php
               echo  "b) No php todas as variáveis iniciam com o sinal de $";
            ?>
        <p>
            <?php
            echo "c) É muito díficil definir nome de variável";
            ?>
        </p>    
        </p>
        <p>
            <?php
            echo $variaveldesaudação; 
            // É possível juntar informações para que elas sejam impressas na tela ao mesmo tempo: utilizar método de concatenação (dois pedaços de informações em um só);
            ?>
        </p>
        <p>
            <?php
             echo $variaveldesaudação . " Aqui é um exemplo de concatenação.";
            ?>
        </p>
        <p>
                <?php
        echo "Ainda bem que aqui posso colocar qualquer coisa, como criar variável de nome: " . $variaveldenome;
        ?>
        </p>
        <p>
        <?php
            echo "Antes de subir pro git eu vou organizar o arquivo. Promessa feita em variável > " . $variaveldetitulo;
        ?>
        </p>
    </p>  
    <h3>
    <?php
    echo " - Sobre condicionais e booleanos:";
    //É basicamente dizer se é verdadeiro ou falso. Booleano: true or false; 1 or 0;
    $modulo = "Fundamentos do PHP";
    $finalizado = "true";
    $dataDoProjeto = "2025-04-18";
    ?>
    </h3>

    <h1><?=$modulo?></h1>
    <p><?php echo "Finalizado: " . $finalizado?></p>
    <p><?php echo $dataDoProjeto?></p>

    <p>
        <?php
        echo " - Sobre arrays:";
        // São listas. Para sinalizar que é um array precisa colocar os [].
        // Aceita letras, números,...
        ?>
        <?php

        $itens = [
        "Variáveis",
        "Condicionais e booleanos",
        "Arrays",
        "Funções",
        "Filtros",
        "Funções anônimas",
        "Array_filter",
        ];
   
    ?>
    </p>

    <ul>
        <?php
        // ul em html é para listas;
        foreach ($itens as $etapas){
            echo "<li>" . $etapas . "</li>"; // <li> é para listas iniciadas com pontos.
        }
        ?>
    </ul>

    <?php 
        echo "<li>{$itens[3]}</li>";
        echo "<li>{$itens[5]}</li>";
    ?>
    <?php 
    $evolucao = [
        [
        "variáveis",
        true,
        "2025-04-18",
        "item 1 do primeiro módulo",
        "stack"=> ["PHP", "HTML", "CSS", "JS"]
        ],
        [
        "arrays",
        true,
        "2025-04-18",
        "item 3 do primeiro módulo",
        "stack"=> ["PHP", "HTML", "CSS", "JS"]
        ],
        [
        "filtros",
        false,
        "xxxx-xx-xx",
        "item 5 do primeiro módulo",
        "stack"=> ["PHP", "HTML", "CSS", "JS"]
        ]
    ];
    ?>

    <?php
    $evolucao = [
        'filtros',
        false,
        'xxxx-xx-xx',
        'item 5 do primeiro módulo',
    ];
    ?>

    <?php
                echo " - Sobre funções:" // Bloco de código que é encapsulado e que pode ser aproveitado repetidas vezes.
        ?>
 <p>
    <?php
    // retornar o array inteiro
    function retornarArray($evolucao) {
        return $evolucao;
    }
    print_r (retornarArray($evolucao));
    ?>
 </p>   
 
 <?php
 // retornar um array com os valores.
 function retornarEvolucao($evolucao) {
    return array_values($evolucao);
 }
 echo (retornarEvolucao($evolucao));
?>
</p>
<p>
<?php
 // retornar o número de elementos.
 function retornarTamanho($evolucao) {
    return count($evolucao);
 }
 echo retornarTamanho($evolucao);
?>
</p>
<p>
<?php
// retornar o valor do último elemento.
    function retornarUltimoValor($evolucao) {
        // return end($evolucao);
        return $evolucao [count($evolucao) -1];
        // return $evolucao [1];
        // return $evolucao;
    }
     print retornarUltimoValor($evolucao);
?>
</p>

<?php
    $segundoModulo = [
        'estilização',
        'css',
        'tailwind'
    ];
    ?>

    <?php 
        $projeto = [
            "titulo" => "fundamentos do PHP",
            "finalizado" => true,
            "data" => "2025-04-22",
        ];
    ?>
    <?php
    function verificarSeFinalizado ($projeto) {
        if( $projeto['finalizado'] ) {
            return 'finalizado';
        }
            return 'não finalizado';
    }
        echo verificarSeFinalizado($projeto);
    ?>

    <!-- <?php
    // retornar número de itens no array.
    function retornarItens ($segundoModulo) {
        return count($segundoModulo);
    }
        echo retornarItens($segundoModulo);
    ?>
    <?php 
    // retornar o último item do array.
    function retornarUltimoItem ($segundoModulo) {
        return end($segundoModulo);
    }
        echo retornarUltimoItem($segundoModulo);
    ?> -->

    <?php 
    // retornar o primeiro item do array
    // function retornarPrimeiroItem ($segundoModulo) {
    //     return current($segundoModulo);
    // }
    // print retornarPrimeiroItem($segundoModulo);


    ?>

