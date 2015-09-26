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
    
    /**
     * @test
     */
    public function rectanglePerimeterTestResult(){
        $res = $this->math->rectanglePerimeter(2, 3);
        $this->assertEquals(10, $res);
    }
      
    /**
     * @test
     * @expectedException     MyException
     * @expectedExceptionCode 1
     */
    public function rectanglePerimeterTestFirstParamNull(){
        $this->math->rectanglePerimeter(NULL, 4.5);
    }
    
    /**
     * @test
     * @expectedException     MyException
     * @expectedExceptionCode 2
     */
    public function rectanglePerimeterTestSecondParamNull(){
        $this->math->rectanglePerimeter(3, NULL);
    }
    
    /**
     * @test
     * @expectedException     MyException
     * @expectedExceptionCode 3
     */
    public function rectanglePerimeterTestFirstParamNumber(){
        $this->math->rectanglePerimeter('alabala', 7);
    }
    
    /**
     * @test
     * @expectedException     MyException
     * @expectedExceptionCode 4
     */
    public function rectanglePerimeterTestSecondParamNumber(){
        $this->math->rectanglePerimeter(10, 'blablabla');
    }
    
    /**
     * @test
     * @expectedException     MyException
     * @expectedExceptionCode 5
     */
    public function rectanglePerimeterTestFirstParamLessZero(){
        $this->math->rectanglePerimeter(-5, 7);
    }
    
    /**
     * @test
     * @expectedException     MyException
     * @expectedExceptionCode 6
     */
    public function rectanglePerimeterTestSecondParamLessZero(){
        $this->math->rectanglePerimeter(5, -7);
    }
    
    /**
     * @test
     * @expectedException     MyException
     * @expectedExceptionCode 5
     */
    public function rectanglePerimeterTestFirstParamZero(){
        $this->math->rectanglePerimeter(0, 7);
    }
    
    /**
     * @test
     * @expectedException     MyException
     * @expectedExceptionCode 6
     */
    public function rectanglePerimeterTestSecondParamZero(){
        $this->math->rectanglePerimeter(9, 0);
    }
}
