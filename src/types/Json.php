<?php
namespace Boparaiamrit\Jables\types;
use Boparaiamrit\Jables\BaseType;
use Boparaiamrit\Jables\Field;

class Json extends BaseType implements Field {
	public function init($table, $name)
	{
		return $table->json($name);
	}

	public function render(){}
}