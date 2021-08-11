<?php

class dog {

    var $aries;

    function bark() {
        echo "Гав-Гав <br>";
    }

}

$object = new dog;

$object->aries = "Бобик ";
echo $object->aries;

$object->bark();

$object = new dog;

$object->aries = "Бакс ";
echo $object->aries;

$object->bark();
$object = new dog;

$object->aries = "Шарик ";
echo $object->aries;

$object->bark();
?>