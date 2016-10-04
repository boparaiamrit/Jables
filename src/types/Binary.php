<?php
namespace Boparaiamrit\Jables\types;


use Boparaiamrit\Jables\BaseType;
use Boparaiamrit\Jables\Field;

class Binary extends BaseType implements Field
{
	public function init($table, $name)
	{
		return $table->binary($name);
	}
	
	public function render()
	{
	}
}