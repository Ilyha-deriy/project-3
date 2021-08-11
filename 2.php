<?php
function hello($name="Vova", $last_name = "Romanichev")
{
    return "Привет $name $last_name";
}

echo hello(Илья, Дерий);
?>