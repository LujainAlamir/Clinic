<?php
include_once 'header.php';



?>
  
        <h1>Add and Delete</h1>
    </section>
<?php 
if($_SERVER["REQUEST_METHOD"] == "POST") {
	if(isset($_POST['submit'])){
		$medName=mysqli_real_escape_string($conn,$_POST['name']);
		$pdate=$_POST['PD'];
		$edate=$_POST['ED'];
		$amount=$_POST['amount'];
		
		$errors = [];
	    if(empty($medName)){
			$errors[] = "Medicine cannot be empty";
	    }
	    if(empty($pdate)){
			$errors[] = "Production  cannot be empty";
		}
		if(empty($edate)){
			$errors[] = "Expiery  cannot be empty";
		}
		if(empty($amount)){
			$errors[] = "Amount cannot be empty";
		}
		if(!empty($amount) && $amount < 1){
			$errors[] = "Amount cannot be less than 1";
		}
	   if(!empty($errors)) {
			foreach ($errors as $error) {
				echo $error;
			}
	   } else {
		$sql = "INSERT INTO medicine (name, production, expiery, amount) VALUES ( '" 
			. $medName ."', '"
			. $pdate ."', '"
			. $edate ."', '"
			. $amount ."')";
			if ($conn->query($sql) === TRUE) 
			{
				echo "<center> Medicine has been added successfully .. </center>";
			} else 
			{
				echo "Error: " . $sql . $conn->error;
			}
	   }
	}
}
?>
    <!----------------------Sign In ------------------->
    <section class="alter">
        <form action="alter.php" method="post">
			<input type="text" name="name" placeholder="Medicine name" required>
			<input type="date" name="PD" placeholder="Production Date" required>
			<input type="date" name="ED" placeholder="Expiery Date" required>
			<input type="number" name="amount" placeholder="Amount" required>
			<button type="Submit" name="submit" class="hero-btn red-btn">ADD</button>
		</form>
    
        
    </section>

    
      <?php
	  
include_once 'footer.php';

?>