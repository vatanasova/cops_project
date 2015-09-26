<?php
/**
 * Class containing unit tests for Math class
 *
 * @author Victoria
 */
require_once 'Math.php';

class mathTest extends PHPUnit_Framework_TestCase {
    public $math;
    
    /**
     * @before
     */
    public function setupTest() {
        $this->math = new Math();
    } 
}
