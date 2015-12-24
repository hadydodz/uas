<?php
$host = "localhost";
$user = "root";
$pass = "";
$name = "test";

$koneksi = mysqli_connect($host, $user, $pass, $name);
if(isset($_POST['simpan'])) {
	$tugas = $_POST['task'];
	$priority = $_POST['priority'];
	
	$tugas = mysqli_real_escape_string($koneksi, $tugas);
	$priority = mysqli_real_escape_string($koneksi, $priority);
	$sql = "INSERT INTO todolist (priority, tugas, status)
			VALUES ('{$priority}', '{$tugas}', 'No Status')";
	mysqli_query($koneksi, $sql);
}
if(isset($_GET['status'])) {
	if($_GET['status'] ==1) {
	$sql = "UPDATE todolist SET status='On Progress'
			WHERE id=$_GET[id]";
	} else if($_GET['status'] == 2) {
		$sql = "UPDATE todolist SET status ='Canceled'
				WHERE id=$_GET[id]";
	} else if($_GET['status'] == 3) {
		$sql = "UPDATE todolist SET status ='Done'
				WHERE id=$_GET[id]";
	} else if($_GET['status'] == 4) {
		$sql = "DELETE FROM todolist
				WHERE id=$_GET[id]";
	}
	mysqli_query($koneksi, $sql);
}
$sql = "SELECT * FROM todolist";
$hasil = mysqli_query($koneksi, $sql);


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>To Do List</title>
</head>
<body>

<h2>To Do List</h2>
<form action="" method="POST">
	<label>New TO DO: </label>
	<input type="text"
		   name="task"
		   value=""/>
	<select name="priority">
		<option value="High">High</option>
		<option value="Medium">Medium</option>
		<option value="Low">Low</option>
	</select>
	<input type="submit"
		   name="simpan"
		   value="Add" />
</form>
<table border="1" width="80%">
	<thead> 
		<tr>
			<th>Priority</th>
			<th>Description</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php
			while($baris = mysqli_fetch_assoc($hasil)) {
				echo "<tr>";
				echo "<td>" . $baris['priority'] . "</td>";
				echo "<td>" . $baris['tugas'] . "</td>";
				echo "<td>" . $baris['status'] . "</td>";
				echo "<td>";
				echo "<a href='index.php?status=1&id=" . $baris['id'] . "'>Start</a> | ";
				echo "<a href='index.php?status=2&id=" . $baris['id'] . "'>Cancel</a> | ";
				echo "<a href='index.php?status=3&id=" . $baris['id'] . "'>Done</a> | ";
				echo "<a href='index.php?status=4&id=" . $baris['id'] . "'>Delete</a>";
				echo "</td>";
				echo "</tr>";
			}
			
			mysqli_free_result($hasil);
		?>
	</tbody>
</table>
		
</body>
</html>
<?php
mysqli_close($koneksi);
?>