<?php

namespace HellobillTest\cases;

class SampleTest extends \HellobillTest\Src\BaseModel
{


	public function testParent(){
		$this->assertSame($this->functionok(), "function ok");

	}
	public function testEnvironment(){
		$this->assertSame(getenv('BaseURL'), "firefox");
	}

	public function testData1()
	{

		$string = file_get_contents(__DIR__.'/data/sample-data/posted-data.json');
		$result = json_decode($string, true);


		$string = file_get_contents(__DIR__."/data/sample-data/expected-result.json");
		$expected = json_decode($string, true);


	    $this->assertSame($expected,$result);
	}

	public function testData2()
	{
		$string = file_get_contents(__DIR__."/data/sample-data/posted-data.json");
		$result = json_decode($string, true);


		$string = file_get_contents(__DIR__."/data/sample-data/expected-result.json");
		$expected = json_decode($string, true);

	    $this->assertSame($expected,$result);
	}



	public function testIsPostedDataSameWithResult(){


		$postdata = file_get_contents(__DIR__."/data/sample-data/posted-data.json");
		$opts = array('http' =>
		    array(
		        'method'  => 'POST',
		        'header'  => 'Content-type: application/json',
		        'content' => $postdata
		    )
		);
		$context  = stream_context_create($opts);

		$result = file_get_contents('http://hellobill.co.id/core/services/index.php/script/testing/test_unit', false, $context);
		$result = json_decode($result,true);




		$string = file_get_contents(__DIR__."/data/sample-data/expected-result.json");
		$expected = json_decode($string, true);

	    $this->assertSame($expected, $result);


	}




}


?>