<?php

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\ItemType;

$item = new ItemType();
$item->description = "Cadeiras";
$item->save();

var_dump($item);

?>