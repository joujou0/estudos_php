<?php   
    // Exercício de array associativo:

    // Array associativo com características de uma pessoa.
    $pessoa = [
        'nome' => 'Jonathan',
        'idade' => 34,
        'altura' => 1.72,
        'peso' => 70,
        'profissao' => 'Desenvolvedor'
    ];

    // Atribuindo chaves do array associativo a variáveis.
    $nome = $pessoa['nome'];
    $idade = $pessoa['idade'];
    $altura = $pessoa['altura'];
    $peso = $pessoa['peso'];
    $profissao = $pessoa['profissao'];    

    //validador de idade.
    if($idade >= 18){
        echo "$nome é maior de idade";
    }else{
        echo "$nome é menor de idade";
    }
?>