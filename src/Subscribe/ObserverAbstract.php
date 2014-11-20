<?php

namespace Subscribe;

abstract class ObserverAbstract implements \SplObserver {

    abstract public function update(\SplSubject $subject);

}
