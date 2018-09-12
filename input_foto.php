
<style type="text/css">
.form-style-1 {
    margin:10px auto;
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

<form action="index_foto.php" method="post" enctype="multipart/form-data">
	<div class="panel-body">
    <fieldset class="col-md-6">
		<legend>Foto Input</legend>
        	<div class="panel panel-default">
            	<div class="panel-body">
                	<ul class="form-style-1">
   						<li>
      						<label>Name <span style="color:#FF0000">*</span></label>
      						<input type="text" name="name" class="field-divided"/>
                        </li>
   						<li>
        					<label>Datum <span style="color:#FF0000">*</span></label>
        					<input type="date" name="date" class="field-long"/>
    					</li>
    					<li>
                        	<label>Select image to upload <span style="color:#FF0000">*</span> </label>
                  			
    					</li>
    					<li>
        					<label>Quelle <span style="color:#FF0000">*</span></label>
        					<input type="foto_source" name="source" id="textfield" class="field-divided"/>
    					</li>
    					<li>
       						<button type="button" class="btn btn-light">Speichern</button>
    					</li>
					</ul>
				</div>
             </div>  
		</fieldset>
  </div>   
</form>