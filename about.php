<?php
    $title = "Valenin IT Services";
    $logo_white = "assets/images/valwhite.png";
    $logo_green = "assets/images/valgreen.png";
    $logo_gblack = "assets/images/gblack.png";
    $hero_image = "assets/images/retro.jpg";
    $footer1 = "assets/images/fb.png";
    $footer2 = "assets/images/in.png";
    $footer3 = "assets/images/tk.png";
    $t1 = "assets/images/t1.png";
    $t2 = "assets/images/t2.png";
    $t3 = "assets/images/t3.png";
    $t4 = "assets/images/t4.png";
    $t5 = "assets/images/t5.png";
    $t6 = "assets/images/t6.png";
    $t7 = "assets/images/t7.png";
    $t8 = "assets/images/t8.png";
    $t9 = "assets/images/t9.png";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
  <style>
    .icon-section {
      text-align: center;
      padding: 40px 20px;
      border-right: 1px solid #ccc;
    }
    .icon-section:last-child {
      border-right: none;
    }
    .icon-img {
      height: 160px;
      margin-bottom: 20px;
    }
    .grad-section {
      padding: 60px 0;
    }
    .section-title {
      font-weight: bold;
      margin-bottom: 15px;
    }
  </style>
</head>
<body>

<?php include 'assets/include/navbar.php'; ?>
<div class="hero text-center py-5">
<div class="container grad-section" style="margin-top: -75px;">
  <div class="text-center mb-5">
    <h1 class="fw-bold">WHO WE ARE</h1>
    <p>
      Valenin IT Services is your dedicated partner for comprehensive IT software solutions, committed to transforming your business through technology. 
      We specialize in providing tailored services to meet the unique needs of each business, from small enterprises to large corporations.
    </p>
  </div>

  <div class="row text-center row-cols-1 row-cols-md-3">
  <div class="col icon-section">
    <img src="assets/images/target.png" alt="Mission Icon" class="icon-img"/>
    <h5 class="section-title">MISSION</h5>
    <p>
      Our mission is to empower businesses through innovative and reliable IT solutions.
      We are committed to providing exceptional service and support, tailored to the unique needs of each client.
      Our goal is to enhance operational efficiency, foster growth, and drive success by leveraging the latest technologies and best practices.
    </p>
  </div>

  <div class="col icon-section">
    <img src="assets/images/vision.png" alt="Vision Icon" class="icon-img"/>
    <h5 class="section-title">VISION</h5>
    <p>
      Our vision is to be the leading provider of innovative IT solutions, recognized for our commitment to excellence and our ability to transform businesses through technology.
      We aim to set the standard for quality and reliability in the IT services industry.
    </p>
  </div>

  <div class="col icon-section">
    <img src="assets/images/value.png" alt="Values Icon" class="icon-img"/>
    <h5 class="section-title">VALUES</h5>
    <p>
      We value integrity, innovation, and customer-centricity. 
      Our actions are guided by transparency, accountability, and a relentless focus on client success. 
      We believe in building strong relationships and delivering long-term value.
    </p>
  </div>
</div>
</div>
</div>
    <div class="hero1 bg-success text-center text-white py-5" style="background-image: linear-gradient(#7cd4ac, #35734e);">
    <div class="container">
        <h1 class="fw-bold">OUR TEAM</h1>
        <div style="position: relative; display: flex; align-items: center;">
            <!-- Carousel Left Button -->
            <button class="carousel-btn left" onclick="scrollTeam(-1)">&#10094;</button>

            <!-- Team Container -->
            <div class="team-container" id="teamContainer">
                <div class="team-box p-4">
                    <img src="<?php echo $t1; ?>" class="team-img" alt="Team 1">
                    <h4 class="fw-bold mt-3">Maychell Alcorin</h4>
                    <h6 class="fw-bold mt-3">Founder</h6>
                </div>
                <div class="team-box p-4">
                    <img src="<?php echo $t2; ?>" class="team-img" alt="Team 2">
                    <h4 class="fw-bold mt-3">Aina Mae Arroyo</h4>
                    <h6 class="fw-bold mt-3">QA & Frontline Support</h6>
                </div>
                <div class="team-box p-4">
                    <img src="<?php echo $t3; ?>" class="team-img" alt="Team 3">
                    <h4 class="fw-bold mt-3">Jenealle Mae Jimena</h4>
                    <h6 class="fw-bold mt-3">EA & UI/UX Designer</h6>
                </div>
                <div class="team-box p-4">
                    <img src="<?php echo $t4; ?>" class="team-img" alt="Team 4">
                    <h4 class="fw-bold mt-3">Vesanie Marie Bernal</h4>
                    <h6 class="fw-bold mt-3">Quality Assurance</h6>
                </div>
                <div class="team-box p-4">
                    <img src="<?php echo $t5; ?>" class="team-img" alt="Team 5">
                    <h4 class="fw-bold mt-3">Marie Dorothy Joy Taala</h4>
                    <h6 class="fw-bold mt-3">DevOps</h6>
                </div>
                <div class="team-box p-4">
                    <img src="<?php echo $t6; ?>" class="team-img" alt="Team 6">
                    <h4 class="fw-bold mt-3">Karlo Estaño</h4>
                    <h6 class="fw-bold mt-3">Web Developer</h6>
                </div>
                <div class="team-box p-4">
                    <img src="<?php echo $t7; ?>" class="team-img" alt="Team 7">
                    <h4 class="fw-bold mt-3">Paolo Vien Kier Patton</h4>
                    <h6 class="fw-bold mt-3">Web Developer</h6>
                </div>
                <div class="team-box p-4">
                    <img src="<?php echo $t8; ?>" class="team-img" alt="Team 8">
                    <h4 class="fw-bold mt-3">Jennifer Sabado</h4>
                    <h6 class="fw-bold mt-3">QA & Developer</h6>
                </div>
                <div class="team-box p-4">
                    <img src="<?php echo $t9; ?>" class="team-img" alt="Team 9">
                    <h4 class="fw-bold mt-3">Jose Phernando Lamud</h4>
                    <h6 class="fw-bold mt-3">System Support Analyst</h6>
                </div>
            </div>
<br><br>
            <!-- Carousel Right Button -->
            <button class="carousel-btn right" onclick="scrollTeam(1)">&#10095;</button>

        </div>
    </div>
</div>

    <?php include 'assets/include/footer.php'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function scrollTeam(direction) {
        const container = document.getElementById('teamContainer');
        const scrollAmount = 320; // Amount to scroll in px (approx. 1 card + gap)

        container.scrollBy({
            left: direction * scrollAmount,
            behavior: 'smooth'
        });
    }
    </script>
</body>
</html>
