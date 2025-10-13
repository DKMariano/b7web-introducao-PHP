<?php
 /**
 * Exercicio 01:
 * 1. Crie um array chamado Cidades contendo o nome de 5 cidades que você quer visitar.
 * 2. Imprima na tela o valor da terceira cidade deste array.
 */   

$cidade = ["Toronto", "Brasília", "Helsinque", "Copenhaga ", "Oslo" ];
echo "Resposta Exercício 01: "; 
echo $cidade[2]."<br>"; 
echo "<br>"; 

/**
 * Exercicio 02:
 * 1. Crie um array associativo chamado $alunos onde as chaves são os nomes de três alunos e os valores são as idades deles.
 * 2. Imprima a idade do segundo aluno.
 */
$alunos = ['Pedro' => 19, 'José' => 24, 'Erika' => 20];
echo "Resposta Exercício 02: "; 
echo $alunos['José']."<br>"; 
echo "<br>"; 

/**
 * Exercicio 03:
 * 1. Crie um array chamado $cores contendo três cores.
 * 2. Adicione uma nova cor ao final do array.
 * 3. Remova a primeira cor do array.
 * 4. Imprima o array resultante.
 */
$cores = ["Roxo", "Vermelho", "Preto"];
echo "<br> <pre>"; 
print_r($cores);
array_push($cores , "Azul");
echo "Resposta Exercício 03: "; 
echo "<pre> <br>";  
print_r($cores);

echo "<br>"; 
array_shift($cores);
echo "<pre>";  
print_r($cores);


/**
 * Exercicio 04:
 * Crie um array associativo chamado $precos onde as chaves são nomes de produtos e os valores são seus preços.
 * Atualize o preço de um dos produtos adicionando + R$ 10,00.
 * Atualize o preço do primeiro produto reduzindo – R$ 1,00
 * Imprima o array resultante.
 */

$precos = ["Bola"=> 10, "Skate" => 250, "Kindle" => 300];
echo "<pre> <br>";  
print_r($precos);
echo "Resposta Exercício 03: "; 
$precos["Bola"] = $precos["Bola"] + 10;
$precos["Kindle"] = $precos["Kindle"] - 1;
echo "<pre> <br>";  
print_r($precos);

?>