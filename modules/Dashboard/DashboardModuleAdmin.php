<?php

/**
 * The Administration loader for the module
 */
class ModuleAdmin extends Admin{

	/**
	 * The Default setup function
	 */
	public function ModuleAdmin(){
		//Sets the unix name of the plugin
		$this->setUnix("Dashboard");	
	}

	/**
	 * Default Requestion
	 */
	public function defaultRequest(){
		
		$data = "This Plugin's Administration has yet to be built by the ContentMadeSimple team.";
		
		$this->setContent($data);
	}
	
	/**
	 * Prints the news for the main dashboard.
	 */
	public function newsRequest(){
		
		//Loads news for the ajax box
		$this->getNews();
		
		//Stops all processing.
		$this->freeze_all();
	}
	
    /**
     * Gets html formatted news from norox.org
     */
    private function getNews(){
    	$data = "";
    	if(!isset($_SESSION['newsCheck'])){
	    	include("core/lib/RemoteFiles.php");
	    	
	    	$rf = new RemoteFiles();
	    	
	    	//Get version of CMS
	    	$v = $this->con->getVersion();
	    	
	    	$data = $rf->getURL("http://norox.org/coreupgrade/getDashboardNews.php?v=".$v);
	    	
	    	$_SESSION['newsCheck'] = $data;
    	}else{
    		$data = $_SESSION['newsCheck'];
    	}
    	print $data;
    }
	
	/**
	 * Quits any running software.
	 */
	protected function freeze_all(){
		exit;	
	}
}

?>