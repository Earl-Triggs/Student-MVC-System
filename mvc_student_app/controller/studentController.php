<?php
require_once "../model/studentModel.php";

if (isset($_POST['add'])) {

    $name = $_POST['name'];
    $course = $_POST['course'];
    $year_level = $_POST['year_level'];

    addStudent($name, $course, $year_level);

    header("Location: ../view/index.php");
}
if (isset($_GET['delete'])) {

    $id = $_GET['delete'];

    deleteStudent($id);

    header("Location: ../view/index.php");
}
if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $course = $_POST['course'];
    $year_level = $_POST['year_level'];

    updateStudent($id, $name, $course, $year_level);

    header("Location: ../view/index.php");
}

?>