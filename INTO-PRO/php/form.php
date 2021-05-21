<!doctype html>
<html>
<head>
    <title>Form</title>
</head>
<body>
 
<?php
    print_r($_GET);
?>
    <form method="get">
        <input placeholder="Number 1" type="number" name="n1">
        <select name="operation">
            <option value="+">Addition</option>
            <option value="-">Subtraction</option>
            <option value="*">Multiplication</option>
            <option value="/">Division</option>
            <option value="%">Modulu</option>
        </select>
        <input placeholder="Number 2" type="number" name="n2">
        <input type="submit" value="Compute">
        <input type="reset" value="Clear">
    </form>
</body>
</html>