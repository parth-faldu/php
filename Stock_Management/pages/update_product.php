<?php
include '../config/database_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['product_id'];
    $name = $_POST['product_name'];
    $category = $_POST['product_category'];
    $description = $_POST['product_description'];
    $product_type = implode(",", $_POST['product_type']);
    $product_availability = $_POST['product_availability'];
    $file = $_FILES['product_image'];

    $upload_dir = '../uploads/';
    $target_path = $upload_dir . basename($file['name']);

    if (!empty($file['name'])) {
        if (move_uploaded_file($file['tmp_name'], $target_path)) {
            $query = "UPDATE products SET 
                        name='$name', 
                        category='$category', 
                        description='$description', 
                        image='$target_path', 
                        product_type='$product_type', 
                        product_availability='$product_availability' 
                      WHERE id='$id'";
            $result = mysqli_query($con, $query);

            if ($result) {
                echo "<script>alert('Product updated successfully...');</script>";
            } else {
                echo "<script>alert('Error updating product: " . mysqli_error($con) . "');</script>";
            }
        } else {
            echo "<script>alert('Sorry, file not uploaded. Please try again!');</script>";
        }
    } else {
        $query = "UPDATE products SET 
                    name='$name', 
                    category='$category', 
                    description='$description', 
                    product_type='$product_type', 
                    product_availability='$product_availability' 
                  WHERE id='$id'";
        $result = mysqli_query($con, $query);

        if ($result) {
            echo "<script>alert('Product updated successfully...');</script>";
        } else {
            echo "<script>alert('Error updating product: " . mysqli_error($con) . "');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
        function previewFile() {
            const file = document.querySelector('#file');
            const label = document.querySelector('label');
            const preview = document.querySelector('.preview-image');

            if (file.files && file.files[0]) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    label.innerHTML = `<img class="preview-image" src="${e.target.result}" alt="Image Preview" style="border-radius:50%;border:0.2rem solid blue;width: 15rem;height: 15rem;padding: 1rem;"/>`;
                };
                reader.readAsDataURL(file.files[0]);
            } else {
                label.innerHTML = `<i class="fa-solid fa-envelope"></i>`;
            }
        }
    </script>
</head>

<body>

    <!-- ========== Start sidebar Section ========== -->
    <?php include '../templates/sidebar.php' ?>
    <!-- ========== End sidebar Section ========== -->

    <!-- ========== Start add product Section ========== -->
    <main>
        <section class="add-product">
            <div class="title container">
                <h1 class="sub-heading">Product Update</h1>
            </div>

            <div class="container">
                <form class="add-components" action="" method="post" enctype="multipart/form-data">
                    <input class="input-box" type="hidden" name="product_id" value="<?php echo $_GET['id']; ?>" />
                    <input class="input-box" type="text" name="product_name" placeholder="Product Name" required />

                    <div class="product-categories-container">
                        <select name="product_category" class="product-categories">
                            <option value="">Select Category</option>
                            <option value="Electronics">Electronics</option>
                            <option value="Fashion">Fashion</option>
                            <option value="Home Appliances">Home Appliances</option>
                            <option value="Books">Books</option>
                            <option value="Sports & Fitness">Sports & Fitness</option>
                        </select>
                        <div class="icon-container">
                            <i class="fa-solid fa-caret-down"></i>
                        </div>
                    </div>

                    <textarea class="txt-area" name="product_description" placeholder="Product Description"></textarea>

                    <div class="mail-icon">
                        <p>Product Image</p>
                        <input type="file" id="file" name="product_image" onchange="previewFile()" />
                        <label for="file">
                            <i class="fa-solid fa-envelope"></i>
                        </label>
                    </div>

                    <div class="product-type">
                        <label for="product_type">Product Type</label>
                        <label><input type="checkbox" name="product_type[]" value="Our Products"> Our Products</label>
                        <label><input type="checkbox" name="product_type[]" value="Third Party"> Third Party</label>
                    </div>

                    <div class="product-availability">
                        <label for="product_availability">Product Availability</label>
                        <label><input type="radio" name="product_availability" value="Available"> Available</label>
                        <label><input type="radio" name="product_availability" value="Out of Stock"> Out of Stock</label>
                    </div>

                    <div class="add-btn">
                        <button type="submit">Update Product</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <!-- ========== End add product Section ========== -->

</body>

</html>
