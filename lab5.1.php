<!DOCTYPE html>
<html>
<head>
    <title>Print Array</title>
</head>
<body>

<form method="post">
    Enter array elements (comma separated):
    <input type="text" name="array">
    <input type="submit" value="Display">
</form>

<?php
if(isset($_POST['array']))
{
    $arr = explode(",", $_POST['array']);

    echo "<h3>Array Elements:</h3>";

    foreach($arr as $value)
    {
        echo trim($value) . "<br>";
    }
}
?>

</body>
</html>