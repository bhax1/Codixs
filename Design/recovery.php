<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recovery Account</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
        <form method="POST" action="recovery.php">
            <h2 class="glow">Recovery Account</h2>
            <div class="inputBox">
                <input type="email" name="email" placeholder="Enter Your Email" />
                <i></i>
            </div>
            <div class="button-container">
                <input type="submit" name="enter" value="Enter" />
                <input type="submit" name="back" value="Back" />
            </div>

            <?php
            session_start(); // Start the session
            
            require('./database.php');
            $emailIdData = array();
            $ID = '';
            if(isset($_POST['enter'])){
                $email = $_POST['email'];
                if(empty($email)){
                    echo "<div class='output' style='text-align: center; margin-top: 80px;'>";
                    echo "<p class='message shine '>Please Fill Up the TextField.</p>";
                    echo "</div>";
                } else {
                    $query = mysqli_query($connection, "SELECT * FROM list WHERE email='$email'");
                    $no = mysqli_num_rows($query);
                    if($no > 0) {
                        $data = mysqli_fetch_assoc($query);
                        $ID = $data['ID'];
                        $_SESSION['recovery_id'] = $ID; // Set the session variable here
                        $username = $data['Name'];
                        $password = $data['Password'];
                        $verify = $data['Verify'];

                        // Show verification form
                        echo "<div class='verification-form'>";
                        echo "<form method='POST' action='recover.php'>";
                        echo "<h2 class='glow'>Verification Question</h2>";
                        echo "<label for='verification' class='verification-label'>What is your crush name?</label>";
                        echo "<input type='text' id='verification' name='verification' placeholder='Enter your crush name' required>";
                        echo "<div class='button-container'>";
                        echo "<input type='submit' name='verify' value='Verify' />";
                        echo "</div>";
                        echo "</form>"; // Close the form here
                        echo "</div>"; // Close the verification form div
                    } else {
                        // Display the message if email does not exist with animations
                        echo "<div class='output' style='text-align: center; margin-top: 80px;'>";
                        echo "<p class='message shine '>Email does not exist.</p>";
                        echo "</div>";
                    }
                }
            }

            if (isset($_POST['verify'])) {
                $verification = $_POST['verification'];
                $ID = $_SESSION['recovery_id']; // Retrieve $ID value from session
                $query = mysqli_query($connection, "SELECT * FROM list WHERE Verify='$verification'");
                $no = mysqli_num_rows($query);
                
                if ($no > 0) {
                    $data = mysqli_fetch_assoc($query);
                    $IDS = $data['ID'];

                    if ($IDS == $ID) {
                        $username = $data['Name'];
                        $password = $data['Password'];
                    
                        echo "<div class='output' style='text-align: center; margin-top: 80px;'>";
                        echo "<p class='message shine'>Username: $username</p>";
                        echo "<p class='message shine'>Password: $password</p>";
                        echo "</div>";
                    } else {
                        echo "<div class='output' style='text-align: center; margin-top: 80px;'>";
                        echo "<p class='message'>Verification failed. Please try again.</p>";
                        echo "</div>";
                    }
                } else {
                    echo "<div class='output' style='text-align: center; margin-top: 80px;'>";
                    echo "<p class='message'>Failed to retrieve email ID. Please try again.</p>";
                    echo "</div>";
                }
            }

            if (isset($_POST['back'])){
                echo "<script>
                alert('Back to Home Page!');
                window.location.href = '/Codixs/Design/index.php'; // Redirect to Admin.php
                </script>";
                exit();
            }
            ?>

        </form>
    </div>
</body>
</html>



<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Global styles */
body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #0f0f0f;
    font-family: 'Poppins', sans-serif;
}

/* Box styles */
.box {
    position: relative;
    width: 400px;
    height: 500px;
    background: #1c1c1c;
    border-radius: 8px;
    overflow: hidden;
    animation: boxRotate 6s linear infinite;
}

