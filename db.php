<!-- 3. Connect to the database -->
<?php
// Enter the host name, database username, password, and database name.
// If you have not set database password on localhost then set empty.
$con = mysqli_connect("localhost", "root", "root", "LoginSystem");
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to mysql:" . mysqli_connect_error();
}
?>