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


	<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $std): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
            <td><?php echo e($std->type); ?></td>
			<td><?php echo e($std->username); ?></td>
			<td><?php echo e($std->password); ?></td>
			
			<td><?php echo e($std->email); ?></td>
			<td>
				<a href="<?php echo e(route('customer.edit', $std->id)); ?>"> EDIT </a> | 
				<a href="<?php echo e(route('customer.delete', $std->id)); ?>"> DELETE </a>
				
			</td>
		</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</table>
</body>
</html>