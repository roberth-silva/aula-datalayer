<?php

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\ItemType;

$item = (new ItemType())->findById(5);

if($item){
	$item->destroy();
}else{
	var_dump($item);
}

?>