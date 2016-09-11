<?php
namespace Boparaiamrit\Jables\types;
use Boparaiamrit\Jables\BaseType;
use Boparaiamrit\Jables\Field;

class LongText extends BaseType implements Field {
	public function init($table, $name)
	{
		return $table->longText($name);
	}

	public function render(){}
}