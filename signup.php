<?php
    session_start();
    $connection = mysqli_connect('localhost','root', '', 'codixs') or die ('Unable to connect server');
?>

<!DOCTYPE html>
<html data-bs-theme="dark" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Contacts - Brand</title>
    <script>
        (function() {

            // JavaScript snippet handling Dark/Light mode switching

            const getStoredTheme = () => localStorage.getItem('theme');
            const setStoredTheme = theme => localStorage.setItem('theme', theme);
            const forcedTheme = document.documentElement.getAttribute('data-bss-forced-theme');

            const getPreferredTheme = () => {

                if (forcedTheme) return forcedTheme;

                const storedTheme = getStoredTheme();
                if (storedTheme) {
                    return storedTheme;
                }

                const pageTheme = document.documentElement.getAttribute('data-bs-theme');

                if (pageTheme) {
                    return pageTheme;
                }

                return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
            }

            const setTheme = theme => {
                if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                    document.documentElement.setAttribute('data-bs-theme', 'dark');
                } else {
                    document.documentElement.setAttribute('data-bs-theme', theme);
                }
            }

            setTheme(getPreferredTheme());

            const showActiveTheme = (theme, focus = false) => {
                const themeSwitchers = [].slice.call(document.querySelectorAll('.theme-switcher'));

                if (!themeSwitchers.length) return;

                document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
                    element.classList.remove('active');
                    element.setAttribute('aria-pressed', 'false');
                });

                for (const themeSwitcher of themeSwitchers) {

                    const btnToActivate = themeSwitcher.querySelector('[data-bs-theme-value="' + theme + '"]');

                    if (btnToActivate) {
                        btnToActivate.classList.add('active');
                        btnToActivate.setAttribute('aria-pressed', 'true');
                    }
                }
            }

            window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
                const storedTheme = getStoredTheme();
                if (storedTheme !== 'light' && storedTheme !== 'dark') {
                    setTheme(getPreferredTheme());
                }
            });

            window.addEventListener('DOMContentLoaded', () => {
                showActiveTheme(getPreferredTheme());

                document.querySelectorAll('[data-bs-theme-value]')
                    .forEach(toggle => {
                        toggle.addEventListener('click', (e) => {
                            e.preventDefault();
                            const theme = toggle.getAttribute('data-bs-theme-value');
                            setStoredTheme(theme);
                            setTheme(theme);
                            showActiveTheme(theme);
                        })
                    })
            });
        })();
    </script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="assets/css/bs-theme-overrides.css">
    <link rel="stylesheet" href="assets/css/progress-bars-progress.css">
</head>

