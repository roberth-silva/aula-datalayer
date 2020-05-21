<?php

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\ItemType;

$item = (new ItemType())->findById(5);
$item->description = "Celulares";
$item->save();

var_dump($item);

?>