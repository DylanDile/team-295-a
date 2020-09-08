<?php
include_once('classes/Payment.php');
$result  =  new Payment();
if(isset($_GET['branch_id']))
{	
	$branch_id = $_GET["branch_id"];
	echo $result->get_all_payments($branch_id);
}
else
{
	echo "Please provide you Branch ID";
}
//GR191151 
?>