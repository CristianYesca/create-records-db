<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Save_student.php" method="GET">
        Name <input type="text" name="name"> <br/>
        Gender
        <input type="radio" name="gender" value="0"/> Female
        <input type="radio" name="gender" value="1"/> Male
        <br/>
        Stratum
        <select name="stratum">
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
            <option value="4">Four</option>
            <option value="5">Five</option>
            <option value="6">Six</option>
        </select>
        <br/></br>
        <input type="submit" value="Save Student">
    </form>
</body>
</html>