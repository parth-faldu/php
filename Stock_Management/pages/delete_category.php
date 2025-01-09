<?php
include '../config/database_connection.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = "DELETE FROM categories WHERE id = $id";
    $result = mysqli_query($con, $query);

    if ($result) {
        header('Location: category_list.php');
    } else {
        echo mysqli_error($con);
    }
} 
else {
    echo 'error !!';
}
?>
