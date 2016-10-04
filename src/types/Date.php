<?php
namespace Boparaiamrit\Jables\types;


use Boparaiamrit\Jables\BaseType;
use Boparaiamrit\Jables\Field;

class Date extends BaseType implements Field
{
	
	public function init($table, $name)
	{
		return $table->date($name);
	}
	
	public function render()
	{
	}
	
}