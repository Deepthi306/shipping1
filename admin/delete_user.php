<?php
include 'controller/config.php';

$id = $_GET['delete_id'];

$sql = mysqli_query($conn, "DELETE FROM users WHERE id='$id'");

if ($sql) {
    ?><script>
    alert('User Deleted Succesfully');
            window.location = 'user.php';
        </script><?php
} else {
    die(mysqli_connect_error($conn));
}
