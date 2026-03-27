<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// Handle pet addition or update
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['save_pet'])) {
    $pet_name = trim($_POST['pet_name']);
    $pet_category = trim($_POST['pet_category']);
    $pet_breed = trim($_POST['pet_breed']);
    $vaccine = trim($_POST['vaccine']);
    $date_of_vaccine = $_POST['date_of_vaccine'];

    if (!empty($_POST['pet_id'])) {
        $pet_id = $_POST['pet_id'];
        $stmt = $conn->prepare("UPDATE pet_records SET pet_name=?, pet_category=?, pet_breed=?, vaccine=?, date_of_vaccine=? WHERE pet_id=? AND user_id=?");
        $stmt->bind_param("ssssssi", $pet_name, $pet_category, $pet_breed, $vaccine, $date_of_vaccine, $pet_id, $user_id);
        $stmt->execute();
    } else {
        $stmt = $conn->prepare("INSERT INTO pet_records (user_id, pet_name, pet_category, pet_breed, vaccine, date_of_vaccine) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("isssss", $user_id, $pet_name, $pet_category, $pet_breed, $vaccine, $date_of_vaccine);
        $stmt->execute();
    }

    header("Location: manage_pets.php?success=saved");
    exit();
}

// Handle delete operation
if (isset($_GET['delete'])) {
    $pet_id = $_GET['delete'];
    $stmt = $conn->prepare("DELETE FROM pet_records WHERE pet_id=? AND user_id=?");
    $stmt->bind_param("ii", $pet_id, $user_id);
    $stmt->execute();
    header("Location: manage_pets.php?success=deleted");
    exit();
}

// Fetch all pets
$stmt = $conn->prepare("SELECT * FROM pet_records WHERE user_id=?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$records = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Pets</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #43cea2, #185a9d);
            color: #fff;
            margin: 0;
            padding-top: 80px;
        }

        nav {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.8);
            padding: 10px 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.5);
            z-index: 1000;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        nav ul li {
            display: inline;
            margin: 0 15px;
        }

        nav ul li a {
            color: #fff;
            font-weight: 600;
            text-decoration: none;
            transition: color 0.3s;
            font-size: 18px;
        }

        nav ul li a:hover {
            color: #43cea2;
        }

        .container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(8px);
            padding: 40px 30px;
            border-radius: 20px;
            margin: auto;
            margin-top: 30px;
            max-width: 900px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.2);
        }

        h2 {
            font-size: 32px;
            margin-bottom: 20px;
            font-weight: 700;
        }

        form input, form button {
            width: 100%;
            padding: 14px;
            margin: 8px 0;
            border-radius: 10px;
            border: none;
            font-size: 16px;
        }

        form input {
            background: rgba(255, 255, 255, 0.8);
            color: #333;
        }

        form button {
            background: #43cea2;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
        }

        form button:hover {
            background: #185a9d;
            transform: scale(1.05);
        }

        table {
            width: 100%;
            margin-top: 30px;
            border-collapse: separate;
            border-spacing: 0 10px;
        }

        th, td {
            padding: 15px 20px;
            background: rgba(255,255,255,0.2);
            backdrop-filter: blur(6px);
            color: #fff;
            border-radius: 10px;
            text-align: center;
        }

        th {
            background: rgba(0,0,0,0.6);
        }

        .btn-delete {
            background: #ff4d4d;
            color: #fff;
            padding: 8px 15px;
            border-radius: 8px;
            font-size: 14px;
            text-decoration: none;
            transition: background 0.3s;
            display: inline-block;
        }

        .btn-delete:hover {
            background: #cc0000;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="manage_pets.php">Manage Pets</a></li>
            <li><a href="pet_record.php">Pet Records</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>

    <div class="container">
        <h2>Manage Your Pets</h2>
        <form method="POST">
            <input type="hidden" name="pet_id" id="pet_id">
            <input type="text" name="pet_name" id="pet_name" placeholder="Pet Name" required>
            <input type="text" name="pet_category" id="pet_category" placeholder="Category" required>
            <input type="text" name="pet_breed" id="pet_breed" placeholder="Breed">
            <input type="text" name="vaccine" id="vaccine" placeholder="Vaccine">
            <input type="date" name="date_of_vaccine" id="date_of_vaccine">
            <button type="submit" name="save_pet">Save Pet</button>
        </form>

        <table>
            <tr>
                <th>Pet Name</th>
                <th>Category</th>
                <th>Breed</th>
                <th>Vaccine</th>
                <th>Date of Vaccine</th>
                <th>Actions</th>
            </tr>
            <?php while ($row = $records->fetch_assoc()) { ?>
            <tr>
                <td><?php echo htmlspecialchars($row['pet_name']); ?></td>
                <td><?php echo htmlspecialchars($row['pet_category']); ?></td>
                <td><?php echo htmlspecialchars($row['pet_breed']); ?></td>
                <td><?php echo htmlspecialchars($row['vaccine']); ?></td>
                <td><?php echo htmlspecialchars($row['date_of_vaccine']); ?></td>
                <td>
                    <a href="?delete=<?php echo $row['pet_id']; ?>" class="btn-delete" onclick="return confirm('Are you sure you want to delete this pet?')">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
