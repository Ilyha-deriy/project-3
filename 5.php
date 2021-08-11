<?php
class Parrot {

var $alias;

function talk() {
echo ", дурак";
}
    public function set($newname)
    {
        $this->alias = $newname;
    }


}
$object = new Parrot;

$object->alias = "Попка";
echo $object->alias;

$object->talk();
$object->set("Ромка");

echo $object->alias;

$object->talk();

?>