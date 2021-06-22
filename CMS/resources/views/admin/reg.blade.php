<!DOCTYPE html>
<html>
<head>
	<title>Registraion Page</title>
</head>
<body>

	<form method="post" action="/admin/reg">
        {{csrf_field()}}
		<fieldset>
			<legend>Registraion</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
                <tr>
					<td>Confirm-Password</td>
					<td><input type="password" name="confirmation"></td>
				</tr>
				<tr>
					<td>Type</td>
					<td><input type="text" name="type"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="submit" value="Submit">
						<a href="login.html">Sign In</a>
					</td>
				</tr>
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