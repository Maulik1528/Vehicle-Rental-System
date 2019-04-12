<? php
    session_start();
?>

<!DOCTYPE html>
<html>
    <body>
        <?php
        echo "Favorite color is " . $_SESSION["name"] . ".<br>"
        ?>
    </body>
</html>