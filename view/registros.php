<?php

foreach ($registros as $registro) {
    foreach ($registro as $key => $value) {
        echo "[$key] -> [$value]<br>";
    }
    echo "<br>";
}