<?php
namespace Boparaiamrit\Jables\types;
use Boparaiamrit\Jables\BaseType;
use Boparaiamrit\Jables\Field;

class Enum extends BaseType implements Field {
	public function init($table, $name)
	{
		return $table->enum($name, $this->schema->values);
	}

	public function render(){}
}