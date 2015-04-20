<?php
    require('commons/connection.php');
	$result=$qgen->select("*","registration");
		if($db->countRows($result)>0){
		echo "<table cellspacing='35' border='1'>";
			echo "<tr>
			<th colspan='2'>Id</th>
			<th colspan='2'>Name</th>
			<th colspan='2'>Contact</th>
			<th colspan='2'>Email</th>
			<th colspan='2'>College</th>
			<th colspan='2'>City</th>
			<th colspan='2'>State</th>
			<th colspan='2'>Event</th>
			<th colspan='2'>Accomodation</th>
			<th colspan='6'>Query</th>
			</tr>";

			while($arr=$db->fetchAssoc($result)){
				?>
                    <tr>
					<td><?php echo $arr['user_id']; ?></td>
					<td><?php echo $arr['user_name']; ?></td>
					<td><?php echo $arr['user_contact']; ?></td>
					<td><?php echo $arr['user_email']; ?></td>
					<td><?php echo $arr['user_college']; ?></td>
					<td><?php echo $arr['user_city']; ?></td>
					<td><?php echo $arr['user_state']; ?></td>
					<td><?php echo $arr['user_event']; ?></td>
					<td><?php echo $arr['user_accommodation']; ?></td>
					<td><?php echo $arr['user_query']; ?></td>
                    </tr>
                <?php
				
			}
		echo "</table>";
		
	}
	else
	{
		echo "<br/><p style='font-family: Arial; font-size: 1.6em'>No record found</p>";
	}
	$db->closeConnection();
?>