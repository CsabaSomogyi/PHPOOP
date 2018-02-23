<?php 
/**
* 
*/
class Chest
{
	protected $lock;
	protected $isClosed;

	public function __construct(Lock $lock)
	{
		$this->lock = $lock;
	}
	// default value 
	public function close($lock = true)
		{
			// sztem ez rossz ? 
			if ($lock === true) {
				$this->lock->lock2();
			}
			
			$this->isClosed = true;

			echo "Close";
		}	

	public function open()
	{
		if ($this->lock->isLocked()) {
			$this->lock->unlock();
		}

		$this->isClosed = false;
		echo "Open";
	}



	}
 ?>