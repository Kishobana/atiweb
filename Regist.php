
<html>
<head>
    <title>Lecturer Registration</title>
</head>
<body>
    <h2><b><font color="Red">Lecturer Registration</font></b></h2>
    <form action="Regist.php" method="post">
        Name: <input type="text" name="name" ><br><br>
        Email: <input type="email" name="email" ><br><br>
        Designation:
        <select name="designation">
            <option value="Assistant Lecturer">Assistant Lecturer</option>
            <option value="Lecturer">Lecturer</option>
            <option value="Senior Lecturer I">Senior Lecturer I</option>
            <option value="Senior Lecturer II">Senior Lecturer II</option>
        </select><br><br>
        Course:
        <select name="course">
            <!-- Fetch and populate the course options from the Course table in the database -->
            <?php
                // Perform MySQL query to get the courses
                // Example: $result = mysqli_query($connection, "SELECT * FROM Course");
                // Loop through $result and echo <option> tags
            ?>
        </select><br><br>
        Gender:
        <input type="radio" name="gender" value="Male" required> Male
        <input type="radio" name="gender" value="Female" > Female<br><br>
        Password: <input type="password" name="password" ><br><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>
