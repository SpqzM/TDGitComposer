<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ValidatePass
 *
 * @author PC101
 */
class ValidatePass {
    const MINXLGT = 6;
    const MAXLGT = 20;
    public function ValidLength($pass){
        $passlength = strlen($pass);
        if($passlength >= self::MINLGT && $passlength <= self::MAXLGT){
            return true;
        }
        else {
            return false;
        }
    }
    //put your code here
}
