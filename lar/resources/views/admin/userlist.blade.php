<!DOCTYPE html>
<html>
<head>
	<title>userlist</title>
</head>
<body>
	<h1>User List</h1>

	<a href="/adminhome">Back</a> |
	<a href="/login">logout</a>

<br><br>
	<table border="1">
		<tr>
            <td>Type</td>
			<td>USERNAME</td>
			
			<td>PASSWORD</td>
            <td>Email</td>

			<td>ACTION</td>
		</tr>


	@foreach($users as $std)
		<tr>
            <td>{{ $std->type }}</td>
			<td>{{ $std->username }}</td>
			<td>{{ $std->password }}</td>
			
			<td>{{ $std->email }}</td>
			<td>
				<a href="{{ route('customer.edit', $std->id) }}"> EDIT </a> | 
				<a href="{{ route('customer.delete', $std->id) }}"> DELETE </a>
				
			</td>
		</tr>
	@endforeach

	</table>
</body>
</html>