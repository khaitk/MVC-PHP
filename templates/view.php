<html>
<head>
    <title>View</title>
</head>
<body>
	<table>
		<tr>
		    <th>ID</th>
		    <th>NAME</th>
		    <th>GMAIL</th>
		    <th>SDT</th>
		 </tr>
		 
		<?php foreach ($post as $posts): ?>
			<tr>
	        	<td><?php echo $posts['id']; ?></td>
	            <td><?php echo $posts['name']; ?></td>
	            <td><?php echo $posts['email']; ?></td>
	            <td><?php echo $posts['sdt']; ?></td>
	        </tr>
	    <?php endforeach; ?>		 	
	</table>    
</body>
</html>