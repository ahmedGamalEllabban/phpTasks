<?php

for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 != 0) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
}
