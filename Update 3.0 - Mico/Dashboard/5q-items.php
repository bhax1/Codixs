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
                    <li class="nav-item"><a class="nav-link d-md-flex d-lg-flex d-xl-flex align-items-md-center align-items-lg-center align-items-xl-center" href="index.html" data-bs-target="#offcanvas-1" data-bs-toggle="offcanvas"><i class="icon ion-speedometer d-xl-flex" style="font-size: 25px;margin-right: 10px;margin-left: 10px;"></i><span class="d-xl-flex" style="font-size: 15px;">Dashboard</span></a></li>
                    <li class="nav-item">
                        <a class="nav-link d-md-flex d-lg-flex d-xl-flex align-items-md-center align-items-lg-center align-items-xl-center" href="profile.html"><i class="icon ion-android-person" style="font-size: 25px;margin-right: 10px;margin-left: 10px;"></i><span style="font-size: 15px;">Manage Accounts</span></a>
                        <a class="nav-link d-md-flex d-lg-flex d-xl-flex align-items-md-center align-items-lg-center align-items-xl-center" href="manage-quiz.html"><i class="icon ion-android-create" style="font-size: 25px;margin-right: 10px;margin-left: 10px;"></i><span style="font-size: 15px;">Manage Quiz</span></a>
                        <a class="nav-link d-md-flex d-lg-flex d-xl-flex align-items-md-center align-items-lg-center align-items-xl-center" data-bs-target="#modal-1" data-bs-toggle="modal" href="5q-items.html"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-plus-lg" style="margin-right: 10px;margin-left: 10px;font-size: 20px;"><path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"></path></svg><span style="font-size: 15px;">Create Quiz</span></a>
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
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">User</span><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person-fill" style="font-size: 20px;">
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
                    <h3 class="text-dark mb-4">Create Questions</h3>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold" style="--bs-primary: #181818;--bs-primary-rgb: 24,24,24;">Fill up the Form</p>
                        </div>
                        <div class="card-body">
                        <div class="col d-flex d-xl-flex justify-content-end justify-content-xl-start" style="margin-bottom: 10px">
                            <button id="backbtn" class="btn btn-primary d-xl-flex" type="button" style="margin-right: 10px; background: #181818; border-color: #181818;">Back to Manage</button>
                            <button id="addQuestionButton" class="btn btn-primary d-xl-flex" type="button" style="background: #181818; border-color: #181818;">Add Question</button>
                        </div>
                            <div class="flex-column">
                            <div class="card">
                                <div class="card">
                                    <?php
                                        $conn = new mysqli('localhost', 'root', '', 'codixs');
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } else {
                                            $select = mysqli_query($conn, "SELECT * FROM questions");
                                            while ($row = mysqli_fetch_array($select)) {
                                                echo '<div class="card-body">
                                                <h4 class="card-title">Question Title</h4>
                                                <p></p>
                                                <button class="btn btn-primary edit-btn" type="button" style="background: #181818;border-color: #181818;">Edit</button>
                                                <button class="btn btn-primary" type="button" style="margin-right: 10px;margin-left: 10px;background: #181818;border-color: #181818;">Delete</button>
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
                </div>
                <div class="modal fade" role="dialog" tabindex="-1" id="modal-1">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Choose the following</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body"><select class="border rounded" style="border-color: #181818;color: #181818;font-size: 22px;">
                                    <option value="1" selected="">Easy</option>
                                    <option value="2">Medium</option>
                                    <option value="3">Hard</option>
                                </select>
                                <p style="font-size: 18px;">Difficulty</p><select class="border rounded" style="border-color: #181818;color: #181818;font-size: 22px;">
                                    <option value="5" selected="">5</option>
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                </select>
                                <p style="font-size: 18px;">Questions</p>
                            </div>
                            <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Cancel</button><button class="btn btn-primary" type="button" style="background: #181818;border-color: #181818;">Create</button></div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" role="dialog" tabindex="-1" id="modal-2">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Choose the following</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body"><input type="text" name="quiz-name" placeholder="Enter your quiz name"></div>
                            <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Cancel</button><button class="btn btn-primary" type="button" style="background: #181818;border-color: #181818;">Create</button></div>
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
            <div class="modal fade" role="dialog" tabindex="-1" id="modal-4">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Choose the following</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                            <textarea rows="2" name ="promptquestion" class="form-control" placeholder="Enter your question"></textarea>
                            </div>
                            <div class="modal-body">
                                <textarea rows="2" name ="question_opt[0]" required="" class="form-control" placeholder="A"></textarea>
								<span><label><input type="radio" name="is_right[0]" class="is_right" value="a"> <small>Question Answer</small></label></span><br>
								<textarea rows="2" name ="question_opt[1]" required="" class="form-control" placeholder="B"></textarea>
								<label><input type="radio" name="is_right[1]" class="is_right" value="b"> <small>Question Answer</small></label><br>
								<textarea rows="2" name ="question_opt[2]" required="" class="form-control" placeholder="C"></textarea>
								<label><input type="radio" name="is_right[2]" class="is_right" value="c"> <small>Question Answer</small></label><br>
								<textarea rows="2" name ="question_opt[3]" required="" class="form-control" placeholder="D"></textarea>
								<label><input type="radio" name="is_right[3]" class="is_right" value="d"> <small>Question Answer</small></label>
                            </div>
                            <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Cancel</button><button id="modalCreateButton" class="btn btn-primary" type="button" style="background: #181818; border-color: #181818;">Create</button>
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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/theme.js"></script>

    <script>
    $(document).ready(function () {
        $('.is_right').on('change', function () {
            $('.is_right').not(this).prop('checked', false);
        });

        $("#addQuestionButton").click(function () {
            $("#modal-4").modal("show");
        });

        $("#modalCreateButton").click(function () {
            if ($("input[name^='is_right']:checked").length === 0) {
                alert("Please select a question answer.");
                return;
            } else {
                $("#modal-4").modal("hide");

                var savedquestions = true;
                var promptquestion = $("input[name='promptquestion']").val();
                var question_opt0 = $("select[name='question_opt[0]']").val();
                var question_opt1 = $("select[name='question_opt[1]']").val();
                var question_opt2 = $("select[name='question_opt[2]']").val();
                var question_opt3 = $("select[name='question_opt[3]']").val();
                var answer = $("input[name^='is_right']:checked").val();
                var eid = $_SESSION['quizid']['keyid'];
                $.ajax({
                    type: "POST",
                    url: "save-quiz.php",
                    data: {
                        eid: eid, 
                        savedquestions: savedquestions,
                        promptquestion: promptquestion,
                        question_opt0: question_opt0,
                        question_opt1: question_opt1,
                        question_opt2: question_opt2,
                        question_opt3: question_opt3,
                        answer: answer
                    },
                    dataType: "json",
                    success: function(response) {
                        if (response.status === 'success') {
                            console.log(response.message);
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
            }
            });
    });
    </script>
</body>
</html>