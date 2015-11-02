<?php
$hello = new test();
$hello->add("<br />hello mengyunzhi")->add("<br />hello 119")->show()->add("<br />hello 119")->show();
/**
* 
*/
class test
{
	private $chars;
	public function add($string)
	{
		$this->chars .= $string;
		return $this;
	}

	public function show()
	{
		echo $this->chars;
		return $this;
	}
}