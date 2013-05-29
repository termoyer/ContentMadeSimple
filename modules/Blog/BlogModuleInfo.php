<?php
include_once("core/lib/ModuleInfo.php");

/**
 * Menu Module Information
 */
class ModuleInfo extends Info{
	
	/**
	 * Setup system
	 */
	public function ModuleInfo(){
		
		//Setup Unix
		$this->unix = "Blog";
		
		//Title setup
		$this->title = "ContentMadeSimple News/Blogging";
		
		//Setup Author
		$this->author = "ContentMadeSimple Development Team";
		
		//Support URL
		$this->support = "http://norox.org/cms";
		
		//Version
		$this->version = "1.0";
		
		//Administration Area Exists
		$this->admin = true;
		
		//Overriding Anything
		$this->overrider = false;
		
		//Organisation Committing Development
		$this->organisation = "Based on 'News' by '<a href='http://winged.info/p/projects/news'>Winged.Info</a>'.";
	}
}

?>