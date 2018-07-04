<?php
include_once('index.php');
class MessageBoard{
	var $message = array();

	function __construct(){
		$this->receivem();
		$this->loadm();
		$this->showam();
		$this->showform();
}
	function receivem(){
		if(count($_POST) != 0)
		{
			$this->savem($_POST['username'], date("Y-m-d h:i:s", time()), $_POST['content']);
		}
}
	function savem($n, $t, $c){
		echo "Username: ".$n."<br>";
		echo "time: ".$t."<br>";
		echo "Message: ".$c."<br>";
}
	function loadm(){
		$temp = new message("rong", "2018-06-21","pinapple pinapple pinapple.");
		array_push($this->message, $temp);
		$temp = new message("KK", "2018-06-23", "I am Kk.");
		array_push($this->message, $temp);
}
	function showam(){
		foreach($this->message as $m){
			$m->show();
}
}
	function showform(){
		echo "<form action='' method='POST' >";
		echo "Name: "."<input type='text' name='username'><br>";
		echo "Content: "."<input type='text' name='content'><br>";
		echo "<input type='submit' name='submit' value='Post Message'>";
		echo "</form>";
}	
}

//implement
$mb=new MessageBoard();

?>
