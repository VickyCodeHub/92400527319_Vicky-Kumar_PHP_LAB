<!DOCTYPE html>
<html>
<head>
    <title>Reverse Array</title>
</head>
<body>

<form method="post">
    Enter array elements (comma separated):
    <input type="text" name="array">
    <input type="submit" value="Reverse">
</form>

<?php
if(isset($_POST['array']))
{
    $arr = explode(",", $_POST['array']);

    $reverse = array_reverse($arr);

    echo "<h3>Reversed Array:</h3>";

    foreach($reverse as $value)
    {
        echo trim($value) . "<br>";
    }
}
?>

</body>
</html>