<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Unbenanntes Dokument</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body>
<form>
<div class="container" align="center">
	<div class="row">
    	<div class="col-md-12">
    		
            <table class="table table-striped">
            	<thead>
                	<tr>
                    	<th>ID</th>
                    	<th>Titel</th>
                        <th>Datum</th>
                        <th>Autor</th>
                        <th>Information</th>                    
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
			$sql = "SELECT ID, name, date, foto, source FROM info_DB";
			$result = $con-> query($sql);
			
			if ($result-> num_rows > 0) {
				while ($row = $result-> fetch_assoc())
				{
					echo "<tr><td>".$row["ID"]."</td>
							<td>".$row["titel"]."</td>
							<td>".$row["date "]."</td>
							<td>".$row["author "]."</td>
							<td>".$row["fotoid"]."</td>
							<td>".$row["text"]."</td></tr>";
				}
					echo "</table>";
		}
					else {
						echo "0 result";
				}
						$con-> close();			
	  ?>
            
          
      <button formaction="form_info.php" class="btn btn-secondary btn-lg btn-block">Zurück zum Input</button>
            </table>
       
        </div>
    </div>
    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> 
    
    
</div>

</form>
</body>
</html>