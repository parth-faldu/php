<nav class="section-navbar">
    <ul class="nav-links">
        <a href="http://localhost/PHP_Assignment/index.php"><li>Dashboard</li></a>
        <a href="http://localhost/PHP_Assignment/pages/category_list.php"><li>Categories</li></a>
        <a href="http://localhost/PHP_Assignment/pages/product_list.php"><li>Product</li></a>
    </ul>
</nav>

<script>
    const currentURL = window.location.href; 
    const dashboardLink = document.querySelector(".nav-links a:nth-child(1) li");
    const categoryLink = document.querySelector(".nav-links a:nth-child(2) li");
    const productLink = document.querySelector(".nav-links a:nth-child(3) li");

    if (currentURL.includes("index.php")) {
        dashboardLink.style.fontSize = "2rem";
        dashboardLink.style.fontWeight = "bold";
    }
    if (currentURL.includes("category_list.php")) {
        categoryLink.style.fontSize = "2rem";
        categoryLink.style.fontWeight = "bold"; 
    }
    if (currentURL.includes("product_list.php")) {
        productLink.style.fontSize = "2rem";
        productLink.style.fontWeight = "bold"; 
    }
</script>
