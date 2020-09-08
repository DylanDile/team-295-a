<?php
include_once('classes/Member.php');
$member  =  new Member();
if(isset($_GET['branch_id']))
{	
	$branch_id = $_GET["branch_id"];
	echo $member->get_all_members($branch_id);
}
else
{
	echo "Please provide you Branch ID";
}

//GR191151 
?>