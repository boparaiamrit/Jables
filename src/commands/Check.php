<?php
namespace Boparaiamrit\Jables\commands;

use \Boparaiamrit\Jables\Checker;
use \Boparaiamrit\Jables\Command;

use \Boparaiamrit\Jables\exceptions\ParseException;

class Check extends Command
{
	protected $signature = 'jables:check';
	protected $description = 'Checks the Schema files for inconsistencies.';

	protected $app = null;
	protected $checker = null;

	public function __construct(Checker $checker)
	{
		parent::__construct();
		$this->checker = $checker;
	}

	public function check()
	{
		$this->info('Checking for Schema Errors...');
		$this->checker->schemaError();

		$this->info('Checking for Foreign key Constraint Errors...');
		$this->checker->foreignKeyError();

		$this->info('Checking for Unique Constraint Errors...');
		$this->checker->uniqueError();

		$this->info('--------------------------');
		$this->info('Looks Fine.');
		echo PHP_EOL;

		return true;
	}

	public function handle()
	{
		$this->check();
	}
}
