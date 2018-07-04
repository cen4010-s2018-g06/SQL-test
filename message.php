<?php
class Message{
	var $name;
	var $time;
	var $content;

	function __construct($n, $t, $c)
	{
	$this->name = $n;
	$this->time = $t;
	$this->content = $c;
	}

	function show()
	{
	echo "Name: " .$this->name."<br>";
	echo "Time: " .$this->time."<br>";
	echo "Message: " .$this->content."<br>";
	echo "=======================================";
	}
}

$m = new Message("Rong","2018-06-20", "I am Rong.");
echo $m->show();

//var_dump($m);
?>
