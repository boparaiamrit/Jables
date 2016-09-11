<?php
namespace Boparaiamrit\Jables\types;
use Boparaiamrit\Jables\BaseType;
use Boparaiamrit\Jables\Field;

class Decimal extends BaseType implements Field {
	public function init($table, $name)
	{
		return $table->decimal(
			$name,
			$this->schema->digits,
			$this->schema->precision
		);
	}

	public function render(){}
}