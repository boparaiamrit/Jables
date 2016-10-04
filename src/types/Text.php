<?php
namespace Boparaiamrit\Jables\types;


use Boparaiamrit\Jables\BaseType;
use Boparaiamrit\Jables\Field;

class Text extends BaseType implements Field
{
	public function init($table, $name)
	{
		return $table->text($name);
	}
	
	
	public function render()
	{
	}
}