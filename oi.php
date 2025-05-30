<h1>Minha Primeira Aula de PHP</h1>

<?php
// Exibindo uma mensagem na tela
echo "Olá, Mundo!";
echo "<br>"; // Quebra de linha
print "Aprendendo PHP!"; // Outra forma de exibir texto

// Comentário de uma linha
# Comentário de uma linha
/*
    Comentário de múltiplas linhas
    Aqui você pode escrever várias linhas de comentários
    sem se preocupar com o limite de uma linha.
*/

// Variáveis iniciam com cifrão ($)
// Podem conter letras, números e o caractere de sublinhado (_)
$nome = "Samuel"; // String
$idade = 17; // Inteiro
$peso = 43.97; // Flloat
$altura = 1.62; // Float

// Exibindo o valor de uma variável
echo "<strong>Nome:</strong> $nome <br>";
echo "<strong>Idade:</strong> $idade <br>";
echo "<strong>Peso:</strong> $peso <br>";
echo "<strong>Altura:</strong> $altura <br>";

// Calculando o IMC
$imc = $peso / ($altura * $altura);

// Exibindo o resultado do IMC
echo "<strong>IMC:</strong> $imc <br>";

// Exibindo o resultado do IMC com uma mensagem
if ($imc < 18.5) {
    echo "Você está abaixo do peso.";
} elseif ($imc < 24.9) {
    echo "Você está com o peso normal.";
} elseif ($imc < 29.9) {
    echo "Você está com Sobrepeso.";
} else {
    echo "Você está obeso.";
}


?>