<!DOCTYPE html>
<html>
<head>
	<title>Customer Edit</title>
</head>
<body>
	<h1>Edit Customer</h1>

	<a href="/adminhome">Back</a> |
	<a href="/login">logout</a>

<br><br>

<form method="post">
<input type="hidden" name="_token" value="{{csrf_token()}}">
	<table border="0">
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" value="{{$user['username']}}"></td>
		</tr>
		<tr>
			<td>PASSWORD</td>
			<td><input type="password" name="password" value="{{$user['password']}}"></td>
		</tr>
		<tr>
			<td>EMAIL</td>
			<td><input type="text" name="email" value="{{$user['email']}}"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Save"></td>
		</tr>
	</table>
</form>
</body>
</html>