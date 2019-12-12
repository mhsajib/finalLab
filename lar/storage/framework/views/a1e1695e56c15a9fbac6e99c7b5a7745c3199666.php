<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
</head>
<body>
	<h1>Login</h1>

	<form method="post" >
		<!-- @csrf  -->

		<!-- <?php echo e(csrf_field()); ?> -->

		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				
			<td><input type="submit" name="submit" value="Login"></td>
				<td><a href="/registration">Registration</a></td>
			</tr>
		</table>
	</form>

	<div>
		<!-- <?php echo e(session('msg')); ?> -->
		<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		 <p style="color: red"><?php echo e('*'.$err); ?></p>
		 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>

</body>
</html>