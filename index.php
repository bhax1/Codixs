<!DOCTYPE html>
<html lang="en">

<head>
  <script type="text/javascript">
    function preventBack(){window.history.forward()};
    setTimeout("preventBack()",0);
    window.onunload=function(){null;}
  </script>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Getting Started</title>

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/hero.css">
  <link rel="stylesheet" href="css/page1.css">
  <link rel="stylesheet" href="css/cursor.css">
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="css/Dev.css">
  <link rel="stylesheet" href="css/footer.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

  <!-- Cursor -->
  <div class="circle"></div>


  <!-- For Modals -->
  <div class="login_popup">
    <div class="container" id="container">
      <div class="form-container sign-up-container">
        <form action="index.php" method="post">
          <h1>Create Account</h1>
          <div class="social-container">
            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <span>or use your email for registration</span>
          <input type="text" name="createname" placeholder="Username" />
          <input type="email" name="createemail" placeholder="Email" />
          <input type="password" name="createpassword" placeholder="Password" />
          <button type="submit" name="signupPop">Sign Up</button>
        </form>
      </div>

      <div class="form-container sign-in-container">
        <form action="index.php" method="post">
          <h1>Sign in</h1>
          <div class="social-container">
            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <span>or use your account</span>
          <input type="email" name="email" placeholder="Email" />
          <input type="password" name="password" placeholder="Password" />
          <a href="#">Forgot your password?</a>
          <button type="submit" name="signinPop">Sign In</button>
        </form>
      </div>

      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1>Welcome Back!</h1>
            <p>To keep connected with us please login with your personal info</p>
            <button class="ghost" id="signIn">Sign In</button>
          </div>

          <div class="overlay-panel overlay-right">
            <h1>Hello, Friend!</h1>
            <p>Enter your personal details and start journey with us</p>
            <button class="ghost" id="signUp">Sign Up</button>
          </div>
        </div>
      </div>
    </div>
  </div>




  <!-- For Navbar -->
  <header>
    <nav class="navbar">
      <div class="nav_logo"><a href="#"><span>{CodixsGo}</span></a></div>
      <ul class="nav_links">
        <li><a href="#home" class="active">Home</a></li>
        <li><a href="#page1">About</a></li>
        <li><a href="#page2">Devs</a></li>
        <li><a href="#" class="action_btn_login" id="login">Log In</a></li>
      </ul>
      <div class="main">
        <a class="action_btn_login" id="login">Log In</a>
        <div class="fa-solid fa-bars" id="menu_icon"></div>
      </div>
    </nav>
  </header>


  <!-- Sections -->
  <section id="home" class="home">
    <div class="hero">
      <h1><span class="auto-type"></span></h1>
      <h3><span>Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Tempore, ipsum! Maxime provident praesentium ea incidunt atque
          quo voluptate dolorem doloribus beatae, perferendis adipisci veniam
          iure unde cum explicabo commodi quasi?</span></h3>

      <button class="button-19" role="button">Getting Started</button>
    </div>
  </section>




  <section id="page1" class="page1">
    <div class="AboutUs">


    </div>
  </section>



  <section id="page2" class="page2">
    <div class="Devs">
      <div class="wrapper">
        <i id="left" class="fa-solid fa-angle-left"></i>
        <ul class="carousel">
          <li class="card">
            <div class="img"><img src="img/user.png" alt="img" draggable="false"></div>
            <h2>Mico</h2>
            <span>Web Developer</span>
          </li>
          <li class="card">
            <div class="img"><img src="img/user.png" alt="img" draggable="false"></div>
            <h2>Joshua</h2>
            <span>Web Developer</span>
          </li>
          <li class="card">
            <div class="img"><img src="img/user.png" alt="img" draggable="false"></div>
            <h2>Laguidao</h2>
            <span>Web Developer</span>
          </li>
          <li class="card">
            <div class="img"><img src="img/user.png" alt="img" draggable="false"></div>
            <h2>Augustine</h2>
            <span>Web Developer</span>
          </li>
          <li class="card">
            <div class="img"><img src="img/user.png" alt="img" draggable="false"></div>
            <h2>Bob</h2>
            <span>Web Developer</span>
          </li>
        </ul>
        <i id="right" class="fa-solid fa-angle-right"></i>
      </div>
    </div>
  </section>







  <!-- For Footer -->
  <footer class="footer">
    <div class="waves">
      <div class="wave" id="wave1"></div>
      <div class="wave" id="wave2"></div>
      <div class="wave" id="wave3"></div>
      <div class="wave" id="wave4"></div>
    </div>
    <ul class="social-icon">
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-facebook"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-twitter"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-linkedin"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-instagram"></ion-icon>
        </a></li>
    </ul>
    <ul class="menu">
      <li class="menu__item"><a class="menu__link" href="#">Home</a></li>
      <li class="menu__item"><a class="menu__link" href="#">About Us</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Services</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Blog</a></li>
    </ul>
    <p>&copy;2024 CodixGo | All Rights Reserved</p>
  </footer>

  <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
  <script type="text/javascript" src="js/script.js" defer></script>
  <script type="text/javascript" src="js/moveCard.js" defer></script>

  <?php
    $connection = mysqli_connect('localhost', 'root', '', 'codixs');
    if (!$connection) {
      die('Unable to connect server: ' . mysqli_connect_error());
    }

    if (isset($_POST['signupPop'])) {
      $createname = $_POST['createname'];
      $createemail = $_POST['createemail'];
      $createpassword = $_POST['createpassword'];
      $hashed_password = password_hash($createpassword, PASSWORD_DEFAULT);
      $date = date('Y-m-d H:i:s');

      if (strlen($createpassword) <= 5) {
        echo "<script>alert('The password should be at least 6 characters long.');</script>";
      } else if (empty($createname) || empty($createemail) || empty($createpassword)) {
        echo "<script>alert('Please fill in all fields.');</script>";
      } else {
        $createname = mysqli_real_escape_string($connection, $createname);
        $createemail = mysqli_real_escape_string($connection, $createemail);

        $querys = "INSERT INTO list (Name, Password, Date, Email, Role) VALUES ('$createname', '$hashed_password', '$date','$createemail', 'User')";
        if (mysqli_query($connection, $querys)) {
          echo "<script>alert('Account successfully created');</script>";
        } else {
          $errorMessage = mysqli_error($connection);

          if (strpos($errorMessage, 'Duplicate entry') !== false) {
            echo "<script>alert('Email address is already in use');</script>";
          } else {
            echo "<script>alert('Error: Account creation failed.');</script>";
            error_log("Error: " . $querys . "\n" . $errorMessage);
          }
        }
      }
    }

    if (isset($_POST['signinPop'])) {
      $email = $_POST['email'];
      $password = $_POST['password'];

      if (!empty($email) && !empty($password)) {
        $query = mysqli_query($connection, "SELECT * FROM list WHERE Email='$email'");
        $row = mysqli_fetch_array($query);

        if ($row && password_verify($password, $row['Password'])) {
          session_start();
          $_SESSION['ID'] = $row['ID'];
          $_SESSION['Name'] = $row['Name'];

          echo '<script>alert('. $row['Name'] .');</script>';

          echo "<script>
                alert('Login Successfully!');
                window.location.href = 'index-user.html';
                </script>";
          exit();
        } elseif ($row) {
          echo "<script>alert('Wrong password. Please try again.');</script>";
        } else {
          echo "<script>alert('No existing account with the provided email.');</script>";
        }
      } else {
        echo "<script>alert('Please fill in all fields.');</script>";
      }
    }
  ?>
</body>

</html>