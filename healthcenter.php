<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Centers Directory</title>
    <style>
        /* General Styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url("https://images.pexels.com/photos/45170/kittens-cat-cat-puppy-rush-45170.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1");
            color: white;
            text-align: center;
            height: 100vh;
        }

        /* Header & Navigation */
        header {
            background: rgb(27, 25, 25);
            color: #fff;
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.4);
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            text-align: center;
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
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
            font-weight: bold;
            font-family: Arial, Helvetica, sans-serif;
            text-shadow: 0px 4px 20px black;
            margin: 10px 0;
        }

        /* Health Centers Section */
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 30px;
        }

        .health-card {
            width: 300px;
            background: linear-gradient(135deg, #1e1d1d, #a4a0a2);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.4);
            text-align: left;
            transition: transform 0.3s, box-shadow 0.3s;
            position: relative;
            overflow: hidden;
        }

        .health-card::before {
            content: '';
            position: absolute;
            width: 120%;
            height: 120%;
            background: rgba(255, 255, 255, 0.1);
            top: -50%;
            left: -50%;
            transform: rotate(30deg);
        }

        .health-card:hover {
            transform: scale(1.05);
            box-shadow: 8px 8px 25px rgba(0, 0, 0, 0.5);
        }

        .health-card h3 {
            margin: 0 0 10px;
            color: #FFD700;
        }

        .health-card p {
            font-size: 14px;
            color: white;
            margin: 5px 0;
        }

        .health-card a {
            color: #FFD700;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }

        .health-card a:hover {
            color: #FF4500;
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

    <h1 class="cc">Health Centers Directory</h1>

    <section class="container">
        <div class="health-card">
            <h3>Veterinary Hospital  </h3>
            <p><strong>Location:</strong> Bilaspur</p>
            
            <p><strong>Contact:</strong> 1978224900</p>
            
        </div>

        <div class="health-card" style="background: linear-gradient(135deg, #101010, #b0b1b3);">
            <h3>Veterinary Dispensary </h3>
            <p><strong>Location:</strong> Ghumarwin</p>
            
            <p><strong>Contact:</strong>1978254100</p>
            
        </div>

        <div class="health-card" style="background: linear-gradient(135deg, #201f1f, #b3b1b0);">
            <h3>State Veterinary Hospital1899222716</h3>
            <p><strong>Location:</strong>  Chamba </p>
            
            <p><strong>Contact:</strong> 1899222716</p>
            
        </div>

        <div class="health-card" style="background: linear-gradient(135deg, #201f1f, #c3bebe);">
            <h3>Veterinary Dispensary </h3>
            <p><strong>Location:</strong> Dalhousie</p>
            
            <p><strong>Contact:</strong> 1899240435</p>
            
        </div>
        <div class="health-card" style="background: linear-gradient(135deg, #101010, #b0b1b3);">
            <h3>Veterinary Polyclinic</h3>
            <p><strong>Location:</strong>  Dharamshala </p>
            
            <p><strong>Contact:</strong> 1892224948</p>
            
        </div>

        <div class="health-card" style="background: linear-gradient(135deg, #201f1f, #b3b1b0);">
            <h3>Veterinary Hospital</h3>
            <p><strong>Location:</strong> Palampur</p>
            
            <p><strong>Contact:</strong>  1894232222</p>
            
        </div>

        <div class="health-card" style="background: linear-gradient(135deg, #201f1f, #c3bebe);">
            <h3>Veterinary Hospital </h3>
            <p><strong>Location:</strong> Reckong Peo</p>
            
            <p><strong>Contact:</strong> 1786222204</p>
            
        </div>
        
  <div class="health-card">
    <h3>Veterinary Dispensary</h3>
    <p><strong>Location:</strong> Sangla, Kinnaur</p>
    <p><strong>Contact:</strong> 1786245110</p>
  </div>

  <div class="health-card">
    <h3>Veterinary Polyclinic</h3>
    <p><strong>Location:</strong> Kullu</p>
    <p><strong>Contact:</strong> 1902222552</p>
  </div>

  <div class="health-card">
    <h3>Veterinary Hospital</h3>
    <p><strong>Location:</strong> Manali, Kullu</p>
    <p><strong>Contact:</strong> 1902252025</p>
  </div>

  <div class="health-card">
    <h3>Veterinary Hospital</h3>
    <p><strong>Location:</strong> Keylong, Lahaul</p>
    <p><strong>Contact:</strong> 1900222204</p>
  </div>

  <div class="health-card">
    <h3>Veterinary Dispensary</h3>
    <p><strong>Location:</strong> Kaza, Spiti</p>
    <p><strong>Contact:</strong> 1906222301</p>
  </div>

  <div class="health-card">
    <h3>HART</h3>
    <p><strong>Location:</strong> Near Sundernagar, Mandi</p>
    <p><strong>Contact:</strong> 9418610711</p>
  </div>

  <div class="health-card">
    <h3>Veterinary Polyclinic</h3>
    <p><strong>Location:</strong> Mandi Town</p>
    <p><strong>Contact:</strong> 1905222509</p>
  </div>

  <div class="health-card">
    <h3>Veterinary Hospital</h3>
    <p><strong>Location:</strong> Joginder Nagar, Mandi</p>
  </div>

  <div class="health-card">
    <h3>State Veterinary Hospital</h3>
    <p><strong>Location:</strong> Rohru, Shimla</p>
  </div>

  <div class="health-card">
    <h3>Veterinary Polyclinic</h3>
    <p><strong>Location:</strong> Nahan, Sirmaur</p>
  </div>

  <div class="health-card">
    <h3>Veterinary Hospital</h3>
    <p><strong>Location:</strong> Paonta Sahib, Sirmaur</p>
  </div>

  <div class="health-card">
    <h3>Veterinary Polyclinic</h3>
    <p><strong>Location:</strong> Unknown</p>
  </div>

  <div class="health-card">
    <h3>Veterinary Hospital</h3>
    <p><strong>Location:</strong> Baddi, Solan</p>
  </div>

  <div class="health-card">
    <h3>Veterinary Hospital</h3>
    <p><strong>Location:</strong> Una Town</p>
  </div>

  <div class="health-card">
    <h3>Veterinary Dispensary</h3>
    <p><strong>Location:</strong> Amb, Una</p>
  </div>
    </section>

</body>
</html>
