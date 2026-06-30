<!DOCTYPE html>
<html>
<head>
    <title>Merge Arrays</title>
</head>
<body>

<form method="post">
    Enter First Array (comma separated):
    <input type="text" name="array1"><br><br>

    Enter Second Array (comma separated):
    <input type="text" name="array2"><br><br>

    <input type="submit" value="Merge">
</form>

<?php
if(isset($_POST['array1']) && isset($_POST['array2']))
{
    $arr1 = explode(",", $_POST['array1']);
    $arr2 = explode(",", $_POST['array2']);

    $merged = array_merge($arr1, $arr2);

    echo "<h3>Merged Array:</h3>";

    foreach($merged as $value)
    {
        echo trim($value) . "<br>";
    }
}
?>

</body>
</html>