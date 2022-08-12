<?php
include_once 'header.php';
$message="";
$errormsg="";
	
    if($_SERVER["REQUEST_METHOD"] == "POST") {
       
         $myusername = mysqli_real_escape_string($conn,$_POST['uid']);
         $mypassword = mysqli_real_escape_string($conn,$_POST['pwd']); 

         $sql = "SELECT * FROM signin WHERE username = '$myusername' AND pass='$mypassword'";
         $result = mysqli_query($conn,$sql);
         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
         $count = mysqli_num_rows($result);
	  
	     if($count==1){
                
            
                $_SESSION['username'] = $myusername;
				$_SESSION['id'] = $row['id'];
				
                header("location: index.php");
              
				
                
            }else{
                
                $message = "username or password is Incorrect!!  ";
            }
			
			 
    }	

?>
  
        <h1>Sign In</h1>
    </section>

    <!----------------------Sign In ------------------->
    <section class="sign-in">
	<h2 style="color:red;"><?php echo $message; ?> </h2>
        <form action="" method="post">
            
                
                <input type="text" name="uid" placeholder="Enter Your username" required>
                <input type="password" name="pwd" placeholder="Enter Your password" required>
                <button type="Submit" name="submit" class="hero-btn red-btn" style="width:200px;">Log In</button>
                </form>
    
        
	</section>
      <?php
include_once 'footer.php';

?>