<?php
namespace Boparaiamrit\Jables\types;
use Boparaiamrit\Jables\BaseType;
use Boparaiamrit\Jables\Field;

class MediumText extends BaseType implements Field {
	public function init($table, $name)
	{
		return $table->mediumText($name);
	}


	public function render()
	{
		
	}
}