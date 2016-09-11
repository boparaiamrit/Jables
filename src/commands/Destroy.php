<?php
namespace Boparaiamrit\Jables\commands;

use Illuminate\Database\DatabaseManager;
use Boparaiamrit\Jables\Destroyer;
use Boparaiamrit\Jables\Command;

class Destroy extends Command
{
	use traits\Destroys;

	protected $signature = 'jables:destroy {--database=}';
	protected $description = 'Removes all tables that jables created from database.';

	protected $destroyer = null;

	public function __construct($app, Destroyer $destroyer)
	{
		parent::__construct();
		$this->app = $app;
		$this->destroyer = $destroyer;
	}

	public function handle()
	{
		$this->destroy();
	}
}