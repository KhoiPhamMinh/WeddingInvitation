<?php

/**
 * 
 */
class Database
{
	
	private $con;
	public function connect(){
		$this->con = new Mysqli("localhost", "root", "", "final_project");
		return $this->con;
	}
}

?>