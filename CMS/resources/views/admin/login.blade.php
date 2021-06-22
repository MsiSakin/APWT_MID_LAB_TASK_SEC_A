

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<form method="post" >
		{{csrf_field()}}
			
			<fieldset  style="width: 300px">
				<legend><b>Log In</b></legend>
					<table >
						<tr>
							
						 	<td>
								Email :
							</td>
							<td> <input type="text" name="email" value="">
							</td>	
						</tr>
						<tr>
							<td>
								Password : 
							</td>
							<td>
								<input type="Password" name="pass" value="">
							</td>
						</tr>

						
					</table>
					<hr width="100%" align="left">

					<input type="checkbox" name="remember" value=""> Remember me <br/>
					<input type="submit" name="submit" value="Submit">
					<a href="admin/reg">Sign Up</a>
						
					</table>
			</fieldset>
				
	</form>
	<div>
	@foreach($errors->all() as $error)
		{{$error}}<br>
	@endforeach
	</div>
</body>
</html>