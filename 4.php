<?php

class Cat {

    public $arias= array("Мурка", "Барсик", "Снежок");


    function meow() {
        echo "<h3>Мяу Мяу</h3>";
    }

}

$object = new Cat;

$object->arias[1]="Гриша";
$object->arias[2]="Шарик";
$object->arias[3]="Митя";
echo $object->arias[1], "<br>", $object->arias[2], "<br>", $object->arias[3];

$object->meow();

?>