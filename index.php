<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Student Management System</h2>

<form action="add_student.php" method="POST">
    <input type="text" name="name" placeholder="Student Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="phone" placeholder="Phone" required>
    <input type="text" name="course" placeholder="Course" required>

    <button type="submit">Add Student</button>
</form>

<table>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Course</th>
    <th>Action</th>
</tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM students");

while($row = mysqli_fetch_assoc($result)) {
?>

<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['phone']; ?></td>
    <td><?php echo $row['course']; ?></td>

    <td>
        <a href="delete_student.php?id=<?php echo $row['id']; ?>">Delete</a>
    </td>
</tr>

<?php } ?>

</table>

</body>
</html>
