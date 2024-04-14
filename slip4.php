<?php

session_start();

$no = $_POST['no'];
$name = $_POST['name'];
$address = $_POST['address'];

$_SESSION['no'] = $no;
$_SESSION['name'] = $name;
$_SESSION['address'] = $address;

?>

<html lang="en">
<body>
    <form action="slip3_result.php" method="post">
        <label for="">Basic</label>
        <input type="text" name="basic">
        <br>

        <label for="">DA</label>
        <input type="text" name="da">
        <br>


        <label for="">HRA</label>
        <input type="text" name="hra">
        <br>

        <input type="submit" value="Go Result">
    </form>
</body>

</html>