<!DOCTYPE HTML>
<html>
<head>          
    <title>Packed lunch ordering system</title>
</head>

<body>
    <h1>Add User</h1>
    <form action="adduser.php" method="post">
        Forename: <input type="text" name="forename"><br>
        Surname: <input type="text" name="surname"><br> 
        House: <input type="text" name="house"><br>
        Year Group: <input type="number" name="yeargroup"><br>
        Balance: <input type="number" name="balance"><br>
        Password: <input type="password" name="password"><br>
        Role: 
        <input type="radio" name="role" value="student" checked> Student
        <input type="radio" name="role" value="teacher"> Teacher<br>
        <input type="submit" value="Add User">
    </form>
</body>
</html>