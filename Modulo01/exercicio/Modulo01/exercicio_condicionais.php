<?php
/*************************************************************************
 * Crie um script PHP que simula um sistema de login simples.
 * O sistema deve verificar se o nome de usuário e a senha fornecidos * estão corretos.
 * X Se ambos estiverem corretos, exiba uma mensagem de boas-vindas.
 * Se o nome de usuário estiver correto, mas a senha estiver errada, exiba * uma mensagem de erro de senha.
 * Se o nome de usuário estiver incorreto, exiba uma mensagem de erro de &* nome de usuário.
 * $usuarioCorreto = 'admin';
 * $senhaCorreta = '123456';
 */
echo"<br><strong>Exercício 01</strong><br>";
$usuarioCorreto = 'admin';
$senhaCorreta = '123456';

if($usuarioCorreto === 'admin' && $senhaCorreta === '123456'){
    echo"<br>Seja bem vindo(a), ".$usuarioCorreto."!<br><hr>";
}elseif($usuarioCorreto === 'admin' && $senhaCorreta != '123456'){
    echo"<br>Erro! A senha informada está incorreta!<br><hr>";
}else{
     echo"<br>Erro! O nome do usuário está incorreto!<br><hr>";
}

/**
 * Exercício 02
 * Crie um script PHP que verifica se uma pessoa pode entrar em uma festa.
 * Para entrar na festa, a pessoa precisa ter pelo menos 18 anos ou estar acompanhada por um responsável.
 */
echo"<br><strong>Exercício 02</strong><br>";
$idade = 14;
$responsavel = false;

if($idade >= 18){
    echo"<br>Você pode entrar na festa, pois é maior de idade!<br><hr>";
}elseif($idade < 18 && $responsavel){ 
    echo"<br>Apesar de ser menor de idade, você pode entrar na festa, pois está acompanhado de um responsável!<br><hr>";
}else{     
    echo"<br>Você NÃO pode entrar na festa, pois é menor de idade e NÃO está acompanhado de um responsável!<br><hr>";
}

/**
 * Exercício 03
 * Crie um script PHP que determina se um cliente tem direito a um desconto especial em uma loja e qual será o desconto.
 * O cliente tem direito ao desconto de 20% se o valor total de suas compras for maior que R$ 200 ou se ele for um membro VIP.
 * Se o valor total das compras estiver entre R$ 150 e R$ 200, o cliente pode receber um desconto de 10%.
 */
echo"<br><strong>Exercício 03</strong><br>";

$totalCompras = 149.99;
$membroVip = false;
$desconto = 0;

if($totalCompras >= 200 || $membroVip ){
    echo"<br>Você ganhou 20% de desconto!<br>";
    $desconto = 0.2;
    $totalCompras =  $totalCompras * (1 - $desconto);    
    echo"Pague apenas R$ ".number_format($totalCompras, 2, ",", ".")."!<br><hr>";
} elseif($totalCompras >= 150 &&  $totalCompras < 200){
    echo"<br>Você ganhou 10% de desconto!<br>";
    $desconto = 0.1;
    $totalCompras =  $totalCompras * (1 - $desconto);    
    echo"Pague apenas R$ ".number_format($totalCompras, 2, ",", ".")."!<br><hr>";
} else{
    echo"<br>Você não tem desconto!<br>";
    echo"<br>O total de sua compra foi R$ ".number_format($totalCompras, 2, ",", ".")."!<br><hr>";
}

?>

