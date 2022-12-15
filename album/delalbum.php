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
<style>
  input {
    margin-left:10px;
    margin-bottom:10px;
    padding: 10px;
    padding-left:40px;
    padding-right:40px;
    border-radius:10px;
    border-color:red;
    color:#403d39;
    background-color:white;
    font-weight: bold;
    font-size: 20px;
  }
  input:hover {

    transform: scale(1.05);

  }
</style>

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
          <li><a href="albums.php"><h1><span style="text-transform:uppercase;color:white;">Albums</span></h1></a>
          </ul>
        </li>
<pre>    </pre>
      </nav>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li class="dropdown"><a href="#"><h1><span style="text-transform:uppercase;color:white;"><?php echo  $_SESSION["name"]; ?></span></h1> <i class="bi bi-chevron-down"></i></a>
          <ul>
          <li><a href="viewpass.php">View Pass</a></li>
            <li><a href="deconnexion.php">Deconnexion</a></li>

          </ul>
        </li>

      </nav><!-- .navbar -->
<pre>       </pre>
    </div>
  </header><!-- End Header -->


  <main id="main">

  <section id="about"></section>
    <!-- ======= Gallery Section ======= -->
    <section id="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Select an Album</h2>
        </div>
      </div>

      <div class="gallery-slider swiper">
        <div class="swiper-wrapper align-items-center">

        <form action="" methode="GET">

        <?php  
$idu=$_SESSION["idu"];
$re="select * from album where idu=$idu";
$q=mysqli_query($conn,$re);
while($sq=mysqli_fetch_assoc($q)){
	$name=$sq["folder_name"];

    ?> 
    
      <input type="submit" name="folder" value="<?php echo "$name" ; ?>" id="">
    

	
<?php }
 }
else{
    header("location:index.php");
}

if(isset($_GET["folder"])){
  $nam=$_GET["folder"];

  $dir="../insert_pic/upload/$nam";
  $isDirEmpty = !(new \FilesystemIterator($dir))->valid();
  if($isDirEmpty){
    rmdir($dir);
    $sqlll="delete from album where folder_name='$nam'";
    $sss=mysqli_query($conn,$sqlll);
  }
  else{
    $sql="select * from album where idu=$idu and folder_name='$nam'";
    $qq=mysqli_query($conn,$sql);
    $f=mysqli_fetch_assoc($qq);
    $ida=$f["ida"];
  
    $sql1="select * from image where ida=$ida";
    $qq1=mysqli_query($conn,$sql1);
    while($f1=mysqli_fetch_assoc($qq1)){
      $n=$f1["file_name"];
      $file="../insert_pic/upload/$nam/$n";
      unlink($file);
      $sqll="delete from image where file_name='$n'";
      $ss=mysqli_query($conn,$sqll);
      $sqlll="delete from album where folder_name='$nam' and idu=$idu";
      $ssl=mysqli_query($conn,$sqlll);
      $dir1="../insert_pic/upload/$nam";
      $isDirEmpty1 = !(new \FilesystemIterator($dir1))->valid();
      if($isDirEmpty1){
        rmdir($dir1);
      }
    }
  
  }


    header("location:albums.php");


}
?>
</form>
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