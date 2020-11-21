<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Show All</title>
	<style>
	th {
	    font-size: 25px;
	    font-family: cursive;
	    color: red;
	    border: 1px solid white;
	}

	td {text-align: center;color: white;font-size: 18px;font-family: sans-serif;}

	table {
	    width: 45%;
	    height: 200px;
	    background-color: rebeccapurple;
	    border-collapse: collapse;
	}
	</style>
</head>
<body>
	<table>
		<th>ID</th>
		<th>Name</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Delete</th>
		<?php $stt=0; ?>
		<?php foreach ($post as $posts): ?>
			<?php $stt++; ?>
			<?php echo "<tr><td>$stt</td><td>".$posts['name']."</td><td>".$posts['email']."</td><td>". $posts['sdt']."</td> <td><a href=''>Del</a></td> </tr>"; ?> 
		<?php endforeach; ?>
	</table>

</body>
</html>