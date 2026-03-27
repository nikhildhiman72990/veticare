<?php
session_start();
include './db.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if email already exists
    $checkUserQuery = "SELECT * FROM login_credentionals WHERE email = '$email' AND password= '$password'";
    $checkUserResult = mysqli_query($conn, $checkUserQuery);

    if (mysqli_num_rows($checkUserResult) == 1) {
        $row=mysqli_fetch_assoc($checkUserResult);
        $_SESSION['user_id'] = $row['user_id'];
        header("Location:./pet_record.php");
        exit();
    } else {
        $message="Email or password is incorrect.";
    }

    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login- veticare-animal_health</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Global Styles */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: black;
            color: white;
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }

        /* Header and Navigation */
        /* Fixed Navbar at the Top */
header {
    background: rgb(27, 25, 25);
    color: #fff;
    padding: 15px 0;
    position: fixed;  /* Keeps navbar fixed at the top */
    top: 0;
    left: 0;
    width: 100%;
    text-align: center;
    z-index: 1000;  /* Ensures it stays above other elements */
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.4);
}

/* Add space so content doesn't overlap with navbar */
body {
    padding-top: 70px; /* Adjust based on navbar height */
}

/* Navigation Styling */
nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
    text-align: center;
}

nav ul li {
    display: inline-block;
    margin: 0 15px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
    font-weight: bold;
    text-transform: uppercase;
    font-family: cursive;
    padding: 10px;
    transition: color 0.3s ease-in-out;
}

nav ul li a:hover {
    color: #FFD700;
}


        /* Page Title */
        .page-title {
            font-size: 40px;
            font-weight: bold;
            font-family: Arial, Helvetica, sans-serif;
            text-shadow: 0px 4px 20px black;
            margin: 20px 0;
        }

        /* Login Form Container */
        .login-container {
            background: rgba(255, 255, 255, 0.9);
            color: black;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.3);
            text-align: center;
            width: 350px;
            margin-top: 50px;
            animation: fadeIn 1s ease-in-out;
        }

        .login-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #222;
        }

        .login-container input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s ease-in-out;
        }

        .login-container input:focus {
            border-color: #0ada3b;
            outline: none;
        }

        /* Login Button */
        .login-container .btn {
            width: 100%;
            padding: 12px;
            background: #0ada3b;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }

        .login-container .btn:hover {
            background: #11e234;
            transform: scale(1.05);
        }

        /* Register Link */
        .register-link {
            margin-top: 15px;
            font-size: 14px;
        }

        .register-link a {
            color: #ff3b3b;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease-in-out;
        }

        .register-link a:hover {
            text-decoration: underline;
            color: #e60000;
        }

        /* Responsive Design */
        @media (max-width: 600px) {
            .login-container {
                width: 90%;
                padding: 30px;
            }
        }

        /* Fade In Animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <header>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="home.php#animals">Animals</a></li>
                <li><a href="home.php#gallery">Gallery</a></li>
                <li><a href="contactus.php">Contact</a></li>
                <li><a href="animalngo.php">NGOs</a></li>
                <li><a href="healthcenter.php">Health Center</a></li>
                <li><a href="pet_record.php">Pet record</a></li>
                <li><a href="templates/Home.html">Disease Prediction</a></li>
            </ul>
        </nav>
    </header>

    <!-- Login Form -->
    <div class="login-container">
        <h2>Login to Your Account</h2>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <input type="email" placeholder="Email" name="email" required>
            <input type="password" placeholder="Password" name="password" required>
            <button type="submit" class="btn">Login</button>
        </form>
        <p class="register-link">Don't have an account? <a href="register.php">Register here</a></p>
    </div>
</body>
</html>
