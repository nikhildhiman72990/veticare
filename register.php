<?php
include './db.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if email already exists
    $checkEmailQuery = "SELECT email FROM login_credentionals WHERE email = '$email'";
    $checkEmailResult = mysqli_query($conn, $checkEmailQuery);

    if (mysqli_num_rows($checkEmailResult) > 0) {
        $message = "Email ID already exists";
    } else {
        // Insert new user
        $insertQuery = "INSERT INTO `login_credentionals`(`username`, `password`, `email`) VALUES('$username', '$password', '$email')";
        
        if (mysqli_query($conn, $insertQuery)) {
            $message = "Account created successfully";
            header("Location:./login.php");
        exit();
        } else {
            $message = "Error: " . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register-Veticare </title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color:black;
            color: white;
            background-size:contain;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }
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
        .register-container {
            background: white;
            color: black;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 350px;
            margin-top: 80px;
        }
        .register-container h2 {
            margin-bottom: 20px;
        }
        .register-container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .register-container .btn {
            width: 100%;
            padding: 12px;
            background: #0bdf39;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background 0.3s ease-in-out;
        }
        .register-container .btn:hover {
            background: #2b0505;
        }
        .login-link {
            margin-top: 15px;
        }
        .login-link a {
            color: #ff3b3b;
            text-decoration: none;
            font-weight: bold;
        }
        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
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
    <div class="register-container">
        <h2>Create an Account</h2>
        <?php if(isset($message)) { echo $message;} ?>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <input type="text" placeholder="Username" name="username" required>
            <input type="email" placeholder="Email" name="email" required>
            <input type="password" placeholder="Password" name="password" required>
            <button type="submit" class="btn">Register</button>
        </form>
        <p class="login-link">Already have an account? <a href="login.php">Login here</a></p>
    </div>
</body>
</html>
