<?php
namespace Boparaiamrit\Jables\types;

use Boparaiamrit\Jables\BaseType;
use Boparaiamrit\Jables\Field;

class Integer extends BaseType implements Field {

	public function init($table, $name)
	{
		if ($this->definition('ai') === true) {
			return $table->increments($name);
		}

		return $table->integer($name);
	}

	public function attributes()
	{
		$attributes = $this->definition('attributes');
		if (is_array($attributes) && in_array('unsigned', $attributes)) {
			$this->field->unsigned();
		}
	}

	public function render()
	{
		$this->attributes();
	}
}