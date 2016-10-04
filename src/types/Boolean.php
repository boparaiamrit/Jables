<?php
namespace Boparaiamrit\Jables\types;


use Boparaiamrit\Jables\BaseType;
use Boparaiamrit\Jables\Field;

class Boolean extends BaseType implements Field
{
	
	public function init($table, $name)
	{
		return $table->boolean($name);
	}
	
	public function render()
	{
	}
}