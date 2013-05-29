<?php
/**
 *  Base Observerable class
 */
class Observable {
    /**
    * Private
    * $observers an array of Observer objects to notify
    */
    var $observers;

    /**
    * Private
    * $state store the state of this observable object
    */
    var $state;

    //! A constructor
    /**
    * Constructs the Observerable object
    */
    function Observable () {
        $this->observers=array();
    }

    //! An accessor
    /**
    * Calls the update() function using the reference to each
    * registered observer - used by children of Observable
    * @return void
    */ 
    function notifyObservers () {
        $observers=count($this->observers);
        for ($i=0;$i<$observers;$i++) {
            $this->observers[$i]->update();
        }
    }

    //! An accessor
    /**
    * Register the reference to an object object
    * @return void
    */ 
    function addObserver (& $observer) {
        $this->observers[]=& $observer;
    }

    //! An accessor
    /**
    * Returns the current value of the state property
    * @return mixed
    */ 
    function getState () {
        return $this->state;
    }

    //! An accessor
    /**
    * Assigns a value to state property
    * @param $state mixed variable to store
    * @return void
    */ 
    function setState ($state) {
        $this->state=$state;
    }
}
?>