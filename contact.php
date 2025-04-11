<?php
    $title = "Valenin IT Services";
    $logo_white = "assets/images/valwhite.png";
    $logo_green = "assets/images/valgreen.png";
    $logo_gblack = "assets/images/gblack.png";
    $hero_image = "assets/images/retro.jpg";
    $carbox1 = "assets/images/career.jpg";
    $carbox2 = "assets/assets/images/intern.jpg";
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
    <div class="map-container">
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=plazuela de molino&amp;t=p&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                <a href="https://sprunkin.com/">Sprunki Game</a>
            </div>
            <style></style></div></div>
       <div class="contact-container">
        <div class="contact-left">
            <h3>CONTACT INFORMATIONS</h3>
            <p>3rd Flr. Plazuela De Molino</p>
            <p>9006 Molino Blvd. Bacoor City</p>
            <p>📞 0912356789</p>
            <p>📧 email@valenin.com</p>
        </div>
        
        <div class="contact-right">
            <h3>ONLINE INQUIRY</h3>
            <form>
                <input type="text" id="name" name="name" placeholder="NAME:" required>
                <input type="email" id="email" name="email" placeholder="EMAIL ADDRESS:" required>
                <textarea id="message" name="message" rows="4" placeholder="MESSAGE:" required></textarea>
                
                <button type="submit" class="btn btn-success">SEND MESSAGE</button>
            </form>
        </div>
    </div>
</div>
        
    </div>
</div>

    
    <?php include 'assets/include/footer.php'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
