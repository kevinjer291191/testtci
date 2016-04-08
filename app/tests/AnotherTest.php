<?php

class AnotherTest extends \PHPUnit_Framework_TestCase
{
	public function test()
	{
	    $foo = true;
	    $this->assertTrue($foo);
	}
	public function test2()
	{
	    $foo = true;


	    $this->assertTrue($foo);
	}

	public function test3(){

		$data["data1"] = 1;
		$data["data2"] = 2;
		$detail["data1"] = 1;
		$detail["data2"] = 2;
		$data["detail"] = $detail;
		
		$data_expected["data1"] = 1;
		$data_expected["data2"] = 2;
		$detail_expected["data1"] = 1;
		$detail_expected["data2"] = 2;
		$data_expected["detail"] = $detail_expected;

		$this->assertEquals($data, $data_expected);
	}
	
	public function test4(){

		$data["data1"] = 2;
		$data["data2"] = 2;
		$detail["data1"] = 5;
		$detail["data2"] = 2;
		$data["detail"] = $detail;
		
		$data_expected["data1"] = 1;
		$data_expected["data2"] = 2;
		$detail_expected["data1"] = 1;
		$detail_expected["data2"] = 2;
		$data_expected["detail"] = $detail_expected;

		$this->assertEquals($data, $data_expected);
	}

	public function test5(){

		$data["data2"] = 2;
		$detail["data1"] = 5;
		$detail["data2"] = 2;
		$data["detail"] = $detail;
		
		$data_expected["data1"] = 1;
		$data_expected["data2"] = 2;
		$detail_expected["data1"] = 1;
		$detail_expected["data2"] = 2;
		$data_expected["detail"] = $detail_expected;

		$this->assertEquals($data, $data_expected);
	}

}


?>