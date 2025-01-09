<?php
include 'config/database_connection.php';

// Fetch total categories
$query_categories = "SELECT COUNT(*) AS total_categories FROM categories";
$result_categories = mysqli_query($con, $query_categories);
$data_categories = mysqli_fetch_assoc($result_categories);
$total_categories = $data_categories['total_categories'];

// Fetch total products
$query_products = "SELECT COUNT(*) AS total_products FROM products";
$result_products = mysqli_query($con, $query_products);
$data_products = mysqli_fetch_assoc($result_products);
$total_products = $data_products['total_products'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <!-- ========== Start sidebar Section ========== -->
    <?php include 'templates/sidebar.php'; ?>
    <!-- ========== End sidebar Section ========== -->

    <!-- ========== Start dashboard content Section ========== -->
    <main>
        <section class="section-dashboard-content">
            <div class="container grid grid-two--cols">
                <div class="total-categories">
                    <h3 class="sub-heading">Total Categories</h3>
                    <p class="category-sum"><?php echo $total_categories; ?></p>
                </div>
                <div class="total-products">
                    <h3 class="sub-heading">Total Products</h3>
                    <p class="products-sum"><?php echo $total_products; ?></p>
                </div>
            </div>
        </section>
    </main>
    <!-- ========== End dashboard content Section ========== -->
</body>
</html>
