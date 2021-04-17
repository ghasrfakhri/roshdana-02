<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="a.php" method="get">
<!--    First Name: <input name="firstName" type="text" value="Ali"><br>-->
<!--    Last Name: <input name="lastName" type="text"><br>-->
<!--    age: <input name="age" type="text"><br>-->
<!--    Address: <textarea name="address" >sdfsdfsdf</textarea><br>-->
<!--    <input type="radio" name="g" value="m"><br>-->
<!--    <input type="radio" name="g" checked value="f"><br>-->
<!--    <input type="submit" name="op" value="+">-->

<label>
    City: <select name="city">
        <option value="1">Mashhad</option>
        <option value="2">Shiraz</option>
        <option value="3">Tehran</option>
    </select>
</label>
    <input type="submit" name="op" value="Send">
</form>

<a href="b.php?firstName=reza&age=22">Next Page</a>

</body>
</html>