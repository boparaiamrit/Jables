<?php
namespace Boparaiamrit\Jables\commands;


use Boparaiamrit\Jables\Command;
use Boparaiamrit\Jables\Destroyer;

class Destroy extends Command
{
	use traits\Destroys;
	
	protected $signature   = 'jables:destroy {--database=}';
	protected $description = 'Removes all tables that jables created from database.';
	
	protected $destroyer = null;
	
	public function __construct($app, Destroyer $destroyer)
	{
		parent::__construct();
		$this->app       = $app;
		$this->destroyer = $destroyer;
	}
	
	public function handle()
	{
		$this->destroy();
	}
}