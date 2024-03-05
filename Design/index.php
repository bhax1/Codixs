<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Getting Started</title>

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/hero.css">
  <link rel="stylesheet" href="css/about.css">
  <link rel="stylesheet" href="css/cursor.css">
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="css/dev.css">
  <link rel="stylesheet" href="css/footer.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>



  <!-- For Modals (User) -->
  <div class="login_popup">
    <div class="container" id="container">
      <div class="form-container sign-up-container">
        <form action="index.php" method="post">
          <h1>Create Account</h1>
          <span>or use your email for registration</span>
          <input type="text" name="createname" placeholder="Name" />
          <input type="email" name="createemail" placeholder="Email" />
          <input type="password" name="createpassword" placeholder="Password" />
          <input type="text" name="verify" placeholder="Enter Your Crush Name" />
          <button type="submit" name="signupPop">Sign Up</button>
        </form>
      </div>

      <div class="form-container sign-in-container">
        <form action="index.php" method="post">
          <h1>Sign in</h1>
          <span>or use your account</span>
          <input type="email" name="email" placeholder="Email" />
          <input type="password" name="password" placeholder="Password" />
          <a href="recover.php" onclick="alert('Welcome to Recovery Account!'); setTimeout(function(){ window.location.href = 'recover.php'; }, 100);">Forgot Password? and Username?</a>
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

<!-- For Modals (Admin) -->
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">
                    <i class="fa-solid fa-key" aria-hidden="true"></i>
                </div>
                <div class="col-lg-12 login-title">
                    ADMIN PANEL
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form>
                            <div class="form-group">
                                <label class="form-control-label">USERNAME</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input type="password" class="form-control" i>
                            </div>

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <button id="" type="submit" class="ghost">LOGIN</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>




  <!-- For Navbar -->
  <header>
    <nav class="navbar">
      <div class="nav_logo"><a href="#"><span>CODIXSGO</span></a></div>
      <ul class="nav_links">
        <li><a href="#home" class="active">Home</a></li>
        <li><a href="#page1">About</a></li>
        <li><a href="#page2">Devs</a></li>
        <li><a href="#" class="action_btn_login" id="login">Log In</a></li>
        <li><a href="#" class="action_btn_login" id="login">Admin</a></li>
      </ul>
      <div class="main">
        <a class="action_btn_login" id="login">Log In</a>
        <a class="action_btn_login" id="login">Admin</a>
        <div class="fa-solid fa-bars" id="menu_icon"></div>
      </div>
    </nav>
  </header>


  <!-- Sections -->


  <section id="home" class="home">
    <div class="color_1"></div>
    <div class="hero">
      <img src="img/Coding_Language_free_vector_icons_designed_by_Flat_Icons-removebg-preview.png" alt="">
      <div class="hero-text">
        <h1><span class="auto-type"></span></h1>
        <h3><span>Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Tempore, ipsum! Maxime provident praesentium ea incidunt atque
            quo voluptate dolorem doloribus beatae, perferendis adipisci veniam
            iure unde cum explicabo commodi quasi?</span></h3>
        <button class="button-19" role="button">Getting Started</button>
      </div>
    </div>
  </section>




  <section id="page1" class="page1">
    <div class="About">
      <h2 class="headings">About</h2>
    </div>
  </section>



  <section id="page2" class="page2">
    <div class="Devs">
      <div class="color_3"></div>
      <h2 class="headings">Developers</h2>
      <div class="wrapper" data-aos="fade-up">
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
            <h2>Lawrence</h2>
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


  <!-- Cursor -->
  <div class="cursor">
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
  </div>




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
    <p>&copy;2024 CodixGo | All Rights Reserved</p>
  </footer>


  <!-- Online Script -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

  <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
  <script>
    AOS.init({
      duration: 3000,
      once: true,
    });
  </script>

  <!-- Local Script -->
  <script type="text/javascript" src="js/script.js"></script>
  <script type="text/javascript" src="js/moveCard.js"></script>
  <script type="text/javascript" src="js/moveCursor.js"></script>
  <script type="text/javascript" src="js/modals.js"></script>




  <?php
  require('./database.php');

  if (isset($_POST['signup'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $Verify = $_POST['verify'];
    $date = date('Y-m-d H:i:s'); // Add a semicolon here
    if (strlen($password) <= 5) {
      echo "The password is less than 5 characters!";
    } else if (empty($name) || empty($email) || empty($password)) {
      echo "Please fill up all forms!";
    } else {
      // If the password meets the criteria, proceed with the insertion
      $querys = "INSERT INTO list (Name, Password, Date, Email,Verify) VALUES ('$name', '$password', '$date','$email','$Verify')";
      if (mysqli_query($connection, $querys)) {
        echo "<script>alert('Successfully Created');</script>";
      } else {
        // Check if the error is due to duplicate entry for the unique constraint on the Email field
        if (strpos(mysqli_error($connection), 'Duplicate entry') !== false) {
          echo "Error: This email address is already in use.";
        } else {
          echo "Error: " . $querys . "<br>" . mysqli_error($connection);
        }
      }
    }
  }


  if (isset($_POST['signin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email) && !empty($password)) {
      $query = mysqli_query($connection, "SELECT * FROM list WHERE Email='$email'");
      $no = mysqli_num_rows($query);
      if ($no > 0) {
        $data = mysqli_fetch_assoc($query);
        if ($data['Password'] == $password) {
          $_SESSION['ID'] = $data['ID'];
          echo '<script>alert(' . $_SESSION['ID'] . ')</script>';
          echo "<script>
                alert('Login Successfully!');
                window.location.href = '/project/login.php'; // Redirect to Admin.php
                </script>";
          exit();
        } else {
          echo '<p class="error-message">Wrong password. Please try again.</p>';
        }
      } else {
        echo '<p class="error-message">Wrong user ID. Please check your input and try again.</p>';
      }
    } else {
      echo '<p class="error-message">Please fill in all fields.</p>';
    }
  }
  ?>

</body>

</html>