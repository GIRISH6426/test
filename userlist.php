
<?php
include('config.php');
if(isset($_GET['id'])){
//$id=$_GET['id'];

}

if(isset($_POST["SUBMIT"]))
{
	$username = $_POST['username'];
	$address = $_POST['address'];
	$mobileno = $_POST['mobileno'];
        $emailid = $_POST['emailid'];
	$companyname = $_POST['companyname'];
        $id = $_POST['id'];
         
    //extract($_POST);
   
 if($id>0){
        //update
     
        user_update($username, $address, $mobileno, $companyname, $emailid, $id);
 }else{
	
      
	user_insert($username,$address,$mobileno,$companyname,$emailid);
        
 }
        
       
        }
	
        
  //delete
         
        user_delete($username,$address,$mobileno,$companyname,$emailid);  
        
$query=get_user();
?>
<table Border ="1">
	<tr>
		<TD>S.N.</TD>
		<TD>Name</TD>
		<TD>Address</TD>
                <TD>Mobile Number</TD>
		<TD>E-mail</TD>
                <td>Company Name</td>
                <td colspan="2">Action</td>
	</TR>
	<TR>
	<?php $i =1;
		while($res = mysqli_fetch_array($query))
		{
			//print  "<PRE>";print_r($res);

             print "<TD>".$i."</TD>";
			print "<TD>".$res['username']."</TD>".
			"<TD>".$res['address']."</TD>".
                        "<TD>".$res['mobile']."</TD>".
                        "<TD>".$res['email']."</TD>".
                        "<TD>".$res['company']."</TD>".
                        "<TD><a href='register.php?id=".$res["id"]."'>Edit</a></TD>".
                        "<TD><a href='userlist.php?id=".$res["id"]."'> Delete </a></TD>";
                        
                        
			Print "</TR><TR>";
			$i++;
         }
		 
			
		
	
	?>
	</TR>
	</TABLE>

<a href="register.php">go to home page</a>