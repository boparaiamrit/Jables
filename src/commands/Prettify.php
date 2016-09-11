<?php
namespace Boparaiamrit\Jables\commands;

use Boparaiamrit\Jables\Command;
use Boparaiamrit\Jables\Checker;
use Boparaiamrit\Jables\Prettifyer;

class Prettify extends Command
{
	protected $signature = 'jables:prettify';
	protected $description = 'Makes your JSON Files Look Nice';

	protected $checker = null;

	public function __construct(Checker $checker, Prettifyer $prettifyer)
	{
		parent::__construct();

		$this->checker = $checker;
		$this->prettifyer = $prettifyer;
	}

	public function handle()
	{
		$this->info('Checking for JSON syntax Errors...');
		$errors = $this->checker->syntaxError();

		if ($errors !== null) {
			$this->error($errors);
			return false;
		}

		$this->info('Prettifying your JSON files...');
		$this->prettifyer->prettify();
		$this->info('Done.');
	}
}