<?php
	$koneksi = mysqli_connect("localhost","root","","php-api");
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Data</title>
</head>
<body>
	<a href="form.php">+ Tambah Data</a>
	<table align="center" border="1" width="70%">
		<tr>
			<td colspan="6">
				<h3><center>DATA</center></h3>
			</td>
		</tr>
		<tr>
			<th>ID</th>
			<th>Username</th>
			<th>Password</th>
			<th>Level</th>
			<th>Fullname</th>
			<th>Action</th>
		</tr>
			<?php
				$qry = mysqli_query($koneksi,"SELECT * FROM users");
				while($data = mysqli_fetch_array($qry))
				{
			 ?>
		<tr>
			<td align="center"><?php echo $data['id']; ?></td>
			<td><?php echo $data['username']; ?></td>
			<td><?php echo $data['password']; ?></td>
			<td><?php echo $data['level']; ?></td>
			<td><?php echo $data['fullname']; ?></td>
			<td align="center">
				<a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
				<a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a>
			</td>
		</tr>
			<?php } ?>
	</table>
</body>
</html>