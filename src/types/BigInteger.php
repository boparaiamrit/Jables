<?php
namespace Boparaiamrit\Jables\types;
use Boparaiamrit\Jables\BaseType;
use Boparaiamrit\Jables\Field;

class BigInteger extends Integer {
	public function init($table, $name)
	{
		if ($this->definition('ai') === true) {
			return $table->bigIncrements($name);
		}

		return $table->bigInteger($name);
	}
}