<?php

require_once './src/Input.php';

ini_set('display_errors',1);

use Carlosocarvalho\SimpleInput\Input\Input;


class InputTest extends PHPUnit_Framework_TestCase{


   
    
	public function testSuccessFalseDataInput(){
		
		$this->assertFalse(Input::post('login'));
	}
	
	
	public function testFailFalseDataInput(){
		
		$this->assertTrue(true);
	}
}
