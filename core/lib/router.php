<?php
/**
 * GPL v4 
 * ContentMadeSimple 2013.
 * Written by Marco Voigt, Norox Media-Solutions (TM)
 * This Class routes any request from an external source into the ContentMadeSimple systems.
 */
class Router{
	
	/**
	 * This routes any request from get variables into the LotusCMS system.
	 */
	public function Router(){
		//Get page request (if any)
		$page = $this->getInputString("page", "index");
		
		//Get plugin request (if any)
		$plugin = $this->getInputString("system", "Page");
		
		//If there is a request for a plugin
		if(file_exists("core/plugs/".$plugin."Starter.php")){
			//Include Page fetcher
			include("core/plugs/".$plugin."Starter.php");

			//Fetch the page and get over loading cache etc...
			eval("new ".$plugin."Starter('".$page."');");
			
		}else if(file_exists("data/modules/".$plugin."/starter.dat")){
			//Include Module Fetching System
			include("core/lib/ModuleLoader.php");
			
			//Load Module
			new ModuleLoader($plugin, $this->getInputString("page", null));
		}else{ //Otherwise load a page from the standard system.
			//Include Page fetcher
			include("core/plugs/PageStarter.php");
			
			//Fetch the page and get over loading cache etc...
			new PageStarter($page);
		}
	}
	
	/**
	 * Returns a global variable
	 */
	protected function getInputString($name, $default_value = "", $format = "GPCS")
	{
		//order of retrieve default GPCS (get, post, cookie, session);
		$format_defines = array (
		'G'=>'_GET',
		'P'=>'_POST',
		'C'=>'_COOKIE',
		'S'=>'_SESSION',
		'R'=>'_REQUEST',
		'F'=>'_FILES',
		);
		preg_match_all("/[G|P|C|S|R|F]/", $format, $matches); //splitting to globals order
		foreach ($matches[0] as $k=>$glb)
		{
		    if ( isset ($GLOBALS[$format_defines[$glb]][$name]))
		    {   
			return htmlentities ( trim ( $GLOBALS[$format_defines[$glb]][$name] ) , ENT_NOQUOTES ) ;
		    }
		}
		return $default_value;
	} 

}

?>