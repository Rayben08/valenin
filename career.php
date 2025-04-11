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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
    <?php include 'assets/include/navbar.php'; ?>
    
   <div class="hero text-center py-5">
    <div class="container">
        <h1 class="fw-bold">CAREER</h1>
        <p class="lead">
            LET’S BUILD THE FUTURE OF TECHNOLOGY TOGETHER
        </p>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="career-box p-4">
                    <img src="<?php echo $carbox1; ?>" class="career-img" alt="Career Image">
                    <h4 class="fw-bold mt-3">CAREERS AT VALENIN</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <button class="btn btn-success">LEARN MORE</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="career-box p-4">
                    <img src="<?php echo $carbox2; ?>" class="career-img" alt="Internship Image">
                    <h4 class="fw-bold mt-3">INTERNSHIP PROGRAM</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <button class="btn btn-success">LEARN MORE</button>
                </div>
            </div>
        </div>
    </div>
</div>

    
    <?php include 'assets/include/footer.php'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
