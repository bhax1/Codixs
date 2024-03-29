<?php
    session_start();
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
                    <li class="nav-item"><a id="dashboardLink" class="nav-link d-md-flex d-lg-flex d-xl-flex align-items-md-center align-items-lg-center align-items-xl-center" data-bs-target="#offcanvas-1" data-bs-toggle="offcanvas"><i class="icon ion-speedometer d-xl-flex" style="font-size: 25px;margin-right: 10px;margin-left: 10px;"></i><span class="d-xl-flex" style="font-size: 15px;">Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link d-md-flex d-lg-flex d-xl-flex align-items-md-center align-items-lg-center align-items-xl-center" href="manage-quiz-user.php"><i class="icon ion-android-create" style="font-size: 25px;margin-right: 10px;margin-left: 10px;"></i><span style="font-size: 15px;">Manage Quiz</span></a></li>
                    <li class="nav-item"><a class="nav-link d-md-flex d-lg-flex d-xl-flex align-items-md-center align-items-lg-center align-items-xl-center" data-bs-target="#modal-1" data-bs-toggle="modal"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-plus-lg" style="margin-right: 10px;margin-left: 10px;font-size: 20px;"><path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"></path></svg><span style="font-size: 15px;">Create Quiz</span></a></li>
                    <li class="nav-item"><a class="nav-link d-md-flex d-lg-flex d-xl-flex align-items-md-center align-items-lg-center align-items-xl-center" href="take-quiz.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-chat-square-fill" style="font-size: 25px;margin-right: 10px;margin-left: 10px;"><path d="M2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z">
                        </path></svg><span style="font-size: 15px;">Take Quiz</span></a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-expand bg-white shadow mb-4 topbar static-top navbar-light">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars" style="color: #181818;"></i></button>
                        <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"></div>
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
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">User</span><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person-fill" style="font-size: 20px;">
                                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"></path>
                                        </svg></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in">
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#" data-bs-target="#modal-3" data-bs-toggle="modal"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Test your skills!</h3>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold" style="--bs-primary: #181818;--bs-primary-rgb: 24,24,24;">Quiz List</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <?php
                                    $conn = new mysqli('localhost', 'root', '', 'codixs');
                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    } else {
                                        $select = mysqli_query($conn, "SELECT * FROM quiz WHERE visibility = 'Public'");
                                        while ($row = mysqli_fetch_array($select)) {
                                            echo '<div class="col-sm-6 col-xl-6 offset-sm-0 offset-xl-0" style="margin-bottom: 10px;">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">' . $row['quizname'] . ' ('. $row['diff'] .')</h4>
                                                        <p>Creator: ' . $row['Name'] . '</p>
                                                        <button class="btn btn-primary play-btn" type="button" data-quiz-lvl="' . $row['diff'] . '" data-question-id="' . $row['eid'] . '" style="background: #181818;border-color: #181818;">Play</button>
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
                        </div>
                        <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Cancel</button><button class="btn btn-primary" type="button" style="background: #181818;border-color: #181818;" data-bs-target="#modal-2" data-bs-toggle="modal" id="save-quiz-btn">Create</button></div>
                    </div>
                </div>
            </div>
            <div class="modal fade" role="dialog" tabindex="-1" id="wantplay">
                <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Preparing</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <p>Ready to take a quiz?</p>
                        </div>
                        <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">No</button><button class="btn btn-primary" type="button" style="background: #181818;border-color: #181818;" id="confirmPlayQuiz">Yes</button></div>
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
                        <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">No</button><button id="logoutbtn" class="btn btn-primary" type="button" style="background: #181818;border-color: #181818;">Yes</button></div>
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
                $(".play-btn").click(function () {
                    var diff = $(this).data("quiz-lvl");
                    var eid = $(this).data("question-id");

                    $("#wantplay").modal("show");
                    $("#confirmPlayQuiz").data("quiz-lvl", diff);
                    $("#confirmPlayQuiz").data("question-id", eid);
                });

                $("#confirmPlayQuiz").click(function () {
                    var eid = $(this).data("question-id");
                    var diff = $(this).data("quiz-lvl");

                    $.ajax({
                        type: "POST",
                        url: 'mainQuiz.php',
                        data: { eid: eid, diff: diff },
                        dataType: "json",
                        success: function (response) {
                            if (response.totalquestions && response.totalquestions > 0) {
                                window.location.href = 'mainQuiz.php';
                            } else {
                                alert("This quiz is empty. Try another quiz.");
                            }
                        },
                        error: function () {
                            alert("Error: Unable to fetch total questions.");
                        }
                    });
                    $("#wantplay").modal("hide");
                });

            $("#save-quiz-btn").click(function(){
                var quizName = $("input[name='quiz-name']").val();
                var difficulty = $("select[name='difficulty']").val();
                $.ajax({
                    type: "POST",
                    url: "php/save-quiz.php",
                    data: {quizName: quizName, difficulty: difficulty},
                    dataType: "json",
                    success: function(response){
                        if (response.status === 'success') {
                            alert(response.message);
                            window.location.href = 'manage-quiz-user.php';
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
            });

                        $("#logoutbtn").click(function() {
                        var logout = 'logout';
                        $("#modal-3").modal("hide");
                        window.location.href = 'index.php';
                        $.ajax({
                            type: "POST",
                            url: "php/logout.php",
                            data: { logout: logout },
                            dataType: "json",
                            success: function(response) {
                            },
                            error: function(xhr, status, error) {
                                console.error(xhr.responseText);
                            }
                        });
                    });

            document.getElementById('dashboardLink').addEventListener('click', function() {
                window.location.href = 'index-user.php';
            });
        });
    </script>
</body>
</html>