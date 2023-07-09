<?php

$end = 30;
$costum = $end;
for ($i = 1; $i <= $end; $i++) {
    if ($i % 2 != 0) {
        $costum--;
        for ($j = $costum; $j >= 1; $j--) echo ' ';
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }

        echo "\n";
    }
}
