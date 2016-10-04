<?php
namespace Boparaiamrit\Jables\types;


use Boparaiamrit\Jables\BaseType;
use Boparaiamrit\Jables\Field;

class Jsonb extends BaseType implements Field
{
	public function init($table, $name)
	{
		return $table->jsonb($name);
	}
	
	public function render()
	{
	}
}