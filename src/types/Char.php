<?php
namespace Boparaiamrit\Jables\types;
use Boparaiamrit\Jables\BaseType;
use Boparaiamrit\Jables\Field;

class Char extends BaseType implements Field {
	public function init($table, $name)
	{
		return $table->char($name, $this->schema->length);
	}

	public function render(){}
}