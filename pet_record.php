<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

include 'db.php';

$user_id = $_SESSION['user_id'];
$stmt = $conn->prepare("SELECT * FROM pet_records WHERE user_id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$records = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Records - Veticare</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-image: url("https://images.pexels.com/photos/158063/bellingrath-gardens-alabama-landscape-scenic-158063.jpeg?auto=compress&cs=tinysrgb&w=600");
            color: white;
            background-size: Cover;

            background-position: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        header {
            background: rgb(27, 25, 25);
            color: #fff;
            padding: 15px 0;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            text-align: center;
            z-index: 1000;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.4);
        }

        body {
            padding-top: 70px;
        }

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

        .container {
            background: rgba(255, 255, 255, 0.9);
            color: black;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.3);
            text-align: center;
            width: 400px;
            margin-top: 80px;
        }

        h2 {
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            padding: 12px;
            background: #0ada3b;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 18px;
            transition: all 0.3s ease-in-out;
        }

        .btn:hover {
            background: #11e234;
            transform: scale(1.05);
        }

        table {
            margin-top: 20px;
            width: 90%;
            max-width: 800px;
            border-collapse: collapse;
            background: white;
            color: black;
            border-radius: 5px;
            overflow: hidden;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #0ada3b;
            color: white;
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
            <li><a href="pet_record.php">Pet Record</a></li>
            <li><a href="logout.php">Logout</a></li>
            <li><a href="templates/Home.html">Disease Prediction</a></li>
        </ul>
    </nav>
</header>

<div class="container">
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username'] ?? 'User'); ?>!</h2>
    <a href="manage_pets.php" class="btn">Manage Pet Records</a>
</div>

<h2>Your Pet Records</h2>

<table>
    <tr>
        <th>Pet Name</th>
        <th>Category</th>
        <th>Breed</th>
        <th>Vaccine</th>
        <th>Date of Vaccine</th>
    </tr>
    <?php while ($row = $records->fetch_assoc()) { ?>
        <tr>
            <td><?php echo htmlspecialchars($row['pet_name']); ?></td>
            <td><?php echo htmlspecialchars($row['pet_category']); ?></td>
            <td><?php echo htmlspecialchars($row['pet_breed']); ?></td>
            <td><?php echo htmlspecialchars($row['vaccine']); ?></td>
            <td><?php echo htmlspecialchars($row['date_of_vaccine']); ?></td>
        </tr>
    <?php } ?>
</table>

</body>
</html>
