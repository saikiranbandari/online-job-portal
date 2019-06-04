<!DOCTYPE html>
<html lang="en">

<head>
<style>
body{
		height:100%;
	width:100%;
background:linear-gradient(rgba(26,26,26,0.1),rgba(26,26,26,0.1)),url("11.jpg");
	background-size:cover;
	background-repeat:no-repeat;
	background-position:center center;
	
	
	
	
}

</style>
</head>

<body>
	<div style="margin: auto; display: table;">
	<br/>
	<form method="post" action="inputdb.php">
<div style="width: 400px;">
</div>
<div style="padding-bottom: 18px;font-size : 24px;"><h2>Job Application With Resume Upload</h2></div>
<div style="padding-bottom: 18px;font-size : 18px;">Contact Information</div>
<div style="display: flex; padding-bottom: 18px;width : 450px;">
<div style=" margin-left : 0; margin-right : 1%; width : 49%;">First name<span style="color: red;"> *</span><br/>
<input type="text" id="data_3" name="data_3" style="width: 100%;" class="form-control"/>
</div>
<div style=" margin-left : 1%; margin-right : 0; width : 49%;">Last name<span style="color: red;"> *</span><br/>
<input type="text" id="data_4" name="data_4" style="width: 100%;" class="form-control"/>
</div>
</div><div style="padding-bottom: 18px;">Email<span style="color: red;"> *</span><br/>
<input type="text" id="data_5" name="data_5" style="width : 450px;" class="form-control"/>
</div>
<div style="padding-bottom: 18px;">Phone<span style="color: red;"> *</span><br/>
<input type="text" id="data_6" name="data_6" style="width : 450px;" class="form-control"/>
</div>
<div style="padding-bottom: 18px;font-size : 18px;">Position</div>
<div style="padding-bottom: 18px;">Position you are applying for<span style="color: red;"> *</span><br/>
<input type="text" id="data_9" name="data_9" style="width : 450px;" class="form-control"/>
</div>
<div style="padding-bottom: 18px;">Resume upload<br/>
<input id="data_10" name="data_10" style="width : 450px;" type="file" class="form-control"/>
</div>
<div style="padding-bottom: 18px;">Portfolio website<br/>
<input type="text" id="data_11" name="data_11" style="width : 450px;" class="form-control"/>
</div>
<div style="padding-bottom: 18px;">Salary requirements<br/>
<input type="text" id="data_12" name="data_12" style="width : 450px;" class="form-control"/>
</div>

<div style="padding-bottom: 18px;">Last company you worked for<br/>
<input type="text" id="data_15" name="data_15" style="width : 450px;" class="form-control"/>
</div>
<div style="padding-bottom: 18px;">Comments<br/>
<textarea id="data_16" false name="data_16" style="width : 450px;" rows="6" class="form-control"></textarea>
</div>
<div style="padding-bottom: 18px;"><input name="skip_Submit" value="Submit" type="submit"/></div>
</form>


	
	</div>
</body>


</html>