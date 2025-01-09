<?php
include '../config/database_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $file = $_FILES['file'];

    $upload_dir = '../uploads/';
    $target_path = $upload_dir . basename($file['name']);

    if (move_uploaded_file($file['tmp_name'], $target_path)) {
        $query = "INSERT INTO categories (name, image) VALUES ('$name', '$target_path')";
        $result = mysqli_query($con, $query);

        if ($result) {
            echo "<script>alert('Category Add Successfully...');</script>"; 
        } else {
            echo "Error adding category: " . mysqli_error($con);
        }
    } else {
        echo "Sorry, file not uploaded, please try again!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
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
    <?php include '../templates/sidebar.php'; ?>
    <!-- ========== End sidebar Section ========== -->

    <!-- ========== Start add category Section ========== -->
    <main>
        <section class="add-category">
            <div class="title container">
                <h1 class="sub-heading">Categories Add</h1>
            </div>

            <div class="container">
                <form class="add-components" action="" method="post" enctype="multipart/form-data">
                    <input class="input-box" type="text" name="name" placeholder="Categories Name" required />
                    <div class="mail-icon">
                        <p>Cat Icon</p>
                        <div class="file-upload-container">
                            <input type="file" id="file" name="file" required onchange="previewFile()" />
                            <label for="file">
                                <i class="fa-solid fa-envelope"></i>
                            </label>
                        </div>
                    </div>
                    <div class="add-btn">
                        <button type="submit">Add New Categories</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <!-- ========== End add category Section ========== -->

</body>

</html>
