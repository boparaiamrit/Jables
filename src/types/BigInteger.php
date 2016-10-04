<?php
namespace Boparaiamrit\Jables\types;


class BigInteger extends Integer
{
	public function init($table, $name)
	{
		if ($this->definition('ai') === true) {
			return $table->bigIncrements($name);
		}
		
		return $table->bigInteger($name);
	}
}