<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>backenddev</title>
</head>
<body>
    <h1>Form</h1>
    <form action="register.php" method="post">
        <input type="text" name="name" placeholder="enter name">
        <br>
        <input type="text" name="surname" placeholder="enter surname">
        <br>
        <input type="text" name="address" placeholder="enter address">
        <br>
        <textarea name="bio" cols="30" rows="10" placeholder="enter bio"></textarea>
        <br>
        <label for="date">enter birth date</label>
        <br>
        <input type="date" name="birth" id=""> 
        <br>
        <button type="submit">submit</button>
    </form>
</body>
</html>