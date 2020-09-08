<?php 
Class Login{ 
 private $con;
 public function __construct(){
 	 include "inc/config.php";
     $this->con = $connection;	 	
 }

 public function login($email, $password)
 {
    $json = null;
    $query = "SELECT * FROM `tbl_users` WHERE Email = '$email' AND Password = '$password' ";
    $result = mysqli_query($this->con, $query);

    if($result->num_rows > 0)
    {
        $arrayCovers = array();
        $obj = mysqli_fetch_assoc($result);
        $email = $obj["Email"];
        $pass = $obj["Password"];
        $role = $obj["UserRole"];
        $status = $obj["UserStatus"];
        $type = $obj["UserType"];

        $newArray = array(
            'Email' => $email, 
            'Password' => $pass,
            'UserRole' => $role,
            'UserStatus' => $status,
            'UserType' => $type
        );     
        $json = json_encode($newArray);
    } 
    else 
    {
      $json = false;
    }

    return $json;
 }


}

