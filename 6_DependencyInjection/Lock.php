<?php 
/**
* 
*/
class Lock
{
	protected $isLocked; 

	public function lock2()
	{
		$this->isLocked = true;
	}
	
	public function isLocked()
	{
		return $this->isLocked;
	}

		public function unlock()
	{
		return $this->isLocked = false;
	}
	

}
 ?>