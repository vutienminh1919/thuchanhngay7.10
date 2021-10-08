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
$n = 1000;
echo("Prime numbers smaller than $n  are: <br>");
for ($i = 0; $i < $n; $i++) {
    if (isPrimeNumber($i)) {
        echo($i . " ");
    }
}
?>
