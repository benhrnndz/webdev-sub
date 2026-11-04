<?php
require 'db_connect.php';

// Check if the form was actually submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Capture the data using the $_POST superglobal
    $name = $_POST['student_name'];
    $course = $_POST['course'];
    
    // 2. Prepare the SQL query
    $sql = "INSERT INTO students (name, course) VALUES ('$name', '$course')";
  
    // 3. Execute the query and check if successful
    if ($conn->query($sql) === TRUE) {
        echo "New student record created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // 4. Close the connection
    $conn->close() ;`
}
?>