<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Unbenanntes Dokument</title>
</head>

<body>

<div class="container">
	<div class="row">
    	<div class="col-md-6">
    		
            <table class="table">
            	<thead class="">
                	<tr>
                    	<th>ID</th>
                    	<th>Name</th>
                        <th>Datum</th>
                        <th>Foto</th>
                        <th>Quelle</th>                    
                	</tr>
                </thead>
                
      <?php
	  	
		//Create Connection with Mysql Database
		$con = mysqli_connect("localhost", "web13_usr", "Ueuj114~", "kuebomare");
		
		if (!$con)
		{
		 echo 'Not COnnected TO Server';
		}
	  
	  	//Select Database
		if (!mysqli_select_db($con, 'kuebomare'))
	  	{
			echo 'Database Not Selected';
		}
		
		//Select Query
			$sql = "SELECT ID, name, date, foto, source FROM foto_DB";
			$result = $con-> query($sql);
			
			if ($result-> num_rows > 0) {
				while ($row = $result-> fetch_assoc())
				{
					echo "<tr><td>".$row["ID"]."</td>
							<td>".$row["name"]."</td>
							<td>".$row["date"]."</td>
							<td>".$row["foto"]."</td>
							<td>".$row["source"]."</td></tr>";
				}
					echo "</table>";
		}
					else {
						echo "0 result";
				}
						$con-> close();			
	  ?>
            
            </table>
        
        </div>
    </div>
</div>


</body>
</html>