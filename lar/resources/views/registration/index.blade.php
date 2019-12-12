<!DOCTYPE html>
<html>
<head>
	<title>Registration page</title>
</head>
<body>
	<h1>Registration</h1>
	<div>
		<h3 style='color: blue'>{{session('msg')}}</h3>
	</div>

	<form method="post" >
		<!-- @csrf -->

		<!-- {{csrf_field()}} -->

		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<table>
		    <tr>
			    <td>User Type</td>
				<td><input type="text" name="type"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				
			<td><input type="submit" name="submit" value="Submit"></td>
				<td><a href="/login">Back</a></td>
			</tr>
		</table>
	</form>
		<!-- {{session('msg')}} -->
		@foreach($errors->all() as $err)
		 <p style="color: red">{{'*'.$err}}</p>
		 @endforeach
	</div>



</body>
</html>