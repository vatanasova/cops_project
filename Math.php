<?php
require_once 'MyException.php';

/**
 * Class containing methods for geometric calculations
 *
 * @author Victoria
 */
class Math {
    /**
     * Checks if input parameter is NULL
     * @param type $param
     * @param string $message
     * @param numeric $code
     * @throws MyException
     */
    public function checkIsNull($param, $message, $code){
        if($param === NULL){
            throw new MyException($message, $code);
        }
    }
     
    /**
     * Checks if input parameter is numeric
     * @param type $param
     * @param string $message
     * @param numeric $code
     * @throws MyException
     */
    public function checkIsNumeric($param, $message, $code){
        if(!is_numeric($param)){
            throw new MyException($message, $code);
        }
    }
    
    /**
     * Checks if input parameter is positive
     * @param numeric $param
     * @param string $message
     * @param numeric $code
     * @throws MyException
     */
    public function checkIsPositive($param, $message, $code){
        if($param <= 0){
            throw new MyException($message, $code);
        }
    }
    
    /**
     * Calculates rectangle perimeter
     * @param numeric $a
     * @param numeric $b
     * @return numeric perimeter
     */
    public function rectanglePerimeter($a,$b){
        $this->checkIsNull($a, "NULL parameter is not allowed", 1);
        $this->checkIsNull($b, "NULL parameter is not allowed", 2);
        $this->checkIsNumeric($a, "Parameters should be valid numeric values", 3);
        $this->checkIsNumeric($b, "Parameters should be valid numeric values", 4);
        $this->checkIsPositive($a, "Parameters should be greater than zero", 5);
        $this->checkIsPositive($b, "Parameters should be greater than zero", 6);
        
        $p = 2*($a + $b);
        return $p;
    }
    
    /**
     * Calculates square area
     * @param numeric $a
     */
    public function squareArea($a){}
    
    /**
     * Calculates circle area
     * @param numeric $r
     */
    public function circleArea($r){}
}