/* Form styles */
/* Form styles */
.box form {
    position: absolute;
    inset: 4px;
    background: rgba(10, 10, 10, 0.5); /* Adjust the opacity here */
    padding: 50px 40px;
    border-radius: 8px;
    z-index: 2;
    display: flex;
    flex-direction: column;
}


.box form h2 {
    color: #fff;
    font-weight: 500;
    text-align: center;
    letter-spacing: 0.1em;
    margin-bottom: 20px;
}
    
/* Glow effect */
.glow {
    animation: glowing 2s ease-in-out infinite alternate;
}

@keyframes glowing {
    0% {
        color: #45f3ff;
        text-shadow: 0 0 10px #45f3ff, 0 0 20px #45f3ff, 0 0 30px #45f3ff;
    }
    100% {
        color: #ff2770;
        text-shadow: 0 0 10px #ff2770, 0 0 20px #ff2770, 0 0 30px #ff2770;
    }
}

/* Input styles */
.box form .inputBox {
    position: relative;
    width: 100%;
    margin-top: 20px;
}

.box form .inputBox input {
    width: 100%;
    padding: 15px 10px;
    background: #333;
    outline: none;
    border: none;
    color: #fff;
    font-size: 1em;
    letter-spacing: 0.05em;
    transition: 0.5s;
    animation: twinkling 2s ease-in-out infinite alternate;
}

.box form .inputBox span {
    position: absolute;
    left: 10px;
    top: 50%;
    transform: translateY(-50%);
    color: #8f8f8f;
    font-size: 1em;
    letter-spacing: 0.05em;
    transition: 0.5s;
}

.box form .inputBox input:focus + span,
.box form .inputBox input:valid + span {
    color: #45f3ff;
    font-size: 0.75em;
    transform: translateY(-40px);
}

