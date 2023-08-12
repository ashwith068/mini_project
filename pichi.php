<?php
if(isset($_POST['button'])) {
    header("Location: http://localhost:8080/mini/docreg.html");
    exit();
}
?>

<html>
<body>
    <form method="POST" action="">
        <input type="submit" name="button" value="Go to HTML page">
    </form>
</body>
</html>