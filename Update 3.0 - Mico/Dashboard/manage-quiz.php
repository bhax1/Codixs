<?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['eid'])) {
            $_SESSION['eid'] = $_POST['eid'];
        } else {
            http_response_code(400);
            echo '<script>alert("Error: eid parameter is missing in the request.");</script>';
        }
    }
?>

<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Table - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0 navbar-dark" style="background: #181818;">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-code"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>cODIXSGO</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                <li class="nav-item">
                    <a id="dashboardLink" class="nav-link d-md-flex d-lg-flex d-xl-flex align-items-md-center align-items-lg-center align-items-xl-center" data-bs-target="#offcanvas-1" data-bs-toggle="offcanvas">
                        <i class="icon ion-speedometer d-xl-flex" style="font-size: 25px;margin-right: 10px;margin-left: 10px;"></i>
                        <span class="d-xl-flex" style="font-size: 15px;">Dashboard</span>
                    </a>
                </li>                   
                <li class="nav-item">
                        <a class="nav-link d-md-flex d-lg-flex d-xl-flex align-items-md-center align-items-lg-center align-items-xl-center" href="manage-account.html"><i class="icon ion-android-person" style="font-size: 25px;margin-right: 10px;margin-left: 10px;"></i><span style="font-size: 15px;">Manage Accounts</span></a>
                        <a class="nav-link d-md-flex d-lg-flex d-xl-flex align-items-md-center align-items-lg-center align-items-xl-center" href="manage-quiz.php"><i class="icon ion-android-create" style="font-size: 25px;margin-right: 10px;margin-left: 10px;"></i><span style="font-size: 15px;">Manage Quiz</span></a>
                        <a class="nav-link d-md-flex d-lg-flex d-xl-flex align-items-md-center align-items-lg-center align-items-xl-center" data-bs-target="#modal-1" data-bs-toggle="modal" href="5q-items.php"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-plus-lg" style="margin-right: 10px;margin-left: 10px;font-size: 20px;"><path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"></path></svg><span style="font-size: 15px;">Create Quiz</span></a>
                </ul>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-expand bg-white shadow mb-4 topbar static-top navbar-light">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars" style="color: #181818;"></i></button>
                        <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ..."><button class="btn btn-primary py-0" type="button" style="background: #181818;border-color: #181818;"><i class="fas fa-search"></i></button></div>
                        </form>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="me-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">Admin</span><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person-fill" style="font-size: 20px;">
                                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"></path>
                                        </svg></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="../profile.html"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#" data-bs-target="#modal-3" data-bs-toggle="modal"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Manage Quiz</h3>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold" style="--bs-primary: #181818;--bs-primary-rgb: 24,24,24;">Here are the list of the quiz you created</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                            <?php
                                $conn = new mysqli('localhost', 'root', '', 'codixs');
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                } else {
                                    $select = mysqli_query($conn, "SELECT * FROM quiz");
                                    while ($row = mysqli_fetch_array($select)) {
                                        echo '<div class="col-sm-6 col-xl-6 offset-sm-0 offset-xl-0" style="margin-bottom: 10px;">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">' . $row['quizname'] . '</h4>
                                                    <p>Quiz Type - ' . $row['type'] . ' ('. $row['diff'] .')</p>
                                                    <button class="btn btn-primary edit-btn" type="button" data-eid="' . $row['eid'] . '" style="background: #181818;border-color: #181818;">Edit</button>
                                                </div>
                                            </div>
                                        </div>';
                                    }
                                }
                                $conn->close();
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" role="dialog" tabindex="-1" id="modal-1">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Choose the following</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <input type="text" name="quiz-name" placeholder="Enter your quiz name">
                        </div>
                        <div class="modal-body">
                            <select name="difficulty" class="border rounded" style="border-color: #181818;color: #181818;font-size: 22px;">
                                <option value="Easy" selected="">Easy</option>
                                <option value="Medium">Medium</option>
                                <option value="Hard">Hard</option>
                            </select>
                            <p style="font-size: 18px;">Difficulty</p>
                            <select name="quiz-type" class="border rounded" style="border-color: #181818;color: #181818;font-size: 22px;">
                                <option value="Multiple Choice Questions" selected="">Multiple Questions</option>
                                <option value="Coding">Code</option>
                            </select>
                            <p style="font-size: 18px;">Quiz Type</p>
                        </div>
                        <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Cancel</button><button class="btn btn-primary" type="button" style="background: #181818;border-color: #181818;" id="save-quiz-btn">Create</button></div>
                    </div>
                </div>
            </div>
            </div>
            <div class="modal fade" role="dialog" tabindex="-1" id="modal-3">
                <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Log Out</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure do you want to log out?</p>
                        </div>
                        <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">No</button><button class="btn btn-primary" type="button" style="background: #181818;border-color: #181818;">Yes</button></div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © CodixsGo 2024</span></div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
        $(document).ready(function () {
            $('.edit-btn').click(function () {
                var eid = $(this).data('eid');
                
                // Send the eid to the server using Ajax
                $.ajax({
                    type: 'POST',
                    url: '', // Leave the URL empty to send the request to the same file
                    data: { eid: eid },
                    success: function(response) {
                        window.location.href = '5q-items.php';
                    },
                    error: function(xhr, status, error) {
                        console.error('Error saving eid to session: ' + error);
                    }
                });
            });
        });

        function openmanage() {
            window.location.href = 'manage-quiz.php';
        }

        function opencreate() {
            window.location.href = '5q-items.php';
        }

        $("#save-quiz-btn").click(function(){
                var quizName = $("input[name='quiz-name']").val();
                var difficulty = $("select[name='difficulty']").val();
                var quizType = $("select[name='quiz-type']").val();
                $.ajax({
                    type: "POST",
                    url: "save-quiz.php",
                    data: { quizName: quizName, difficulty: difficulty, quizType: quizType},
                    dataType: "json",
                    success: function(response){
                        if (response.status === 'success') {
                            window.location.href = 'manage-quiz.php';
                        } else {
                            console.error(response.message);
                            alert('Error: ' + response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                        alert('Error: ' + error);
                    }
                });
                $("#modal-1").modal("hide");
        });

        document.getElementById('dashboardLink').addEventListener('click', function() {
            // Redirecting to the desired file
            window.location.href = 'index-admin.html';
        });
    </script>
</body>
</html>