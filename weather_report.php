<?php

$temp = 2;

if ($temp >= 40) {
    print("It's very hot.");
} elseif ($temp >= 30) {
    print("It's warm.");
} elseif ($temp >= 20) {
    print("It's normal.");
} elseif ($temp >= 5) {
    print("It's cool.");
} else {
    print("It's freezing!");
}