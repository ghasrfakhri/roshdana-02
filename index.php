<?php
if (isset($_REQUEST['a'])) {
//if ($_REQUEST) {


    $a = (float)$_REQUEST['a'];
    $b = (float)$_REQUEST['b'];
    $op = $_REQUEST['op'];

//    if ($op == '+') {
//        $result = $a + $b;
//    } else if ($op == '-') {
//        $result = $a - $b;
//    } else if ($op == '*') {
//        $result = $a * $b;
//    } else if ($op == '/') {
//        if ($b == 0) {
//            $result = "Error";
//        } else {
//            $result = $a / $b;
//        }
//    }
    switch ($op) {
        case '+':
            $result = $a + $b;
            break;
        case '-':
            $result = $a - $b;
            break;
        case '*':
            $result = $a * $b;
            break;
        case '/':
            if ($b != 0) {
                $result = $a / $b;
            } else {
                $result = "Error";
            }
            break;
    }


} else {
    $a = 0;
    $b = 0;
}

?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <label>A: <input type="text" name="a" value="<?php echo $a ?>"></label><br>
    <label>B: <input type="text" name="b" value="<?php echo $b ?>"></label><br>
    <input type="submit" name="op" value="+">
    <input type="submit" name="op" value="-">
    <input type="submit" name="op" value="*">
    <input type="submit" name="op" value="/">
</form>
<br>
<?php
if (isset($result))
    echo "$a $op $b = $result";

?>

</body>
</html>