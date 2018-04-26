<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CalculatorPHP;

/**
 * Description of calculator
 *
 * @author Veronica quintero <quinteroveronica954@gmail.com>
 */
class calculator {
    //put your code here
    
    /**
     * Number one for the operation
     * 
     * @var float
     */
    private $number1;
    
    /**
     * Number two for the operation
     * 
     * @var float
     */
    private $number2;
    /**
     * Return the number 1
     * 
     * @return float
     */
    
   public function getNumber1():  float
    {
        return $this->number1;
    }
    /**
     * Return the number 2
     * 
     * @return float
     */
    public function getNumber2() : float 
    {
        return $this->number2;
    }
    /**
     * Set the number 1
     * 
     * @param float $number1
     */
    public function setNumber1(float $number1) {
        $this->number1 = $number1;
    }
    /**
     * set the number 2
     * 
     * @param float $number2
     */
       
    public function setNumber2(float $number2) {
        $this->number2 = $number2;
    }
    /**
     * return the sum
     *  
     * @return float    
     */
        public function sum(): float
    {
        return $this->number1 + $this->number2;
    }
    /**
     * return the rest
     * 
     * @return float
     */
    public function rest(): float
    {
        return $this->number1 - $this->number2;
    }
    /**
     * return the mult
     * 
     * @return float
     */
    public function mult(): float
    {
        return $this->number1 * $this->number2;
    }
    /**
     * return the div
     * 
     * @return float
     */
    public function div(): float
    {
        return $this->number1 / $this->number2;
    }
    /**
     * return the mod
     * 
     * @return float
     */
    public function mod(): float
    {
        return $this->number1 % $this->number2;
                    }
     /**
      * return the log
      * 
      * @return float
      */               
      public function log(): float
    {
        return log($this->number1);
    }
    /**
     * return the x^2
     * 
     * @return float
     */
      public function x2(): float
    {
        return $this->number1 * $this->number1;
    }
    /**
     * return the x^y
     * 
     * @return float
     */
     public function xy(): float
    {
        return pow($this->number1, $this->number2);
    }
    /**
     * return the sqrt2
     * 
     * @return float
     */
       public function sqrt2(): float
    {
        return sqrt($this->number1);
    }
    /**
     * return the sqrty
     * 
     * @return float
     */
    public function sqrty(): float
    {
        return pow($this->number1, (1/$this->number2));
    }
}



