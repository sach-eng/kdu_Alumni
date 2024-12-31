<?php include 'head.php'; ?>
<body>
    <?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">What do you want to Know</h1>
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../sites/default/files/styles/large/public/feature/main_image/air.jpg" class="d-block w-100" alt="First Slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First Slide</h5>
                        <p>Description for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../sites/default/files/styles/large/public/feature/main_image/air.jpg" class="d-block w-100" alt="Second Slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second Slide</h5>
                        <p>Description for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../sites/default/files/styles/large/public/feature/main_image/air.jpg" class="d-block w-100" alt="Third Slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third Slide</h5>
                        <p>Description for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
