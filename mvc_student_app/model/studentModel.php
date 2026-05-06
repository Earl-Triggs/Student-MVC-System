<?php
require_once '../config/database.php';


function getAllStudents() {
    global $conn;
    $query = "SELECT * FROM students";
    $result = mysqli_query($conn, $query);

    return $result;
}

function addStudent($name, $course, $year_level) {
    global $conn;
    $query = "INSERT INTO students (name, course, year_level) VALUES ('$name', '$course', '$year_level')";

    return mysqli_query($conn, $query);
}

function updateStudent($id, $name, $course, $year_level) {
    global $conn;
    $query = "UPDATE students SET name='$name', course='$course', year_level='$year_level' WHERE id='$id'";

    return mysqli_query($conn, $query);
}

function deleteStudent($id) {
    global $conn;
    $query = "DELETE FROM students WHERE id='$id'";

    return mysqli_query($conn, $query);
}
?>