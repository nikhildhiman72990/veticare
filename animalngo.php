<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NGO Directory</title>
    <style>
        /* General Styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url("https://images.pexels.com/photos/1324803/pexels-photo-1324803.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2");
            color: white;
            text-align: center;
            height: 100vh;
            background-size: cover;
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

        /* NGO Cards Section */
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 30px;
        }

        .ngo-card {
            width: 300px;
            background: linear-gradient(135deg, #272626, #d5d1d1);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.4);
            text-align: left;
            transition: transform 0.3s, box-shadow 0.3s;
            position: relative;
            overflow: hidden;
        }

        .ngo-card::before {
            content: '';
            position: absolute;
            width: 120%;
            height: 120%;
            background: rgba(255, 255, 255, 0.1);
            top: -50%;
            left: -50%;
            transform: rotate(30deg);
        }

        .ngo-card:hover {
            transform: scale(1.05);
            box-shadow: 8px 8px 25px rgba(0, 0, 0, 0.5);
        }

        .ngo-card h3 {
            margin: 0 0 10px;
            color: #FFD700;
        }

        .ngo-card p {
            font-size: 14px;
            color: white;
            margin: 5px 0;
        }

        .ngo-card a {
            color: #0b2eb8;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }

        .ngo-card a:hover {
            color: #161614;
        }
        .ngo-card::before {
    pointer-events: none; /* Allow clicks to pass through */
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

    <h1 class="cc">Himachal Pradesh NGO Directory</h1>

    <section class="container">
        <div class="ngo-card">
            <h3>Peepal farm</h3>
            <p><strong>Location:</strong> Dhanotu</p>
            <p><strong>Address:</strong> Peepal Farm, Village VPO Dhanotu, Tehsil Shahpur, District Kangra, Dharamsala, Himachal Pradesh 176208</p>
            <p><strong>Service:</strong> Animal rescue, rehabilitation, treatment  </p>
            <p><strong>Contact:</strong> 8628830920</p>
            <p><strong>Email:</strong> N/A</p>
            <p><strong>Website:</strong> <a href="https://www.peepalfarm.org" target="_blank">Visit</a></p>
        </div>
        <div class="ngo-card">
            <h3>People for animals</h3>
            <p><strong>Location:</strong> Dharamshala, Shimla, Mandi, Hamirpur , Sirmour, Bilaspur</p>
            <p><strong>Address:</strong> Headoffice: 14 Ashoka Road, Jantar Mantar Road, New Delhi 110001</p>
            <p><strong>Service:</strong> Rescue, legal aid for animal abuse, sterilization</p>
            <p><strong>Contact:</strong> +91-98160-59999</p>
            <p><strong>Email:</strong> pfa.hp@gmail.com</p>
            <p><strong>Website:</strong> <a href="https://www.peopleforanimalsindia.org" target="_blank">Visit</a></p>
        </div>
        <div class="ngo-card">
            <h3>Society for Prevention of Cruelty to Animals</h3>
            <p><strong>Location:</strong> Boileauganj</p>
            <p><strong>Address:</strong> Shimla, Himachal Pradesh</p>
            <p><strong>Service:</strong> Animal rescue, shelter, sterilization</p>
            <p><strong>Contact:</strong> +91-94180-01218 , 0172 269 6450</p>
            <p><strong>Email:</strong> spcashimla@gmail.com</p>
            <p><strong>Website:</strong> <a href="https://www.facebook.com/SPCAShimla" target="_blank">Visit</a></p>
        </div>
        <div class="ngo-card">
            <h3>Dharamshala Animal Rescue</h3>
            <p><strong>Location:</strong> Dharamshala</p>
            <p><strong>Address:</strong> Galu, Dharamkot, Dharamshala, Himachal Pradesh</p>
            <p><strong>Service:</strong> Animal Management, Medical Treatment, Vaccination</p>
            <p><strong>Contact:</strong> 98828 58631</p>
            <p><strong>Email:</strong> N/A</p>
            <p><strong>Website:</strong> <a href="https://dharamshalaanimalrescue.org" target="_blank">Visit</a></p>
        </div>
        <div class="ngo-card">
            <h3>Hamari akanksha trust</h3>
            <p><strong>Location:</strong> Arki,solan</p>
            <p><strong>Address:</strong> Dawaras, Himachal Pradesh 173208</p>
            <p><strong>Service:</strong> Animal Management, Medical Treatment, Vaccination</p>
            <p><strong>Contact:</strong> N/A</p>
            <p><strong>Email:</strong> N/A</p>
</div>
<div class="ngo-card">
            <h3>Radha Madhav Sewa Kunj - Animal Rescue </h3>
            <p><strong>Location:</strong> Una</p>
            <p><strong>Address:</strong> opposite Govt school, VPO, Behdala, Himachal Pradesh 174306</p>
            <p><strong>Service:</strong> Animal Management, Medical Treatment, Vaccination</p>
            <p><strong>Contact:</strong> 9317550543</p>
            <p><strong>Email:</strong> N/A</p>
            <p><strong>Website:</strong> <a href="https://www.rmsk.in/" target="_blank">Visit</a></p>
</div>
<div class="ngo-card">
            <h3>Manali Strays </h3>
            <p><strong>Location:</strong> Kullu</p>
            <p><strong>Address:</strong> Mansari Haripur Manali, Himachal Pradesh 175136</p>
            <p><strong>Service:</strong> Animal rescue , animal health camps,animal birth control</p>
            <p><strong>Contact:</strong> +91-9418704924</p>
            <p><strong>Email:</strong> help@manalistrays.org </p>
            <p><strong>Website:</strong> <a href="www.manalistrays.org " target="_blank">Visit</a></p>
</div>

<div class="ngo-card">
            <h3>Animal Protection and Welfare </h3>
            <p><strong>Location:</strong> Runjh, Mandi </p>
            <p><strong>Address:</strong> Post Office Katindhi, Teh Sadar, Distt Mandi, Himachal Pradesh 175005</p>
            <p><strong>Service:</strong> Rescue and Rehabilitation</p>
            <p><strong>Contact:</strong> 98161-94038</p>
            <p><strong>Email:</strong> aanandkagra@gmail.com </p>
            <p><strong>Website:</strong> <a href="www.newlifelinehp.in " target="_blank">Visit</a></p>
</div>
<div class="ngo-card">
            <h3>Ganpati educational society </h3>
            <p><strong>Location:</strong> arki, solan </p>
            <p><strong>Address:</strong> Near Telephone Exchange Kunihar,teh,arki.distt. Solan,himachal Pradesh pin Code-173207</p>
            <p><strong>Service:</strong> Rescue and Rehabilitation</p>
            <p><strong>Contact:</strong> 01796-262699</p>
            <p><strong>Email:</strong> sharma.roshan@yahoo.co.in   </p>
            <p><strong>Website:</strong> N/A</p>
</div>
<div class="ngo-card">
            <h3>Humanity to Animals Charitable Foundation Nagwain, Mandi NH 3, Nagwain, Himachal Pradesh 175121  </h3>
            <p><strong>Location:</strong> Nagwain, Mandi NH 3 </p>
            <p><strong>Address:</strong> Mandi NH 3, Nagwain, Himachal Pradesh 175121</p>
            <p><strong>Service:</strong> Did not specified </p>
            <p><strong>Contact:</strong> 9882699939</p>
            <p><strong>Email:</strong>N/A   </p>
            <p><strong>Website:</strong> N/A</p>
</div>
    </section>
    </section>
</body>
</html>
