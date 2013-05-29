<?php
/*
 *
 * GPL v4 
 * (c) ContentMadeSimple 2013.
 *
 * Written by Marco Voigt, Norox Media-Solutions (TM)
 *
 */
 
//Controller of the paging collector.
include("core/controller/UsersController.php");
	
class UsersStarter{
	
	/**
	 * Fetches the page one way or another.
	 */
	public function UsersStarter($fetch){
		
		//Setup the class page
		$ac = new UsersController($fetch);
	}
}

?>