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
</head>

<body>
    <!-- ========== Start sidebar Section ========== -->
    <?php include '../templates/sidebar.php' ?>
    <!-- ========== End sidebar Section ========== -->

    <!-- ========== Start category list Section ========== -->
    <main>
        <section class="category-list">
            <div class="title container">
                <h1 class="sub-heading">Categories List</h1>
                <a href="add_category.php">
                    <button>Add New Categories</button>
                </a>
            </div>

            <div class="container">
                <?php
                    include '../config/database_connection.php';
                    
                    $sql = 'SELECT * FROM categories';

                    $result = mysqli_query($con, $sql);

                    while ($rs = mysqli_fetch_array($result)) {
                        $id = $rs['id'];
                        $image_path = $rs['image']; 
                        echo '
                        <div class="sub-container">
                            <div class="image-container">
                                <img class="preview-image" src="' . $image_path . '" alt="Image Preview" style="border-radius:50%; width: 10rem; height: 10rem; padding: 1rem;" />
                            </div>
                            <div class="detail">
                                <p class="name">' . $rs['name'] . '</p>
                                <div class="operation">
                                    <a href="update_category.php?id=' . $id . '">
                                            <div class="update">
                                                <i class="fa-solid fa-pen"></i>
                                            </div>
                                    </a>
                                
                                    <a href="delete_category.php?id=' . $id . '">
                                        <div class="remove">
                                            <i class="fa-solid fa-circle-xmark"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>';
                    }
                ?>
            </div>
        </section>
    </main>
    <!-- ========== End category list Section ========== -->

</body>

</html>
