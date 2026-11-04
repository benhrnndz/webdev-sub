<h2>Student Registration</h2>
<!-- action points to the PHP script, method dictates how data is sent -->
<form action="process.php" method="POST">
    <label>Full Name:</label>
    <input type="text" name="student_name" required><br><br>

    <label>Course:</label>
    <input type="text" name="course" required><br><br>
    
    <button type="submit">Register</button>
</form>