
// a. Crie um programa que exiba todos os números pares entre 0 e 100.

<?php



for ($x = 0; $x <= 100; $x++) {
    if ($x % 2 == 0) {
        echo "O número é: $x<br>";
    }
}

?>

// b. Desenvolva  um programa que solicite ao usuário para inserir um número inteiro posistivo e, em seguida, exiba todos os números pares entre 0 e o número inserido. 

<?php 

echo "Insira um número inteiro positivo: ";
$num = (int) trim(fgets(SIDIN)); 
$num = (int) trim(fgets(SIDIN)); 

if ($num > 0) {
    echo " Os números pares entre 0 e $num são:<br>"; 
    for ($x = 0; $x <= $num; $x++) {
        if ($x % 2 == 0) {
            echo " O número é: $x<br>"; 
        }
    }
} else {
    echo " O número deve ser positivo"; 
}

?>

// c. Crie um programa que solicite ao usuário para inserir uma palavra e, em seguida, exiba cada letra da palavra em uma lunha separada. 

<?php

echo "Insira uma palavra: "; 
$palavra = trim(fgets(SIDIN)); 

for (Si = 0; Si < strlen($palavra); Si++) {
    echo "A letra é: " . $palavra[Si] . "<br>"; 
}

?>

// d. Desenvolva um programa que solicite ao usuário para inserir um número inteiro positivo e, em seguida, exibe a soma de todos os números entre 1 e o número inserido. 

<?php

$num = (int) readline("Insira um número inteiro positivo: ");


if ($num <= 0) {
    echo "Erro: o número deve ser positivo!\n";
} else {
   
    $soma = 0;

    
    for ($i = 1; $i <= $num; $i++) {
        $soma += $i;
    }

    echo "A soma de todos os números entre 1 e $num é $soma.\n";
}

?> 

// e. Crie um programa que solicite ao usuário para inserir um número inteiro e, em seguida, exiba se esse número é primo ou não. 

<?php 

echo "Insira um número inteiro"; 
$num = (int) trim(fgets(SIDIN)); 

if ($num < 1) {
    echo " O número $num não é primo."; 
} else [
    $primo = true; 
    for (Si = 2; Si < sqrt($num); $i++) {
        if ($num % $i == 0){
            $primo = falso; 
            break;
        }
    }
    if ($primo) {
        echo " O primeiro número é primo"; 
    } else {
        echo " O primeiro número não é primo";
    }
]

?> 

// f. Desenvolva um programa que solicite ao usuário para inserir uma sequência de números inteiros e, em seguida, exiba o maior número inserido. 

<?php

echo "Insira uma sequência de números inteiros"; 
$sequência = (int) trim(fgets(SIDIN)); 
$sequência = explode(" ", $sequência); 

$maior = $sequência[0]; 

for (Si = 1; $i < count($sequência); $i++) {
    if ($sequência[$i] > $maior) {
        $maior = $sequência[Si]; 
    }
}

echo "O maior número da sequência é $maior";

?>


// g. Crie um programa que exiba a tabuada do número 5 até o número 10. 

<?php 

echo "Exiba a tabuada do número 5."; 
for ($i = 5; $i < 10; $i++) {
    echo "Tabuada do $i:<br>";
    for ($i = 0; $j < 10; $i++) {
        echo "$i x $j = " , ($i * $j) . "<br>";
    }
    echo "<br>";
}

?> 


// h. Desenvolva um programa que solicite para inseir um número inteiro positivo e, em seguuida, exiba todos os divisores desse número. 

<?php

echo "Insira um número inteiro positivo: ";
$num = (int) trim(fgets(STDIN));

if ($num <= 0) {
    echo "Erro: o número deve ser positivo!\n";
} else {
    echo "Os divisores de $num são: ";
    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) {
            echo "$i ";
        }
    }
    echo "\n";
}

?>

// i. Crie um programa que exiba todos os números primos entre 1 e 100. 

<?php

echo "Os números primos entre 1 e 100 são: <br>";

for ($num = 2; $num <= 100; $num++) {
    $primo = true;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $primo = false;
            break;
        }
    }
    if ($primo) {
        echo "$num <br>";
    }
}

?>

// Desenvolva um programa que exiba a soma dos números pares entre 1 e 100. 

<?php

$soma = 0;

for ($i = 2; $i <= 100; $i += 2) {
    $soma += $i;
}

echo "A soma dos números pares entre 1 e 100 é $soma.\n";

?>

