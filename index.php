<?php $hasil='';

session_start();
session_regenerate_id(true);

$input=(array_key_exists('Sentence', $_POST)) ? $_POST['Sentence']: "";

if(isset($_POST['submit'])){
  $data = array('sentence' => $input);
  $url = "http://127.0.0.1:5000/spelling";
  $options = array(
    'http' => array(
    'method'  => 'POST',
    'content' => json_encode( $data ),
    'header'=>  "Content-Type: application/json\r\n" .
                "Accept: application/json\r\n"
    )
  );
  $context  = stream_context_create( $options );
  $result = file_get_contents( $url, false, $context );
  $response = json_decode( $result );
  $hasil = $result;
}

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
       
    <link href="css/style.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">

    <title>Grammar Agent | Spelling and Vocabulary Checker</title>
    <link rel="shortcut icon" type="image/jpg" href="./img/logo-icon.png"/>
  </head>
  
  <body>

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
      <div class="container"><a class="navbar-brand d-inline-flex" href="#"><span class="text-light fs-2 fw-bold ms-2">GRAMMAR AGENT</span></a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item px-2"><a class="nav-link fw-bold active" aria-current="page" href="#header">HOME</a></li>
            <li class="nav-item px-2"><a class="nav-link fw-bold" href="#content">GRAMMAR</a></li>
            <li class="nav-item px-2"><a class="nav-link fw-bold" href="#contact-us">CONTACT US</a></li>
          </ul>
          <form class="d-flex">
            <a class="text-primary" href="#!">
              <svg class="feather feather-phone-call" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              </svg>
            </a>
              
            <?php 
              if (isset($_SESSION["id"])) 
              {         
                if($_SESSION['Type_Account']=="GET TO PREMIUM"){
                
            ?>
            <a class="trigger">
              <div class="btnnav" > 
                <?=$_SESSION['Type_Account'] ?> 
              
              </div>
            </a>
            <?php }

            else if($_SESSION['Type_Account']=="PREMIUM"){
              echo'<div class="ms-6 text-light fw-bold" style="color:#FAA82B!important; padding: 0.5rem 0.5rem!important;">PREMIUM</div>';
            }?>
            <!-- pop up -->
            <div class="modal">
              <div class="modal-content">
                  <span class="close-button">&times;</span>
                  <ul>
                    <li><h1>Payment</h1></li>
                  </ul>
                      <ul>
                          <li>Name: <?=$_SESSION['Name']?> </li>
                          </ul>
                          <ul>
                            <li>Email: <?=$_SESSION['Email']?> </li>
                          </ul>
                          <ul>
                          <li>Bill: Rp. 20.000</li>
                          </ul>
                          <br>
                          <ul>
                          <li><a href="controller.php?aksi=Update&id=<?=$_SESSION["id"]?>"class="btn" id="bt">Submit</a></li>  
                          </ul>
              </div>
           

          </div>

            <div class="dropdown">
              <a href="#">
                <div class="ms-6 text-light fw-bold" style="padding: 0.5rem 0.5rem!important;"> 
                  <?=$_SESSION['Name']?> 
                </div>
              </a>
            <div class="dropdown-content">
              <a href="controller.php?aksi=logout">
                LOG OUT
              </a>
            </div>                     
                    
            <?php  
              
              
              }
              
              else{
                echo'<a href="signup.php"> <div class="ms-4 text-light fw-bold">SIGN UP</div> </a>';
                echo'<a href="login.php"> <div class="ms-4 text-light fw-bold">LOGIN</div> </a>';
              }
            ?>    
          </form>
        </div>
      </div>
    </nav>

    <!-- Navbar End -->

    <!-- Header Start -->

    <section class="py-0" id="header">
      <div class="bg-holder" style="background-image:url(img/dekstop-background.jpg);background-position:right top;background-size:contain;">
      </div>

      <div class="container">
        <div class="row align-items-center min-vh-75 min-vh-xl-100">
          <div class="col-md-8 col-lg-6 text-md-start text-center">
            <h1 class="display-1 lh-sm text-uppercase text-light" style=" text-shadow: 3px 2px 1px grey;">Grammar Checker For <br class="d-none d-xxl-block" /> Any Occasion</h1>
          </div>
        </div>
      </div>
    </section>

    <!-- Header End -->

    <!-- Content Start -->

    <section class="main-content" id="content">
      <center>
        <h3 style="color: #FAA82B;text-shadow: 3px 2px 1px grey; font-size:3em">Let Me Help You</h3>
      </center>

      <center>
        <div class="wrapper">
          <form method="POST">
            <ul>
              <li>
             
                <div class="wrap">
                <span><input class="textarea1" value="<?php if(isset($_POST['Sentence'])) {echo $_POST['Sentence'];}?>"  id="input"  name="Sentence" type="text"  placeholder="Enter your English text here...."></input></span>
                <div class="count">Word Count: <?php 
              if (isset($_SESSION["id"])) 
              { 
                if($_SESSION['Type_Account']=="GET TO PREMIUM"){
                  ?>
                   <span id="counted">0</span>/500 </div> 
                  <?php
                }
                else if($_SESSION['Type_Account']=="PREMIUM"){   
              ?>
              <span id="counted">0</span>/Unlimited </div> 
              <?php
              } 
              
             
                ?>
                
              <?php
              }
              else{
               
              
              ?>
               <span id="counted">0</span>/200 </div> 
              <?php 

            
              } ?>
                </div>

                  
              </li>
              <li>
                <img src="img/Arrow.png"style="padding-top:25%;" alt="">
              </li>
              <li>
                <div class="wrap">
                <span><textarea disabled class="textarea"   type="text" ><?=$hasil?></textarea></span>
                  <div class="count2"></div> 
                </div>
                  
              </li>
            </ul>

              
           
            <br>
            <input type="submit" value="Check"  name="submit" class="btn2">
          </form>
        </div>
      </center>
    </section>

    <!-- Content End -->

    <!-- Contact Us Start -->
      
    <section class="contact-us" id="contact-us">
      <br><br><br> 
      <center>
        <div class="contain">
          <div class="contact-box">
            <div class="right">
              <h2 style="color: white;">Contact Us</h2>
              <form method="post" action="email.php">
              <input name="Nama"type="Nama" class="field" placeholder="Your Name" required>
              <input name="Email"type="Email" class="field" placeholder="Your Email" required>
              <input name="Nomor_Telepon"type="Nomor_Telepon" class="field" placeholder="Phone" required>
              <textarea name="Pesan"placeholder="Message" class="field"></textarea>
              <a href="" name="submit" class="btn">Send</a>
            </form>
            </div>
          </div>
        </div>
      </center>
    </section>

    <!-- Contact Us End -->

    <!-- Copyright Footer Start -->

    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2022 Copyright Software Engineer / NLP Semester 4</a>
    </div>

    <!-- Copyright Footer End-->
    <script>
      Swal.fire(
      'Congratulation',
      'You Become Premium Now',
      'success'
      )
    </script>

    <script src="./js/main.js"></script>
        <script src="dist/sweetalert2.all.min.js"> </script>
        <script>
          const bt = document.getElementsById('bt');
          bt.addEventListener('click',function(){
            Swal.fire('any foll can use the computer')
          });





        </script>
    <script src="js/theme.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;700&amp;display=swap" rel="stylesheet">
    
    <!-- Javascript and Font Setting End -->
    
  </body>
</html>