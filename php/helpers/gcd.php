<?php

function gcd($a,$b) {
    return ($a % $b) ? gcd($b,$a % $b) : $b;
}
