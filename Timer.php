<?php

/**
 * Tracks script execution time
 *
 * @author Nadim Dahdouli
 * @version 1.0.0
 */
class Timer {

    private $_start;
    private $_stop;
    
    /**
     * Starts tracking execution time
     */
    public function start() {
        $this->_start = microtime(true);
    }

    /**
     * Stops tracking execution time
     * 
     * @return float Returns total execution time
     */
    public function stop() {
        $this->_stop = microtime(true);
        return $this->_stop - $this->_start;
    }

}
