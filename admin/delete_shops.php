<?php
include 'controller/config.php';

$id = $_GET['delete_id'];

$sql = mysqli_query($conn, "DELETE FROM shops WHERE id='$id'");

if ($sql) {
    ?><script>
    alert('Shop Deleted Succesfully');
            window.location = 'shops.php';
        </script><?php
} else {
    die(mysqli_connect_error($conn));
}
