<?php
namespace Boparaiamrit\Jables\types;

class SmallInteger extends Integer {

	public function init($table, $name)
	{
		return $table->smallInteger($name);
	}

}