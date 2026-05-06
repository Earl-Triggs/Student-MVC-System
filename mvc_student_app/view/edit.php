<?php
require_once "../model/studentModel.php";

$id = $_GET['id'];
$students = getAllStudents();

while ($row = mysqli_fetch_assoc($students)) {
    if ($row['id'] == $id) {
        $student = $row;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body></body>
<h2>Edit Student</h2>

<form action="../controller/studentController.php" method="POST">

    <input type="hidden" name="id" value="<?php echo $student['id']; ?>">

    <input type="text" name="name" value="<?php echo $student['name']; ?>">
    <br><br>

    <input type="text" name="course" value="<?php echo $student['course']; ?>">
    <br><br>

    <input type="number" name="year_level" value="<?php echo $student['year_level']; ?>">
    <br><br>

    <button type="submit" name="update">Update</button>

</form>

</body>
</html>