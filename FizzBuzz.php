<?php

for ($i=1; $i <= 100 ; $i++) {
    if ($i % 15 === 0) {
        echo "FizzBuzz\n";
    }

    if ($i % 5 === 0) {
        echo "Buzz\n";
    }

    $i % 3 === 0 ? echo "Fizz\n" : echo $i."\n";
}
