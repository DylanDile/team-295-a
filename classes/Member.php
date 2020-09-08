<?php 

Class Member{ 
 private $con;
 public function __construct(){ 
     include "inc/config.php";
	 $this->con = $connection;
 }
// Select or Read data
public function get_all_new_members($branch_id)
{
	$json = null;
    $query = "SELECT * FROM `members` WHERE BranchID = '$branch_id' and AccStatus = 'NEW' ";
	$result = mysqli_query($this->con, $query);

    if($result->num_rows > 0)
    {
    	$arrayCovers = array();
        $counter = $result->num_rows;
        for ($i=0; $i < $counter; $i++) { 
            $obj = mysqli_fetch_assoc($result);
            $newArray = array(
                'MemberID' => $obj["MemberID"],
                'FirstName' => $obj["FirstName"],
                'LastName' => $obj["LastName"],
                'DOB' => $obj["DOB"],
                'Gender' => $obj["Gender"],
                'IDNumber' => $obj["IDNumber"],
                'MaritalStatus' => $obj["MaritalStatus"],
                'Email' => $obj["Email"],
                'CellNumber ' => $obj["CellNumber"],
                'Address' => $obj["Address"],
                'JoiningDate' => $obj["JoiningDate"],
                'MemberPic' => $obj["MemberPic"],
                'AccStatus' => $obj["AccStatus"],

            );      
            $arrayCovers += [$i => $newArray];      
          }

          $json = json_encode($arrayCovers);
    } 
    else 
    {
      $json = false;
    }

    return $json;
 }
public function get_all_members($branch_id)
{
    $json = null;
    $query = "SELECT * FROM `members` WHERE BranchID = '$branch_id' ";
    $result = mysqli_query($this->con, $query);

    if($result->num_rows > 0)
    {
        $arrayCovers = array();
        $counter = $result->num_rows;
        for ($i=0; $i < $counter; $i++) { 
            $obj = mysqli_fetch_assoc($result);
            $newArray = array(
                'MemberID' => $obj["MemberID"],
                'FirstName' => $obj["FirstName"],
                'LastName' => $obj["LastName"],
                'DOB' => $obj["DOB"],
                'Gender' => $obj["Gender"],
                'IDNumber' => $obj["IDNumber"],
                'MaritalStatus' => $obj["MaritalStatus"],
                'Email' => $obj["Email"],
                'CellNumber ' => $obj["CellNumber"],
                'Address' => $obj["Address"],
                'JoiningDate' => $obj["JoiningDate"],
                'MemberPic' => $obj["MemberPic"],
                'AccStatus' => $obj["AccStatus"],

            );      
            $arrayCovers += [$i => $newArray];      
          }

          $json = json_encode($arrayCovers);
    } 
    else 
    {
      $json = false;
    }

    return $json;
 }

}