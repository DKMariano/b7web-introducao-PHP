<?php

$nome = 'Alessandro';
if($nome == 'Alessandro'){
    echo "Olá, Alessandro!<br>";
}

echo "<br>";

$nome = 'Ricardo';
if($nome != 'Alessandro'){
    echo "Olá, ".$nome."!<br>";
}

echo "<br>";
$idade = 38;
if($idade >= 18){
    echo "Com ".$idade.", você pode acessar o sistema<br>";
} else {
    echo "Com ".$idade.", você NÃO pode acessar o sistema<br>";
}

echo "<br>";
$idade2 = 17;
if($idade2 >= 18){
    echo "Com ".$idade2.", você pode acessar o sistema<br>";
} else {
    echo "Com ".$idade2.", você NÃO pode acessar o sistema<br>";
}

echo "<br>";


?>