<?php
function connection(){
$host='localhost';
$user='root';
$pass='';

$conn = mysqli_connect($host,$user,$pass,"help");

//$db= mysqli_select_db();
/*
if
($conn)
{
	echo "successfully conneted";
}
else
{
	echo "not connected";
}*/
return $conn;
}


 





$i = 10;
function get_user(){ 
     $conn = connection();
		//print $conn; die;
		$sql='select * from registration`';
		$query=mysqli_query($conn,$sql);
		mysqli_num_rows($query);
		return $query;
	}	

        function select_user_data($id){ 
     $conn = connection();
		//print $conn; die;
		$sql='select * from registration where id="'.$id.'"';
		$query=mysqli_query($conn,$sql);
		$result=mysqli_fetch_assoc($query);
		return $result;
	}

function user_insert($username,$address,$mobileno,$companyname,$emailid){
$conn = connection();

$query="INSERT INTO registration(id, username, address, mobile, email, company)
VALUES (NULL,'$username','$address','$mobileno','$emailid','$companyname')";

$insert=mysqli_query($conn, $query);
if($insert)
   {
	
	$message ="Inserted successfully";
   }
else
    {
	$message ="Not inserted";
	
     }
return $message;

    }
	
	

    function user_update($username,$address,$mobileno,$companyname,$emailid,$id){
$conn = connection();
//$id=$_GET['id'];



 $query="update registration set  username='$username', address='$address', mobile='$mobile', email='$email' WHERE id = '$id'";

$update=mysqli_query($conn, $query);
if($update)
   {
	
	$message ="Inserted successfully";
   }
else
    {
	$message ="Not inserted";
	
     }
return $message;

    }

    
    
     function user_delete($username,$address,$mobileno,$companyname,$emailid){
$conn = connection();

 if(isset($_GET['id'])){
                        $id=$_GET['id'];
                        }      

       
$query="DELETE FROM registration  WHERE id='$id'";
//$query = "DELETE FROM `registration` WHERE id= '$id'";

$delete=mysqli_query($conn, $query);
if($delete)
   {
	
	$message ="Deleted successfully";
   }
else
    {
	$message ="Not Deletted";
	
     }
return $message;

    }   
    
    
    
    
    
?>
