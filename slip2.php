<?php

$fstyle = $_POST['fstyle'];
$fsize = $_POST['fsize'];
$fcolor = $_POST['fcolor'];
$fbg = $_POST['fbg'];

setcookie('fontStyle', $fstyle , time() + 86400);
setcookie('fontSize', $fsize ,time() + 86400);
setcookie('fontColor', $fcolor ,time() + 86400);
setcookie('bg', $fbg ,time() + 86400);

?>


<!DOCTYPE html>
<html lang="en">
<body>
    <form action="slip2_result.php" method="post">
        <h1>press ok for main changing page</h1>
        <button type="submit">Go Result</button>
    </form>
</body>
</html>