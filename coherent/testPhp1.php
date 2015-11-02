<?php
$hello = new test();
$hello->add("hello mengyunzhi");
$hello->add("<br />hello 119");
$hello->show();
/**
* PHP字符串输出
*/
class test
{
	private $chars;
	public function add($string)
	{
		$this->chars .= $string;
	}

	public function show()
	{
		echo $this->chars;
	}
}