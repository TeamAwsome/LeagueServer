<?php
 $query = $mysqli->query("select TeamName, Wins, Losses, TeamStatus, TeamID from Teams");
 $count = $query->num_rows;
  
 if($count == 0) echo "<h2 style='text-align:center;'> No Teams Found</h2>";
 else{
 	 
    //print header of table	 
     echo "<div class='table-responsive'><table class='table table-bordered'> <thead><tr><th>Team Name</th><th>Wins</th><th>Losses</th><th>Status</th>
<th> </th></tr></thead><tbody>";	 
      
   while ($row = $query->fetch_assoc()) 
   {     
     echo "<tr>";
     echo "<td>".$row['TeamName']."</td>";  
     echo "<td><span class='badge win'>".$row['Wins']."</span></td>";
     echo "<td><span class='badge loss'>".$row['Losses']."</span></td>";
     echo "<td>".$row['TeamStatus']."</td>";
     echo "<td><a class='team_profile' id='".$row['TeamID']."' href='#'>view profile</a></td>";
     echo "</tr>";           
   } 	 
 	 echo " </tbody></table></div>";
 }

?>



	    
		  
		
