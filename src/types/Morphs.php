<?php
namespace Boparaiamrit\Jables\types;
use Boparaiamrit\Jables\BaseType;
use Boparaiamrit\Jables\Field;

class Morphs extends BaseType implements Field {
	public function init($table, $name)
	{
		return $table->morphs($name);
	}

	public function render(){}
}