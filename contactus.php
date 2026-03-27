<?php
// Database connection
$host = "localhost";
$user = "root"; // Change if needed
$password = ""; // Change if needed
$dbname = "veticare"; // Using the Veticare database

$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission (AJAX request)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    if (!empty($name) && !empty($email) && !empty($message)) {
        $stmt = $conn->prepare("INSERT INTO messages (name, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $message);

        if ($stmt->execute()) {
            echo "success";
        } else {
            echo "error";
        }
        $stmt->close();
    } else {
        echo "empty";
    }
    exit;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        /* Background */
        body {
            background: url("https://images.pexels.com/photos/1108099/pexels-photo-1108099.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1");
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-size: cover;
            background-position: center;
        }

        /* Header */
        header {
            background: rgb(27, 25, 25);
            color: #fff;
            padding: 15px 0;
            position: sticky;
            top: 0;
            width: 100%;
            z-index: 100;
            text-align: center;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.4);
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            display: inline-block;
            margin: 0 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            text-transform: uppercase;
            transition: color 0.3s ease;
            font-family: cursive;
            padding: 10px;
        }

        nav ul li a:hover {
            color: #FFD700;
        }

        /* Page Title */
        .cc {
            height: 100px;
            color: rgb(220, 210, 210);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
            font-weight: bold;
            text-shadow: 0px 2px 20px black;
            margin-top: 20px;
        }

        /* Contact Form */
        .container {
            max-width: 400px;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
            margin: 50px auto;
        }

        /* Form Styling */
        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        label {
            font-size: 14px;
            font-weight: bold;
            color: #111;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            border: 2px solid rgba(79, 74, 74, 0.5);
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.3);
            color: #222;
            outline: none;
            transition: all 0.3s ease;
        }

        input:focus, textarea:focus {
            border-color: #ff416c;
            box-shadow: 0px 0px 10px #ff416c;
        }

        /* Button */
        button {
            width: 100%;
            background: linear-gradient(45deg, #ff4b2b, #ff416c);
            color: white;
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        button:hover {
            background: linear-gradient(45deg, #ff416c, #ff4b2b);
            transform: scale(1.05);
            box-shadow: 0px 4px 15px rgba(255, 75, 43, 0.4);
        }

        /* Response Message */
        #responseMessage {
            font-weight: bold;
            margin-top: 10px;
            color:black;
        }

        /* Responsive */
        @media (max-width: 500px) {
            .container {
                width: 90%;
            }
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <header>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="home.php#animals">Animals</a></li>
                <li><a href="home.php#gallery">Gallery</a></li>
                <li><a href="contactus.php" class="active">Contact</a></li>
                <li><a href="animalngo.php">NGOs</a></li>
                <li><a href="healthcenter.php">Health Center</a></li>
                <li><a href="pet_record.php">Pet record</a></li>
                <li><a href="templates/Home.html">Disease Prediction</a></li>
            </ul>
        </nav>
    </header>

    <!-- Contact Title -->
    <h1 class="cc">Contact Us</h1>

    <!-- Contact Form -->
    <div class="container">
        <h2>Get in Touch</h2>
        <form id="contactForm">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <button type="submit">Send Message</button>
            </div>
        </form>
        <p id="responseMessage"></p>
    </div>

    <script>
        document.getElementById("contactForm").addEventListener("submit", function(event) {
            event.preventDefault();

            let formData = new FormData(this);
            let responseMessage = document.getElementById("responseMessage");

            fetch("contactus.php", {
                method: "POST",
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                responseMessage.innerHTML = data.includes("success") ? "<span style='color:green;'>Message sent successfully!</span>" : "<span style='color:red;'>Error submitting form.</span>";
                if (data.includes("success")) this.reset();
            })
            .catch(error => console.error("Error:", error));
        });
    </script>
</body>

</html>
