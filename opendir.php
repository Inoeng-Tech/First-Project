<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Unbenanntes Dokument</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<style type="text/css">
.formdir{
 
  margin-top: 20px;
  margin-left: 30%;
}

.form-style-1 {
    margin top: 20px;
    max-width: 400px;
    padding: 20px 12px 10px 20px;
    font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}

.form-style-1 li {
    padding: 0;
    display: block;
    list-style: none;
    margin: 10px 0 0 0;
}

.form-style-1 label{
    margin:0 0 3px 0;
    padding:0px;
    display:block;
    font-weight: bold;
}

fieldset 
	{
	border: 1px solid #778899 !important;
	margin: 0;
	xmin-width: 0;
	padding: 10px;
	position: relative;
	border-radius:4px;
	background-color:#FFFFFF;
	padding-left:10px!important;
	}	
	
		legend
		{
			font-size:14px;
			font-weight:bold;
			margin-bottom: 0px; 
			width: 35%; 
			border: 1px solid #778899;
			border-radius: 4px; 
			padding: 5px 5px 5px 10px; 
			background-color: #ffffff;
		}


}
.form-style-1 input[type=text], 
.form-style-1 input[type=date],
.form-style-1 input[type=datetime],
.form-style-1 input[type=number],
.form-style-1 input[type=search],
.form-style-1 input[type=time],
.form-style-1 input[type=url],
.form-style-1 input[type=email],
textarea, 

}
.form-style-1 input[type=text]:focus, 
.form-style-1 input[type=date]:focus,
.form-style-1 input[type=datetime]:focus,
.form-style-1 input[type=number]:focus,
.form-style-1 input[type=search]:focus,
.form-style-1 input[type=time]:focus,
.form-style-1 input[type=url]:focus,
.form-style-1 input[type=email]:focus,
.form-style-1 textarea:focus, 
.form-style-1 select:focus{
    -moz-box-shadow: 0 0 8px #88D5E9;
    -webkit-box-shadow: 0 0 8px #88D5E9;
    box-shadow: 0 0 8px #88D5E9;
    border: 1px solid #88D5E9;
}

.form-style-1 .field-divided{
    width: 49%;
}
.form-style-1 .fileField{
    width: 100%;
}
.form-style-1 .field-textarea{
    height: 100px;

.form-style-1 .fileField{
    width: 100%;
}

   	   
</style>

<body>

<div class="form-popup" id="popform">
<form action="form_info.php" class="formdir form-container" method="post" enctype="multipart/form-data" >
    <div class="panel-body">
    <fieldset class="col-md-8">
		<legend>Foto Wahlen</legend>
        	<div class="panel panel-default">
            	<div class="panel-body">
					<div class="form-group" align="left">
    				</div>
                 </div>
             </div>    
                 
<?php
  $dir = 'uploads';
 
 //Open dir
 if ($opendir = opendir ($dir))
{
	
	echo '<div class="container">';
	
	//read dir
	
	$i = 1;
	
	while (($file = readdir($opendir)) !== FALSE)
	{
		if ($file!="."&&$file!=".."){
			
			if($i=="1" OR $i=="4" OR $i=="7" OR $i=="10"){
				echo '
				<div class="row">';
			}
			
			echo '
					<div class="col-sm">
						<img src=' .$dir. '/' .$file. ' class="img-fluid">
				  	</div>';
				  
			$i++;
			
			if($i=="4" OR $i=="7"){
				echo '
				</div>';
			}
			
		}
	}
	
	echo '</div>';
	
}

 
?>



   
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> 
    
    
</form>

</div>
</body>
</html>