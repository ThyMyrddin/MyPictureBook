<?php  

include "connexion.php";
session_start();

if(isset($_SESSION["idu"])){
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>My Picture Book</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="" rel="icon">
  <link href="" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: TheEvent - v4.7.0
  * Template URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center ">
    <div class="container-fluid container-xxl d-flex align-items-center">

      <div id="logo" class="me-auto">
        <!-- Uncomment below if you prefer to use a text logo -->
        <h1><a href="">my<span>picture</span>book</a></h1>
        
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="albums1.php"><h1><span style="text-transform:uppercase;color:white;">Albums</span></h1></a>
          </ul>
        </li>
<pre>    </pre>
      </nav>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="#"><h1><span style="text-transform:uppercase;color:white;">VIEWER</span></h1></a>
        </li>

      </nav><!-- .navbar -->
<pre>       </pre>
      <a class="buy-tickets scrollto" href="deconnexion.php">deconnexion</a>

    </div>
  </header><!-- End Header -->


  <main id="main">

  <section id="about"></section>
    <!-- ======= Gallery Section ======= -->
    <section id="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>my Gallery</h2>
        </div>
      </div>

      <div class="gallery-slider swiper">
        <div class="swiper-wrapper align-items-center">


        <?php  
$idu=$_SESSION["idu"];
if(isset($_GET["folder"])){

  $name=$_GET["folder"];
  $_SESSION["namea"]=$name;
}
  else{
    $name=$_SESSION["namea"];
  }
$re="select * from album where idu=$idu and folder_name='$name'";
$q=mysqli_query($conn,$re);
$sq=mysqli_fetch_assoc($q);
$ida=$sq["ida"];
$_SESSION["ida"]=$ida;

$re1="select * from image where ida=$ida";
$q1=mysqli_query($conn,$re1);

while($sq1=mysqli_fetch_assoc($q1)){
	$link=$sq1["file_name"];

    ?> 
    <div class="swiper-slide"><a href="<?php echo "../insert_pic/upload/$name/$link" ; ?>" class="gallery-lightbox"><?php echo "<img src=\"../insert_pic/upload/$name/$link\" class=\"img-fluid\">"; ?></a></div>

	
<?php } ?>

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </section><!-- End Gallery Section -->

  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
<?php }
else{
    header("location:index.php");
}