<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ValidatePassTest
 *
 * @author PC101
 */
class ValidatePassTest Extends PHPUnit_Framework_testCase {
       public function testValidLength(){
            $valpass = new ValidatePass();
            $this->assertFalse($valpass->validLength('1234'));
       }
    //put your code here
}
