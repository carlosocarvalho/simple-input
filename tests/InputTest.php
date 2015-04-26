<?php

require_once '../src/input.php';


use Carlosocarvalho\SimpleInput\Input;


class InputTest extends PHPUnit_Framework_TestCase{


   
   
	public function testSuccessFalseDataInput(){
		
		$this->assertFalse(false);
	}
	
	
	public function testFailFalseDataInput(){
		
		$this->assertTrue(true);
	}
}
