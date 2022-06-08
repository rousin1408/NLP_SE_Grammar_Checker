<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <link href="css/login.css" rel="stylesheet">
      <title>Grammar Agent | Spelling and Vocabulary Checker</title>
      <link rel="shortcut icon" type="image/jpg" href="./img/logo-icon.png"/>
    </head>
    <body>
      <div class="container">
        <ul>
            <li> <img src="img/logo.png" alt=""> </li></a>
        </ul>
      </div>
      <section id="contact-us">
        <br><br><br>
        
        <center>
          <div class="contain">
            <div class="contact-box">
              <div class="right">
                <h2>Login Your Account</h2>
                <form method="post" action="controller.php?aksi=login">
                <input name="Email" type="Email" class="field" placeholder="Email" required>
                <input name="Password" type="Password" class="field" placeholder="Password" required>
                
                <br>
                <h6 style=" color:gray">
                  <input class="check" type="checkbox"> Keep me logged in
                </h6>
                
                <button type="submit" name="submit" class="btn">Login</button>
                <br>
                <br>
                <a href="signup.php" style="text-decoration:none; color:gray">Don't have an Account ?</a>
              </form>
              </div>
            </div>
          </div>
      
        </center>
      </section>
    </body>
    <footer>
    <!-- Copyright Footer Start -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2022 Copyright Software Engineer / NLP Semester 4</a>
    </div>
    <!-- Copyright Footer End-->
      
    </footer>
</html>