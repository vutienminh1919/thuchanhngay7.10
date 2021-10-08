<?php
function isPrimeNumber($x)
{
    if ($x < 2) {
        return false;
    } else {
        for ($i = 2; $i <= sqrt($x); $i++) {
            if ($x % $i === 0) {
                return false;
            }
        }
    }
    return true;
}

echo("Prime numbers smaller than 100 are: <br>");
for ($i = 0; $i < 100; $i++) {
    if (isPrimeNumber($i)) {
        echo($i . " ");
    }
}
?>