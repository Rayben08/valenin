<?php
    $title = "Valenin IT Services";
    $logo_white = "assets/images/valwhite.png";
    $logo_green = "assets/images/valgreen.png";
    $logo_gblack = "assets/images/gblack.png";
    $hero_image = "assets/images/retro.jpg";
    $carbox1 = "assets/images/career.jpg";
    $carbox2 = "assets/images/intern.jpg";
    $footer1 = "assets/images/fb.png";
    $footer2 = "assets/images/in.png";
    $footer3 = "assets/images/tk.png";
    $service1 = "assets/images/s1.jpg";
    $service2 = "assets/images/s2.jpg";
    $service3 = "assets/images/s3.png";
    $service4 = "assets/images/s4.jpg";
    $service5 = "assets/images/s5.jpg";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <style type="text/css">
        .carousel-btn{
            border-radius: 90%;  /* Make the button circular */
            width: 75px;  /* Set fixed width for a circular button */
            height: 50px;  /* Set fixed height for a circular button */
        }
    </style>
</head>
<body>
    <?php include 'assets/include/navbar.php'; ?>
    
   <div class="hero text-center py-5">
    <div class="container">
        <h1 class="fw-bold">SERVICES</h1>
        <div style="position: relative; display: flex; align-items: center;">

            <!-- Carousel Left Button -->
            <button class="carousel-btn left" onclick="scrollService(-1)">&#10094;</button>

            <!-- Service Container -->
            <div class="service-container" id="serviceContainer">
                <div class="service-box p-4">
                    <img src="<?php echo $service1; ?>" class="service-img" alt="Service 1">
                    <h4 class="fw-bold mt-3">UX/UI Development</h4>
                    <button class="btn btn-success">LEARN MORE</button>
                </div>
                <div class="service-box p-4">
                    <img src="<?php echo $service2; ?>" class="service-img" alt="Service 2">
                    <h4 class="fw-bold mt-3">Web Development</h4>
                    <button class="btn btn-success">LEARN MORE</button>
                </div>
                <div class="service-box p-4">
                    <img src="<?php echo $service3; ?>" class="service-img" alt="Service 3">
                    <h4 class="fw-bold mt-3">Software Development</h4>
                    <button class="btn btn-success">LEARN MORE</button>
                </div>
                <div class="service-box p-4">
                    <img src="<?php echo $service4; ?>" class="service-img" alt="Service 4">
                    <h4 class="fw-bold mt-3">IT Solution</h4>
                    <button class="btn btn-success">LEARN MORE</button>
                </div>
                <div class="service-box p-4">
                    <img src="<?php echo $service5; ?>" class="service-img" alt="Service 5">
                    <h4 class="fw-bold mt-3">Project Management</h4>
                    <button class="btn btn-success">LEARN MORE</button>
                </div>
            </div>

            <!-- Carousel Right Button -->
            <button class="carousel-btn right" onclick="scrollService(1)">&#10095;</button>
        </div>
    </div>
</div>

    <?php include 'assets/include/footer.php'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
         function scrollService(direction) {
        const container = document.getElementById('serviceContainer');
        const scrollAmount = 320; // Amount to scroll in px (approx. 1 card + gap)

        container.scrollBy({
            left: direction * scrollAmount,
            behavior: 'smooth'
        });
    }
    </script>
</body>
</html>
