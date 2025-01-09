<?php
include '../config/database_connection.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); 
    $query = "DELETE FROM products WHERE id = $id";
    $result = mysqli_query($con, $query);

    if ($result) {
        header('Location: product_list.php');
        exit;
    } else {
        echo mysqli_error($con);
    }
} else {
    echo 'error !!!';
}
?>
