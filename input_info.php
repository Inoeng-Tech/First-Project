<form action="" method="post" name="info_tb" action="">
  <div>
  	<h2> Input Information</h2>
  
  </div>
  
<table width="703" height="817" align="center">
 
   
    <tr>
      <td width="200" height="35" align="left" scope="30">Titel</td> 
      <td width="500" height="35" align="justify">
      	<label for="textfield6"></label>
        <input type="text" name="info_titel" id=textfield6"" width="500" height="35">
    </tr>
    <tr>
      <td height="35" align="left" scope="30">Datum</td> 
      <td width="500" height="35" align="justify">
     	<label for="textfield7"></label>
        <input type="text" name="info_datum" id="textfield7" width="500" height="35">
    </tr>
    <tr>
      <td height="35" align="left" scope="30">Foto</td> 
      <td width="500" height="35" align="justify">
      
    <?php
// there is no link to "idfotoyet, it's just have to complete it later
		
		
		$dir = "/images/";

// Open a directory, and read its contents
		if (is_dir($dir)){
  			if ($dh = opendir($dir)){
   				 while (($file = readdir($dh)) !== false){
      		echo "filename:" . $file . "<br>";
    		}
    			closedir($dh);
 	 		}
		}
	?>
      
    </tr>
    <tr>
      <td height="200" align="left" valign="top" scope="30">Information</td> 
      <td width="500" height="200" align="justify">
      	<label for="textfield8"></label>
        <input type="info_text" name="" id="textfield8" width="500" height="600">
    </tr>
    <tr>
      <td height="35" align="left" scope="30">Author</td> 
      <td width="500" height="37" align="justify">
     	<label for="textfield9"></label>
        <input type="text" name="info_author" id="textfield9" width="500" height="35">
    </tr>
	<tr>
    	<td width="703" height="35" align="right" scope="30"> 
        <input name="info_bt" type="button" value="Speichern"/>
        </td>
    
  </table>
  