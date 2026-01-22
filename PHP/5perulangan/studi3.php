<?php

for ($i = 1; $i <= 50; $i++) {
    if ($i % 10 === 0) {
      continue;
    }
    
    echo "Beh ke-{$i} <br>";

    if ($i > 40) {
      break;    
    }
}