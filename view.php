<?php
include_once 'header.php';
$sql = "Select * from medicine ORDER BY expiery ASC";
$rs = $conn->query($sql);
?>
  
        <h1>View</h1>
    </section>

    <!----------------------View ------------------->
    <section class="view">
    <div style="padding-top:50px; overflow-y: scroll; height:250px;">
	<table class="tList">
		<tr>
			<td>
				name
			</td>	
			<td>
				Production
			</td>
			<td>
				Expiery
			</td>
			<td>
				Amount
			</td>
		</tr>
		<?php 
				while($r = $rs->fetch_array())
				{
					echo "<tr>";
				
					
					echo "<td>";
					echo $r['name'];
					echo "</td>";
					
					echo "<td>";
					echo $r['production'];
					echo "</td>";
					
					echo "<td>";
					echo $r['expiery'];
					echo "</td>";
					
					echo "<td>";
					echo $r['amount'];
					echo "</td>";					
					
					echo "</tr>";

				}

		?>
	</table>
	</div>
        
        
        
        
	</section>
      <?php
include_once 'footer.php';

?>