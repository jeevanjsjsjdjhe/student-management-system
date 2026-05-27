<!DOCTYPE html>
<html>
<head>
    <title>Student Management System</title>
    <style>
        body{
            font-family: Arial;
            margin:40px;
            background:#f4f4f4;
        }

        h2{
            text-align:center;
        }

        input{
            padding:10px;
            margin:5px;
        }

        button{
            padding:10px;
            background:blue;
            color:white;
            border:none;
        }

        table{
            width:100%;
            background:white;
            border-collapse:collapse;
            margin-top:20px;
        }

        table,th,td{
            border:1px solid #ccc;
        }

        th,td{
            padding:10px;
            text-align:center;
        }
    </style>
</head>

<body>

<h2>Student Management System</h2>

<input type="text" id="name" placeholder="Student Name">
<input type="email" id="email" placeholder="Email">
<input type="text" id="phone" placeholder="Phone">
<input type="text" id="course" placeholder="Course">

<button onclick="addStudent()">Add Student</button>

<table id="studentTable">
<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Course</th>
</tr>
</table>

<script>
function addStudent(){

    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let phone = document.getElementById("phone").value;
    let course = document.getElementById("course").value;

    let table = document.getElementById("studentTable");

    let row = table.insertRow();

    row.insertCell(0).innerHTML = name;
    row.insertCell(1).innerHTML = email;
    row.insertCell(2).innerHTML = phone;
    row.insertCell(3).innerHTML = course;
}
</script>

</body>
</html>
