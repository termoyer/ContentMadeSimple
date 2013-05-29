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
include("core/controller/UsersListController.php");
	
class UsersListStarter{
	
	/**
	 * Fetches the page one way or another.
	 */
	public function UsersListStarter($fetch){
		
		//Setup the class page
		$ac = new UsersListController($fetch);
	}
}

?>