<?php 
$con = mysqli_connect("localhost","root","","gusto");


$name = $_POST['name'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$message = $_POST['message'];

INSERT INTO `reservation`(`S.No.`, `name`, `contact no.`, `email`, `message`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')

$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Thanks for your Reservation";
}

?>
