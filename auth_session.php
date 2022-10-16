<!-- 4. create a session for the user -->
<?php session_start();
if (!isset($_SESSION["username"])) {
    header("location: login.php");
    exit();
}
?>