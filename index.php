<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jhanvie's World</title>
    <style>
        /* CSS for styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            position: relative;
            min-height: 100vh;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            position: relative;
        }
        .banner {
            background-image: url('k.jpeg'); /* Replace 'banner.jpg' with the URL or path to your banner image */
            background-size: cover;
            background-position: center;
            height: 150px;
        }
        .banner-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
        }
        nav {
            background-color: #444;
            padding: 10px 0;
            text-align: center;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
            transition: color 0.3s ease;
        }
        nav a:hover {
            color: #ffc107; /* Change the color on hover */
            text-decoration: underline;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 8px 0;
            font-size: 14px;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .container {
            display: flex;
            justify-content: space-between;
            max-width: 1200px; /* Increased max-width for better display */
            margin: 0 auto;
            padding: 20px;
        }
        .articles-container {
            flex-basis: 45%; /* Adjust width as needed */
        }
        .featured-articles {
            flex-basis: 45%; /* Adjust width as needed */
        }
        .article {
            background-color: #e0f7fa; /* Light sky blue background color */
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }
        .article h3 {
            margin-top: 0;
            color: #333; /* Change the color of article headings */
        }
        .article p {
            color: #555; /* Change the color of article text */
            line-height: 1.6;
        }
        .article img {
            width: 100%;
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
            border-radius: 8px;
        }
        .about-us,
        .attractions {
            background-color: #fce4ec; /* Light pink background color */
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
        }
        .about-us h2,
        .attractions h2 {
            margin-top: 0;
            color: #333;
        }
        .about-us p,
        .attractions p {
            color: #555;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <header>
        <div class="banner"></div> <!-- Add this div for the banner -->
        <div class="banner-content">
            <h1>Welcome to Jhanvie's World</h1>
            <p>Experience Unlimited Summer & Fall daytime visits, including Splash Works and more!</p>
        </div>
    </header>
    <nav>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
    </nav>
    <div class="container">
        <div class="articles-container">
            <div class="about-us">
                <h2>About Us</h2>
                <p>Since 1981, Jhanvie's World has been the premier destination in Ontario for thrills, family fun, and world-class entertainment. Located in Vaughan, just north of Toronto, the amusement park features more than 200 attractions including 18 roller coasters, two children's areas, and Splash Works, the 20-acre water park.</p>
                <p>Experience fun, thrills and make lifelong memories with family or friends at this four-season amusement park. If you’re looking for amazing things to do in the Toronto area, don't miss the live shows and special events through spring, summer, fall, and winter including Halloween Haunt and the immersive holiday event WinterFest.</p>
                <p>Our team of writers and contributors are passionate about sharing valuable information and perspectives with our readers. We believe in the power of knowledge to inspire, educate, and empower individuals around the world.</p>
            </div>
            <div class="attractions">
                <h2>Attractions & Things to Do</h2>
                <p>Discover a wide range of attractions and activities at Jhanvie's World:</p>
                <ul>
                    <li>Thrilling roller coasters for adrenaline junkies</li>
                    <li>Family-friendly rides and attractions</li>
                    <li>Splash Works water park for aquatic adventures</li>
                    <li>Live shows and entertainment for all ages</li>
                    <li>Special events throughout the year, including Halloween Haunt and WinterFest</li>
                </ul>
            </div>
        </div>
        <div class="featured-articles">
            <h2>Special Offers</h2>
            <div class="article">
                <h3>DAILY TICKETS</h3>
                <p>Your ticket to a day of FUN! Enjoy world-class attractions, rides, and entertainment.</p>
            </div>
            <div class="article">
                <h3>DINING DEALS</h3>
                <p>Add food to your fun with dining plans or quench your thirst with single day or all season drink refills.</p>
            </div>
            <div class="article">
                <h3>BRING-A-FRIEND DISCOUNTS</h3>
                <p>Season Passholders can share the fun and thrills with discounted admission tickets for friends and family. Available on select dates for up to six (6) friends per passholder. Prices available online only.</p>
            </div>
            <?php
            // Database credentials
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "presentation";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $database);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch articles from the database
            $sql = "SELECT * FROM articles";
            $result = $conn->query($sql);

            // Display articles
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="article">';
                    echo '<h3>' . $row['title'] . '</h3>';
                    echo '<img src="' . $row['image_url'] . '" alt="' . $row['title'] . '">';
                    echo '<p>' . $row['description'] . '</p>';
                    echo '</div>';
                }
            } else {
                echo "No articles found.";
            }

            // Close connection
            $conn->close();
            ?>
        </div>
    </div>
    <footer>
        <p>&copy; Jhanvie's World. All Rights Reserved.</p>
    </footer>
</body>
</html>
