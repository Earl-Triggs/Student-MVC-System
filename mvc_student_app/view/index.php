<?php
require_once '../model/studentModel.php';

$students = getAllStudents();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
</head>
<body>
<h5>Earl Joseph Limo BSIT-2C</h5>
<h2>Add Student</h2>

<form action="../controller/studentController.php" method="POST">

    <input type="text" name="name" placeholder="Name" required>
    <br><br>

    <input type="text" name="course" placeholder="Course" required>
    <br><br>

    <input type="number" name="year_level" placeholder="Year Level" required>
    <br><br>

    <button type="submit" name="add">Add Student</button>

</form>

<hr>   
<h2>Student List</h2>
<table border="1">
    <tr>
    <td><b>ID</b></td>
    <td><b>Name</b></td>
    <td><b>Course</b></td>
    <td><b>Year</b></td>
    <td><b>Action</b></td>
</tr>
<?php
while ($row = mysqli_fetch_assoc($students)) {
?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['course']; ?></td>
        <td><?php echo $row['year_level']; ?></td>
    </tr>
    <td>
    <a href="../controller/studentController.php?delete=<?php echo $row['id']; ?>">
        Delete
    </a>
</td>
<td>
    <a href="edit.php?id=<?php echo $row['id']; ?>">
        Edit
    </a>
</td>
<?php
}
?>
</table>
</body>
</html>