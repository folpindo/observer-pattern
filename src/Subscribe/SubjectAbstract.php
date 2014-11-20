<?php

namespace Subscribe;

abstract class SubjectAbstract implements \SplSubject
{
    protected $_observers;
    
    public function attach(\SplObserver $observer) {
        $this->_observers[$observer->getKey()] = $observer;
    }
    
    public function detach(\SplObserver $observer) {
        $key = $observer->getKey();
        if(isset($this->_observers[$key])){
            unset($this->_observers[$key]);
        }
    }
    
    public function notify(){
        $observers = $this->_observers;
        foreach ($observers as $observer) {
            $observer->update();
        }
    }
}