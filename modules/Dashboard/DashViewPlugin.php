<?php
 
/**
 * Dashboard
 */
class DashboardView extends Observer{
	
	protected $view;
	
	public function DashboardView(){

	}
	
	/**
	 * Sets up the listening system
	 */
	public function setupObserver(& $view){
		Observer::Observer($view);
		
		$this->view = $view;
	}

    /**
    * Implement the parent update() method checking the state
    * of the observable subject
    * @return void
    */
    function update () {
        if ( $this->subject->getState() == 'FINISHED_DASH' ) {
        	$this->loadDash();
        }
    }
    
    /**
     * Loads a jQuery based dashboard.
     */
    private function loadDash(){
    	
    	//Checks for update
    	$data = $this->checkForUpdate();
    	
    	//If no update available.
    	if(empty($data)){
    		$this->view->setErrorData("success", "Welcome to the new ContentMadeSimple 1.0.0 Release Candidate 1, visit the <a href='http://norox.org/cms' target='_blank'>ContentMadeSimple Website</a> for help / questions");
    	}else{
    		$this->view->setErrorData("error", $data);	
    	}
    	
    	//Buttons.
    	$out = "<fieldset><table width='10%'><tr>";
    	
    	//Count items
    	$i = 0;
    	
    	if($this->hasBlog()){
    		$i++;
    		//Creates an icon for the blog
    		$out .= $this->createIcon(
    									"index.php?system=Modules&page=admin&active=Blog", 
    									"modules/Blog/logo.png",
    									"Blog"
    								 );
    	}
    	
    	if($this->hasMenu()){
    		$i++;
    		//Creates icon for the menu
    		$out .= $this->createIcon(
    									"index.php?system=Modules&page=admin&active=Menu", 
    									"modules/Menu/logo.png",
    									"Menu"
    								 );
    	}
    	
    	if($this->hasBackup()){
    		$i++;
    		//Creates icon for the menu
    		$out .= $this->createIcon(
    									"index.php?system=Modules&page=admin&active=Backup", 
    									"modules/Backup/logo.png",
    									"Backup"
    								 );
    	}
    	
    	//Adds an icon for the template
    	if($i<6){
    		$i++;
      		$out .= $this->createIcon(
    									"index.php?system=Template&page=change", 
    									"style/comps/admin/img/templates.png",
    									"Styles"
    								 );
    	}
    	
    	$out .= "</tr></table></fieldset>";
    	
    	$out .= "<fieldset>";
    	
    	$this->getView()->getMeta()->appendExtra('
    		<script type="text/javascript">
    		<!--
    		$(document).ready(function() {
    			$("#loadNews").load("index.php?system=Modules&page=admin&active=Dashboard&req=news");
    		});
    		-->
    		</script>
    	');
    	
    	$out .= "<p id='loadNews'><strong>Loading News...</strong></p>";
    	
    	$out .= "</fieldset>";
    	
    	//Sets the content of the dashboard.
    	$this->getView()->setContent($out);
    }
    
    private function hasBlog(){
    	return file_exists("data/modules/Blog/starter.dat");	
    }
    
    private function hasMenu(){
    	return is_dir("data/modules/Menu");	
    }
    
    private function hasBackup(){
    	return is_dir("data/modules/Backup");	
    }
    
    /**
     *
     */
    private function checkForUpdate(){
    	$data = "";
    	if(!isset($_SESSION['versionCheck'])){
	    	include("core/lib/RemoteFiles.php");
	    	
	    	$rf = new RemoteFiles();
	    	
	    	//Get version of CMS
	    	$v = $this->getView()->getController()->getVersion();
	    	
	    	$data = $rf->getURL("http://norox.org/coreupgrade/updateCheck.php?v=".$v);
	    	
	    	$_SESSION['versionCheck'] = $data;
    	}else{
    		$data = $_SESSION['versionCheck'];
    	}
    	return $data;
    }
    
    /**
     * Gets the view
     */
    private function getView(){
    	return $this->view;	
    }
    
    /**
     * Creates a block with image and title
     */
    private function createIcon($url, $imgUrl, $title){
    	return "<td><div style='background-color: #ffffff;width: 97px;border: 1px solid #e3e3e3;margin-bottom: 5px;'><a href='".$url."'><img style='padding-left: 4px;border-style: none;' src='".$imgUrl."' alt='Module Image' /></a><br /><p style='text-align:center; font-size: 13.5px;margin-top: 0px;'><a href='".$url."'>".$title."</a></p></div></td>";
    }
}
 
?>
