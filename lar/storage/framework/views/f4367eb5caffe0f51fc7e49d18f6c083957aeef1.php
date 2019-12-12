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


	<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $std): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
            <td><?php echo e($std->bookname); ?></td>
			<td><?php echo e($std->categories); ?></td>
			<td><?php echo e($std->price); ?></td>
			
			<td><?php echo e($std->author); ?></td>
            <td><?php echo e($std->description); ?></td>
			<td>
			
				<a href="#"> BUY </a>
				
			</td>
		</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</table>

</body>
</html>