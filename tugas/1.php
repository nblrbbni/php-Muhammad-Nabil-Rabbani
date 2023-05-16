<?php

function segitiga($size) {
    for ($row = 0; $row < $size; $row++) {
        for ($col = 0; $col < $row + 1; $col++) {
            echo "#";
        }
        echo "<br>";   
    }
}

segitiga(10); 