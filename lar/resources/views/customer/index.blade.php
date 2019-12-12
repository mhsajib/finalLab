<!DOCTYPE html>
<html>
<head>
	<title>Customer home</title>
</head>
<body>
	<h1>CUSTOMER HOME</h1>
     <input type="text"><button>Search</button>
    <a href="/categories">Categories</a>|

    <a href="/login">Logout</a>

    <br><br>
	<table border="1" width=60%>
		<tr>
            <td>Book Name</td>
			<td>CATEGORIES</td>
			
			<td>PRICE</td>
            <td>author</td>
            <td>DESCRIPTION</td>

			<td>ACTION</td>
		</tr>


	@foreach($users as $std)
		<tr>
            <td>{{ $std->bookname }}</td>
			<td>{{ $std->categories }}</td>
			<td>{{ $std->price }}</td>
			
			<td>{{ $std->author }}</td>
            <td>{{ $std->description }}</td>
			<td>
			
				<a href="#"> BUY </a>
				
			</td>
		</tr>
	@endforeach

	</table>

</body>
</html>