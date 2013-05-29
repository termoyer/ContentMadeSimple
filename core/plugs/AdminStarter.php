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
include("core/controller/AdminController.php");
	
class AdminStarter{
	
	/**
	 * Fetches the page one way or another.
	 */
	public function AdminStarter($fetch){
		
		//Setup the class page
		$ac = new AdminController($fetch);
	}
}

?>