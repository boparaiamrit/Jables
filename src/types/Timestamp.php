<?php
namespace Boparaiamrit\Jables\types;


use Boparaiamrit\Jables\BaseType;
use Boparaiamrit\Jables\Field;

class Timestamp extends BaseType implements Field
{
	public function init($table, $name)
	{
		return $table->timestamp($name);
	}
	
	public function render()
	{
	}
}