<?php
include('connect.php'); 

//test to see if username is letter&numbers
$test=$_POST['username'];
$test1=$_POST['firstname'];
$test2=$_POST['lastname'];
$test3=$_POST['password'];

if(ctype_alnum($test)){ 
//echo "<br>username accept";
//check to see if username in use
$query="SELECT `uname` FROM `rzheng`.`user` WHERE `uname` = '$test'";
$result=mysqli_query($conn, $query);
$num=mysqli_num_rows($result);


if ($num == 0)
{
echo "<br>search result: $num; username $test is not in use";
$sql = "INSERT INTO `rzheng`.`user`(`uname`,`firstname`, `lastname`, `password`)
VALUES ('$test', '$test1', '$test2','$test3')";

if ($conn->query($sql) === TRUE) {
    echo "<br>******New user created successfully.******";
} else {
    echo "Error: " . $sql . "<br>The test data added already<br>" . $conn->error;
}

//display results
$sql = "SELECT `ID`, `firstname`, `lastname` FROM `rzheng`.`user`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br>id: " . $row["ID"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}

}else
{
echo "<br>search result: $num; username in use";
}
}else{
echo "<br>username: must contain all letters or digits";
}



if(ctype_alnum($test1)){ 
//echo "<br>firstname accept";
}else{
echo "<br>firstname: must contain all letters or digits";
}

if(ctype_alnum($test2)){ 
//echo "<br>lastname accept";
}else{
echo "<br>lastname: must contain all letters or digits";
}


?>