<body>
    <nav class="navbar navbar-expand-md fixed-top navbar-shrink py-3 navbar-light" id="mainNav">
        <div class="container"><a href="index.php"><img src="assets/img/main-logo/CodixsGo.png" width="110" height="100"></a><a class="navbar-brand d-flex align-items-center" href="/"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                </ul>
                <div class="theme-switcher dropdown ms-auto" style="margin-right: 20px;margin-bottom: 10px;margin-top: 10px;"><a class="dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-sun-fill mb-1">
                            <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8M8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0m0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13m8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5M3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8m10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0m-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707M4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"></path>
                        </svg></a>
                    <div class="dropdown-menu"><a class="dropdown-item d-flex align-items-center" href="#" data-bs-theme-value="light"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-sun-fill opacity-50 me-2">
                                <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8M8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0m0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13m8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5M3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8m10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0m-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707M4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"></path>
                            </svg>Light</a><a class="dropdown-item d-flex align-items-center" href="#" data-bs-theme-value="dark"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-moon-stars-fill opacity-50 me-2">
                                <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278"></path>
                                <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"></path>
                            </svg>Dark</a><a class="dropdown-item d-flex align-items-center" href="#" data-bs-theme-value="auto"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-circle-half opacity-50 me-2">
                                <path d="M8 15A7 7 0 1 0 8 1zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16"></path>
                            </svg>Auto</a></div>
                </div>
                <?php
                    if (isset($_SESSION['email']) && isset($_SESSION['pass'])) {
                        $golink = 'profile.php';
                    } else {
                        $golink = 'login.php';
                    }
                    echo "<a class='btn btn-primary border rounded-pill shadow' role='button' href='$golink'><svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 20 20' fill='none' style='font-size: 25px;'>
                        <path fill-rule='evenodd' clip-rule='evenodd' d='M10 9C11.6569 9 13 7.65685 13 6C13 4.34315 11.6569 3 10 3C8.34315 3 7 4.34315 7 6C7 7.65685 8.34315 9 10 9ZM3 18C3 14.134 6.13401 11 10 11C13.866 11 17 14.134 17 18H3Z' fill='currentColor'></path>
                    </svg></a>";
                ?>
            </div>
        </div>
    </nav>
    <section class="py-5 mt-5"></section>
    <section class="py-4 py-xl-5 mb-5">
        <section class="py-4 py-md-5">
            <section class="py-4 py-md-5">
                <div class="container py-md-5">
                    <div class="row">
                        <div class="col-11 col-sm-9 col-md-6 col-xxl-6 offset-1 offset-sm-2 offset-md-0 offset-xxl-0 text-center"><img class="img-fluid w-100" src="assets/img/sign-in-up/Sign-Up.png"></div>
                        <div class="col-md-5 col-xl-4 text-center text-md-start">
                            <h2 class="display-6 fw-bold mb-5"><span class="underline pb-1"><strong>Sign up</strong></span></h2>
                            <form method="post" data-bs-theme="light">
                                <div class="mb-3"><input class="shadow-sm form-control" type="email" name="email" id="copiedEmail" placeholder="Email" required></div>
                                <div class="mb-3"><input class="shadow-sm form-control" type="text" name="username" placeholder="Username" required></div>
                                <div class="mb-3"><input class="shadow-sm form-control" type="password" name="password" placeholder="Password" required></div>
                                <div class="mb-3"><input class="shadow-sm form-control" type="password" name="password_repeat" placeholder="Confirm Password" required></div>
                                <div class="mb-5"><button class="btn btn-primary shadow" type="submit" name="processsignup">Create account</button></div>
                            </form>
                            <p class="text-muted">Have an account? <a href="login.php">Log in&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-arrow-narrow-right">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M5 12l14 0"></path>
                                        <path d="M15 16l4 -4"></path>
                                        <path d="M15 8l4 4"></path>
                                    </svg></a>&nbsp;</p>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </section>
    <footer>
        <div class="container py-4 py-lg-5">
            <div class="row row-cols-2 row-cols-md-4">
                <div class="col-12 col-md-3">
                    <div class="fw-bold d-flex align-items-center mb-2"><span>CodixsGo</span></div>
                    <p class="text-muted" style="color: #121643c0;">Learn to code while having fun!</p>
                </div>
                <div class="col-sm-4 col-md-3 offset-xl-0 text-lg-start d-flex flex-column">
                    <h3 class="fs-6 fw-bold">Developers</h3>
                    <p class="text-muted" style="color: #121643c0;">Bhax<br>LSLCoder<br>AelCee<br>Mixscoo<br>Butchoy</p>
                    <ul class="list-unstyled"></ul>
                </div>
            </div>
            <hr>
            <div class="text-muted d-flex justify-content-between align-items-center pt-3">
                <p class="mb-0">Copyright © 2024 CodixsGo</p>
            </div>
        </div>
    </footer>
    <div class="modal" tabindex="-1" role="dialog" id="signupSuccessModal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Signup Successful!</h5>
                    <button type="button" class="btn-close" id="closeproceed" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Welcome new user! Your signup was successful.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="modalproceed" data-bs-dismiss="modal">Proceed</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" tab ="-1" role="dialog" id="notsame">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Password does not match</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Please check your password if they match.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Okay</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" tab ="-1" role="dialog" id="shortpass">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Password is short</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>The password is less than 5 characters.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Okay</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" tab ="-1" role="dialog" id="accountexist">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Account already exist</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Account associated with this email already exist.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Okay</button>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script>
        var copiedEmail = localStorage.getItem('copiedEmail');
        document.getElementById('copiedEmail').value = copiedEmail;
    </script>
    <?php
        if (isset($_POST['processsignup'])) {
            if ($connection->connect_error) {
                die("Connection failed: " . $connection->connect_error);
            }
            
            $email = $_POST['email'];
            $username = $_POST['username'];
            $pass = $_POST['password'];
            $conpass = $_POST['password_repeat'];
            $date = date('Y-m-d H:i:s');
            
            $checkQuery = mysqli_query($connection, "SELECT * FROM list WHERE Email = '$email'");
            $existingRow = mysqli_fetch_array($checkQuery);
            
            if (empty($email) || empty($username) || empty($pass) || empty($conpass)) {
                echo "<script>
                        var entervariables = new bootstrap.Modal(document.getElementById('entervariables'));
                        entervariables.show();
                      </script>";
            } else {
                if (strlen($pass) <= 5) {
                    echo "<script>
                            var shortpass = new bootstrap.Modal(document.getElementById('shortpass'));
                            shortpass.show();
                        </script>";
                } else if ($pass != $conpass) {
                    echo "<script>
                            var notsame = new bootstrap.Modal(document.getElementById('notsame'));
                            notsame.show();
                        </script>";
                } else {
                    if ($existingRow) {
                        echo "<script>
                            var accountexist = new bootstrap.Modal(document.getElementById('accountexist'));
                            accountexist.show();
                        </script>";
                    } else {
                        $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);
                        $insertQuery = "INSERT INTO list (Name, Password, Date, Email) VALUES ('$username', '$hashedPassword', '$date', '$email')";
                        if (mysqli_query($connection, $insertQuery)) {
                            echo "<script>
                                var signupSuccessModal = new bootstrap.Modal(document.getElementById('signupSuccessModal'));
                                signupSuccessModal.show();
                                document.getElementById('modalproceed').addEventListener('click', function() {
                                window.location.href = 'index.php';
                                });
                                document.getElementById('closeproceed').addEventListener('click', function() {
                                    window.location.href = 'index.php';
                                });
                            </script>";
                        } else {
                            echo "<script>Error: '" . $insertQuery . "'<br>" . mysqli_error($connection) . "</script>";
                        }
                    };
                }
            };
        }
    ?>
</body>

</html>