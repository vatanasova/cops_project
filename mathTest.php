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
    
    /**
     * @test
     */
    public function squareAreaTestResult() {
        $res = $this->math->squareArea(5);
        $this->assertEquals(25, $res);
    }
    
     /**
     * @test
     * @expectedException     MyException
     * @expectedExceptionCode 1
     */
    public function squareAreaTestParamNull(){
        $this->math->squareArea(NULL);
    }
    
    /**
     * @test
     * @expectedException     MyException
     * @expectedExceptionCode 3
     */
    public function squareAreaTestParamNumber(){
        $this->math->squareArea('qwerty');
    }
    
    /**
     * @test
     * @expectedException     MyException
     * @expectedExceptionCode 5
     */
    public function squareAreaTestParamLessZero(){
        $this->math->squareArea(-5);
    }
    
    /**
     * @test
     * @expectedException     MyException
     * @expectedExceptionCode 5
     */
    public function squareAreaTestParamZero(){
        $this->math->squareArea(0);
    }
    
    /**
     * @test
     */
    public function circleAreaTestResult() {
        $res = $this->math->circleArea(3);
        $this->assertGreaterThan(28.26, $res);
        $this->assertLessThan(28.28, $res);
    }
    
     /**
     * @test
     * @expectedException     MyException
     * @expectedExceptionCode 1
     */
    public function circleAreaTestParamNull(){
        $this->math->circleArea(NULL);
    }
    
    /**
     * @test
     * @expectedException     MyException
     * @expectedExceptionCode 3
     */
    public function circleAreaTestParamNumber(){
        $this->math->circleArea('qwerty');
    }
    
    /**
     * @test
     * @expectedException     MyException
     * @expectedExceptionCode 5
     */
    public function circleAreaTestParamLessZero(){
        $this->math->circleArea(-9);
    }
    
    /**
     * @test
     * @expectedException     MyException
     * @expectedExceptionCode 5
     */
    public function circleAreaTestParamZero(){
        $this->math->circleArea(0);
    }
}
