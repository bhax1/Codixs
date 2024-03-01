<?php
    session_start();
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
    <div class="modal fade" role="dialog" tabindex="-1" id="modal-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Log Out</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to leave me alone?</p> 
                </div>
                <div class="modal-footer">
                    <button class="btn btn-light" type="button" data-bs-dismiss="modal">No</button>
                    <button class="btn btn-primary" type="button" id="yes_button">Yes</button>
                </div>
            </div>
        </div>
    </div>
    <section class="py-4 py-md-5">
        <div class="container-fluid" style="max-width: 1000px;min-width: auto;">
            <div class="card shadow mb-3">
                <div class="card-header py-3" style="padding: 16px;height: 65px;">
                    <h6 class="display-6 fs-3 fw-bold mb-5">User Profile</h6>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row" style="margin-bottom: 25px;text-align: center;">
                        <div class="col-sm-4 col-md-4 col-lg-3 col-xl-2 col-xxl-2" style="display: inline; text-align: center; margin-bottom: 25px;">
                        <img id="selectedPhoto" class="rounded-circle mb-3 mt-4 img-fluid" src="assets/img/dogs/Logo-5.png" style="display: inline; max-height: 110px;">
                            <br>
                            <button class="btn btn-primary btn-sm border rounded-pill" id="photoBtn" type="button">Change Photo</button>
                        </div>
                            <div class="col-sm-8 col-md-8 col-lg-9 col-xl-10 col-xxl-10 align-self-center">
                                <div class="row">
                                    <div class="col-md-12 text-start">
                                        <div class="mb-3"><label class="form-label" for="email"><strong>Email Address</strong></label><input class="form-control" type="email" id="email" placeholder="user@example.com" name="email" required="" disabled=""></div>
                                    </div>
                                    <div class="col-md-12 text-start">
                                        <div class="mb-3"><label class="form-label" for="username"><strong>Username</strong></label><input class="form-control" type="text" placeholder="Username" name="username" required=""></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 text-start">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h5>With label </h5>
                                        <div class="progress beautiful progress-lg">
                                            <div class="progress-bar bg-danger" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">80%</div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <h5>Striped </h5>
                                        <div class="progress beautiful">
                                            <div class="progress-bar bg-info progress-bar-striped" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"><span class="visually-hidden">70%</span></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <h5>Animated </h5>
                                        <div class="progress beautiful progress-xs">
                                            <div class="progress-bar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"><span class="visually-hidden">80%</span></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <h5>Animated </h5>
                                        <div class="progress beautiful">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"><span class="visually-hidden">80%</span></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <h5>Stacked </h5><div class="progress beautiful">
    <div class="progress-bar progress-bar-success" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 35%;"></div>
    <div class="progress-bar progress-bar-warning" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
    <div class="progress-bar progress-bar-danger" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 10%;"></div>
</div>
                                    </div>
                                    <div class="col-md-4">
                                        <h4>Bar Height</h4>
                                        <div class="progress beautiful progress-xs">
                                            <div class="progress-bar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%;"><span class="visually-hidden">15%</span></div>
                                        </div>
                                        <div class="progress beautiful progress-sm">
                                            <div class="progress-bar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%;"><span class="visually-hidden">15%</span></div>
                                        </div>
                                        <div class="progress beautiful progress-xs">
                                            <div class="progress-bar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%;"><span class="visually-hidden">15%</span></div>
                                        </div>
                                        <div class="progress beautiful progress-lg">
                                            <div class="progress-bar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%;"><span class="visually-hidden">15%</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 text-start">
                                <div class="mb-3">
                                    <div class="mb-3"><label class="form-label" for="username"><strong>Password</strong></label><input class="form-control" type="password" id="password" placeholder="Password"></div><label class="form-label" for="username"><strong>Confirm Password</strong></label><input class="form-control" type="password" id="verifyPassword" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-2 col-xl-2 col-xxl-2 offset-md-6 offset-lg-8 offset-xl-8 offset-xxl-8" style="text-align: center;margin-bottom: 10px;"><button class="btn btn-primary btn-sm border rounded-pill" id="submitBtn-3" type="submit" style="width: 150px;text-align: center;">Change Details</button></div>
                            <div class="col-md-3 col-lg-2 col-xl-2 col-xxl-2 offset-md-0 offset-lg-0 offset-xl-0 offset-xxl-0" style="text-align: center;margin-bottom: 10px;"><button class="btn btn-primary btn-sm border rounded-pill" id="submitBtn-2" type="submit" style="width: 150px;text-align: center;">Change Details</button></div>
                            <div class="col-md-3 col-lg-2 col-xl-2 col-xxl-2 offset-md-9 offset-lg-9 offset-xl-10 offset-xxl-10" style="text-align: center;margin-top: 10px;"><button class="btn btn-primary btn-sm border rounded-pill" id="submitBtn-1" type="button" style="width: 150px;text-align: center;background: var(--bs-danger);" data-bs-target="#modal-1" data-bs-toggle="modal">Log Out</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#yes_button').click(function() {
                $.ajax({
                    url: 'assets/php/destroy_session.php',
                    type: 'POST',
                    success: function(response) {
                        window.location.href = 'index.php';
                    }
                });
            });
        });
    </script>
</body>
</html>