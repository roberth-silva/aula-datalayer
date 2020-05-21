<?php 

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class ItemType extends DataLayer
{
	public function __construct()
	{
		parent::__construct("itemtype",["description"],"id",true);
	}
}
?>