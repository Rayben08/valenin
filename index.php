<?php
    $title = "Valenin IT Services";
    $logo_white = "assets/images/valwhite.png";
    $logo_green = "assets/images/valgreen.png";
    $logo_gblack = "assets/images/gblack.png";
    $hero_image = "assets/images/retro.jpg";
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
    
    <div class="heroh" style="background: url('assets/images/home.png') no-repeat center center/cover; min-height: 600px;">
        <div class="heroh-text">
        </div>
        <div class="heroh-text">
            <h1>RUN YOUR BUSINESS WITH NO WORRIES</h1>
            <button class="btn btn-success"><a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>" href="about.php">LEARN MORE</a></button>
        </div>
    </div>
    
    <?php include 'assets/include/footer.php'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
