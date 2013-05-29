<?php
/*
 *
 * GPL v4 
 * (c) ContentMadeSimple 2013.
 *
 * Written by Marco Voigt, Norox Media-Solutions (TM)
 *
 */
//Start the session.
session_start();

//Failsafe to install
if(file_exists("install.php")){
	header("Location: install.php");	
}

//Load up the routing system
require("core/lib/router.php");

//Route the page request to the specified system, eg. Page retrieval, administration or essentially anything.
new Router();

?>