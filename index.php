<?php
  session_start();
?>

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
  <link rel="stylesheet" href="css/about.css">
  <link rel="stylesheet" href="css/cursor.css">
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="css/dev.css">
  <link rel="stylesheet" href="css/footer.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>



  <!-- For User -->
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
          <a href="recovery.php" onclick="alert('Welcome to Recovery Account!'); setTimeout(function(){ window.location.href = 'recovery.php'; }, 100);">Forgot Password? and Username?</a>
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


<!-- For Admin -->
<div class="login-box">
  <h2>Admin Login 🔑</h2>
  <form action="index.php" method="POST">
    <div class="user-box">
      <input type="text" name="username" >
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="password" name="password" >
      <label>Password</label>
    </div>
    <input class="submit" type="submit" name="submit" value="Login">
  </form>
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
        <li><a href="#" class="action_btn_admin" id="login">Admin</a></li>
      </ul>
      <div class="main">
        <a class="action_btn_login" id="login">Log In</a>
        <a class="action_btn_admin" id="login">Admin</a>
        <div class="fa-solid fa-bars" id="menu_icon"></div>
      </div>
    </nav>
  </header>


  <!-- Sections -->
  <section id="home" class="home">
    <div class="hero">
      <img src="img/Coding_Language_free_vector_icons_designed_by_Flat_Icons-removebg-preview.png" alt="">
      <div class="hero-text">
        <h1><span class="auto-type"></span></h1>
        <h3><span>Welcome to CodixsGo! Elevate your coding skills with tailored quizzes. Join our community today and start your journey to mastery.</span></h3>
        <button class="button-19 action_btn_login" id="gettingStarted" role="button">Getting Started</button>
      </div>
    </div>
  </section>




  <section id="page1" class="page1">
    <div class="About" data-aos="fade-up">
      <h2 class="headings">About</h2>
      <div class="about-text">
      <h2><span>
      Welcome to CodixsGo, where coding isn't just a solitary endeavor - 
      it's a collaborative journey. Tailored for beginners and seasoned developers alike,
       our platform offers a diverse range of quizzes covering various programming languages and topics. 
       What sets us apart is our unique feature allowing users to create their quizzes, 
       fostering a collaborative learning environment where coding enthusiasts come together to share knowledge 
       and insights. Join us today to start your journey of learning, growth, and endless possibilities in the world of coding.
      </span></h2>

      </div>
    </div>
  </section>



  <section id="page2" class="page2">
    <div class="Devs" data-aos="fade-up">
      <h2 class="headings">Developers</h2>
      <div class="wrapper">
        <i id="left" class="fa-solid fa-angle-left"></i>
        <ul class="carousel">
          <li class="card">
            <div class="img"><img src="img/user.png" alt="img" draggable="false"></div>
            <h2>Mico</h2>
            <span>Front-End Developer</span>
            <span>⭐⭐⭐</span>
          </li>
          <li class="card">
            <div class="img"><img src="img/user.png" alt="img" draggable="false"></div>
            <h2>Joshua</h2>
            <span>Full Stack Developer</span>
            <span>⭐⭐⭐</span>
          </li>
          <li class="card">
            <div class="img"><img src="img/user.png" alt="img" draggable="false"></div>
            <h2>Lawrence</h2>
            <span>Front-End Developer</span>
            <span>⭐⭐⭐</span>
          </li>
          <li class="card">
            <div class="img"><img src="img/user.png" alt="img" draggable="false"></div>
            <h2>Augustine</h2>
            <span>Back-End Developer</span>
            <span>⭐⭐⭐⭐</span>
          </li>
          <li class="card">
            <div class="img"><img src="img/user.png" alt="img" draggable="false"></div>
            <h2>Bob</h2>
            <span>Full Stack Developer</span>
            <span>⭐⭐⭐⭐⭐</span>
          </li>
        </ul>
        <i id="right" class="fa-solid fa-angle-right"></i>
      </div>
    </div>
  </section>


  <!-- Cursor -->
  <div id="blob"></div>
  <!-- <div id="blur"></div> -->

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

  if (isset($_POST['signupPop'])) {
    $name = $_POST['createname'];
    $email = $_POST['createemail'];
    $password = $_POST['createpassword'];
    $Verify = $_POST['verify'];
    $date = date('Y-m-d H:i:s');
    if (strlen($password) <= 5) {
      echo "<script>alert('The password is less than 5 characters!');</script>";
    } else if (empty($name) || empty($email) || empty($password)) {
      echo "Please fill up all forms!";
    } else {
      $querys = "INSERT INTO list (Name, Password, Date, Email,Verify) VALUES ('$name', '$password', '$date','$email','$Verify')";
      if (mysqli_query($connection, $querys)) {
        echo "<script>alert('Successfully Created');</script>";
      } else {
        if (strpos(mysqli_error($connection), 'Duplicate entry') !== false) {
          echo "<script>alert('This email address is already in use.');</script>";
        } else {
          echo "Error: " . $querys . "<br>" . mysqli_error($connection);
        }
      }
    }
  }

  if (isset($_POST['signinPop'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email) && !empty($password)) {
        $query = "SELECT * FROM `list` WHERE `Email` = '$email'";
        $result = mysqli_query($connection, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            if ($password === $row['Password']) {
                $_SESSION['id'] = $row['ID'];
                $_SESSION['name'] = $row['Name'];
                echo '<script>alert("Login Successfully!"); window.location.href = "index-user.php";</script>';
                exit();
            } else {
                echo '<script>alert("Wrong password. Please try again.");</script>';
            }
        } else {
            echo '<script>alert("No existing account with the provided email.");</script>';
        }
    } else {
        echo '<script>alert("Please fill in all fields.");</script>';
    }
  }

  if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($password)) {
        $query = "SELECT * FROM `list` WHERE `ID` = 0 AND Name = '$username'";
        $result = mysqli_query($connection, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            if ($password === $row['Password']) {
                $_SESSION['id'] = $row['ID'];
                $_SESSION['name'] = $row['Name'];
                echo "<script>
                    alert('Welcome Master!');
                    window.location.href = 'index-admin.php'; 
                    </script>";
                exit();
            } else {
                echo '<script>alert("Wrong password. Please try again.");</script>';
            }
        } else {
          echo "<script>alert('Incorrect Username!');</script>";
        }
    } else {
        echo '<script>alert("Please fill in all fields.");</script>';
    }
  }
?>

</body>

</html>