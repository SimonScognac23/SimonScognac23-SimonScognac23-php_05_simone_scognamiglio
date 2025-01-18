<?php

// Ciclo che va da 1 a 100
for ($i = 1; $i <= 100; $i++) {

    
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "HACKADEMY\n"; // Se il numero è Multiplo di 3 e 5 doppia condizione con &&

    } elseif ($i % 3 == 0) {
        echo "PHP\n"; // Se il numero è Multiplo di 3

    } elseif ($i % 5 == 0) {
        echo "JAVASCRIPT\n"; //Se il numero è Multiplo di 5

    } else {
        echo $i . "\n"; //Se il numero non è multiplo né di 3 né di 5
    }
}

?>
