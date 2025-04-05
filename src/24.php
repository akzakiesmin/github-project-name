<?php
$student_id = 12345; // Replace with your student's ID
$query = "SELECT * FROM students WHERE id = '$student_id'";
$result = mysqli_query($connection, $query);
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Student Name: " . $row['name'] . "<br>";
        echo "Student ID: " . $row['id'] . "<br>";
    }
} else {
    echo "No data found for student with ID " . $student_id;
}
?>
