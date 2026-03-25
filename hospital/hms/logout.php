<?php
session_start();
include('include/config.php');

// Set timezone
date_default_timezone_set('Asia/Kolkata');
$ldate = date('d-m-Y h:i:s A', time());

// Update logout time in userlog if user was logged in
if(isset($_SESSION['id'])) {
    mysqli_query($con, "UPDATE userlog SET logout = '$ldate' WHERE uid = '" . $_SESSION['id'] . "' ORDER BY id DESC LIMIT 1");
}

// Clear all session variables
$_SESSION['login'] = '';
session_unset();
session_destroy();

// Set logout message
session_start();
$_SESSION['errmsg'] = "You have successfully logged out";
?>
<script language="javascript">
    window.location.href = "../index.php";
</script>
