<!DOCTYPE html>
<html>
<body>
	<h3>Students </h3>
	<a href="/create-student.php">add Student</a>
	<table class="table">
		<thead>
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Age</th>
				<th>Gender</th>
			</tr>
		</thead>
		<tbody>
				<?php foreach($students as $student): ?>
			<tr>
				<td><?=$student->first_name ?></td>
				<td><?=$student->last_name ?></td>
				<td><?=$student->age ?></td>
				<td><?=$student->gender ?></td>
			</tr>
		<?php endforeach;?>
			</tbody>
	</table>
</body>
</html>