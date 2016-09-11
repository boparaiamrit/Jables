<?php
namespace Boparaiamrit\Jables\types;
use Boparaiamrit\Jables\BaseType;
use Boparaiamrit\Jables\Field;

class Time extends BaseType implements Field {

	public function init($table, $name)
	{
		return $table->time($name);
	}

	public function render(){}

}
