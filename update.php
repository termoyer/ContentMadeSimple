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
//Check if session is set and redirect.
if($_SESSION['login']){
	include("core/lib/UpgradeCore.php");
	
	new UpgradeCore();
}else{
	print "permission denied.";	
}
?>