.box form .inputBox i {
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 2px;
    border-radius: 4px;
    overflow: hidden;
    transition: 0.5s;
    background: linear-gradient(90deg, #ff2770, #ff2770, #45f3ff, #45f3ff, #45f3ff);
    background-size: 400% 400%;
    animation: gradientBorder 8s linear infinite;
}

.box form .inputBox input:focus ~ i,
.box form .inputBox input:valid ~ i {
    animation: gradientBorder 8s linear infinite; /* Enable the animation */
}

/* Animation for border */
@keyframes gradientBorder {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}

/* Submit button styles */
.box form input[type="submit"] {
    border: none;
    outline: none;
    padding: 10px 25px;
    background: #45f3ff;
    cursor: pointer;
    font-size: 0.9em;
    border-radius: 4px;
    font-weight: 600;
    width: 100px;
    margin-top: 20px;
    animation: twinkling 2s ease-in-out infinite alternate;
}

.box form input[type="submit"]:hover {
    background: #00bcd4;
    animation: shining 1.5s ease-in-out infinite alternate;
}

/* Animation for alternating background */
.box::before,
.box::after {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 380px;
    height: 420px;
    background: linear-gradient(0deg, transparent, transparent, #45f3ff, #45f3ff, #45f3ff);
    z-index: 1;
    transform-origin: bottom right;
    animation: animateBlue 6s linear infinite;
}

.box::after {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 380px;
    height: 420px;
    background: linear-gradient(0deg, transparent, transparent, #ff2770, #ff2770, #ff2770);
    z-index: 1;
    transform-origin: bottom right;
    animation: animatePink 6s linear infinite;
    animation-delay: -3s; /* Delay the animation of the second gradient */
}

@keyframes animateBlue {
    0% {
        background: linear-gradient(0deg, transparent, transparent, #45f3ff, #45f3ff, #45f3ff);
        transform: rotate(0deg);
    }
    100% {
        background: linear-gradient(0deg, transparent, transparent, #45f3ff, #45f3ff, #45f3ff);
        transform: rotate(360deg);
    }
}

@keyframes animatePink {
    0% {
        background: linear-gradient(0deg, transparent, transparent, #ff2770, #ff2770, #ff2770);
        transform: rotate(0deg);
    }
    100% {
        background: linear-gradient(0deg, transparent, transparent, #ff2770, #ff2770, #ff2770);
        transform: rotate(360deg);
    }
}

@keyframes twinkling {
    0% {
        filter: brightness(1);
    }
    100% {
        filter: brightness(1.5);
    }
}

@keyframes shining {
    0% {
        box-shadow: 0 0 10px #45f3ff;
    }
    100% {
        box-shadow: 0 0 20px #45f3ff;
    }
}
.shine {
    animation: shining 1.5s ease-in-out infinite alternate;
}

@keyframes shining {
    0% {
        color: #45f3ff;
        text-shadow: 0 0 10px #45f3ff, 0 0 20px #45f3ff, 0 0 30px #45f3ff;
    }
    100% {
        color: #ff2770;
        text-shadow: 0 0 10px #ff2770, 0 0 20px #ff2770, 0 0 30px #ff2770;
    }
}
.button-container {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}
.verification-form {
    margin-top: 20px;
    text-align: center;
    display: flex;
    flex-direction: column; /* Ensure elements stack vertically */
    align-items: center; /* Center the items horizontally */
}

.verification-label {
    color: #fff;
    margin-bottom: 10px;
    display: block;
}

.verification-form input[type='text'] {
    width: 100%;
    padding: 15px 10px;
    background: #333;
    outline: none;
    border: none;
    color: #fff;
    font-size: 1em;
    letter-spacing: 0.05em;
    transition: 0.5s;
    animation: twinkling 2s ease-in-out infinite alternate;
    border-radius: 4px; /* Add border-radius */
    margin-bottom: 20px; /* Increase bottom margin for spacing */
}

.verification-form input[type='text']:focus {
    border: 1px solid #45f3ff; /* Change border color on focus */
}

.verification-form button[type='submit'] {
    padding: 10px 20px;
    background-color: #45f3ff;
    border: none;
    color: #fff;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.verification-form button[type='submit']:hover {
    background-color: #00bcd4;
}
.verification-form form {
    background: rgba(10, 10, 10, 0.5); /* Adjust the opacity here */
    padding: 50px 40px;
    border-radius: 8px;
}

.verification-form h2 {
    color: #fff;
    font-weight: 500;
    text-align: center;
    letter-spacing: 0.1em;
    margin-bottom: 20px;
}
.verification-form input[type='text'] {
    padding: 10px;
    width: 100%;
    margin-bottom: 10px;
    border-radius: 4px;
    border: 1px solid #ccc;
}

.verification-form button[type='submit'] {
    padding: 10px 20px;
    background-color: #45f3ff;
    border: none;
    color: #fff;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.verification-form button[type='submit']:hover {
    background-color: #00bcd4;
}
@keyframes jumpAnimation {
        0%, 20%, 50%, 80%, 100% {
            transform: translateY(0);
        }
        40% {
            transform: translateY(-20px);
        }
        60% {
            transform: translateY(-10px);
        }
    }

    .verification-label {
        color: #fff;
        margin-bottom: 10px;
        display: block;
        animation: jumpAnimation 3s infinite, shining 2s ease-in-out infinite alternate;
    }
    .verification-form input[type='text'] {
        width: 100%;
        padding: 15px 10px;
        background: #333;
        outline: none;
        border: none;
        color: #fff;
        font-size: 1em;
        letter-spacing: 0.05em;
        transition: 0.5s;
        animation: twinkling 2s ease-in-out infinite alternate;
        border-radius: 4px; /* Add border-radius */
        margin-bottom: 20px; /* Increase bottom margin for spacing */
    }

    .verification-form input[type='text']:focus {
        border: 1px solid #45f3ff; /* Change border color on focus */
    }
</style>
