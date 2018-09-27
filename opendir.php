
                 
<?php
  $dir = 'uploads';
 
 //Open dir
 if ($opendir = opendir ($dir))
{
	
	echo '<div class="container">';
	
	//read dir
	
	$i = 0;
	
	while (($file = readdir($opendir)) !== FALSE)
	{
		if ($file!="."&&$file!=".."){
			
			if($i % 3 == 0){
				echo '
				<div class="row">';
			}
			
			echo '
					<div class="col-md-4">
						<img src=' .$dir. '/' .$file. ' class="img-fluid" width="200px" height="150px")">
						
			
				  	</div>';
				  
			$i++;
			
			
			}
			
		}
	}
	
	echo '</div>';
	

 
?>

