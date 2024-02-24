<!DOCTYPE html>
<html lang="en">
<head>
<title>Benjamin Jones</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!DOCTYPE html>
<html>
<head>
    <title>Website Navigation</title>
    <style>
        /* Basic CSS for navigation */
        body {
            margin: 0;
            padding: 0;
        }
        .navbar {
            position: fixed;
            left: 0;
            top: 0;
            width: 200px;
            height: 400px; /* Adjusted height */
            background-color: #fff; /* Changed background color to white */
            color: #007bff; /* Changed text color to blue */
            padding: 20px;
            display: flex; /* Added flex display */
            align-items: center; /* Vertically center items */
            justify-content: space-between; /* Add space between items */
            z-index: 1000; /* Ensuring the nav bar stays on top */
        }
        .navbar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        .navbar li {
            margin-bottom: 10px;
        }
        .navbar a {
            color: #0000ff; /* Changed text color to blue */
            text-decoration: none;
            font-size: 18px;
        }
        .navbar a:hover {
            text-decoration: underline;
        }
        .gif-container {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1000;
        }
    </style>
</head>
<body>

<div class="navbar">
    <ul>
        <li"><a href="about.php">about</a></li>
        <li><a href="random.php">random</a></li>
        <li><a href="investments.php">investments</a></li>
        <li><a href="https://twitter.com/itsbenjones">contact</a></li>
    </ul>
</div>

<div style="margin-left: 200px; padding: 20px;">
    <!-- Your website content goes here -->
    <h1>random</h1>
</div>

<ul style="margin-left: 200px; padding 20px;">
    <li>Minted New York</a></li>
    <li>Ironman</a></li>
    <li>Cervelo</a></li>
    <li>Dominos Rolex</a></li>
    <li>Movies: Prisoners, Talented Mr. Ripley, The Social Network, White House Down, Along Came Polly</a></li>
    <li>CEOs: Savneet Singh, Zuck, Sahil Lavingia, Palmer Luckey</a></li>
    <li>Gasoline delivery services: Gallo Fueling</a></li>
</ul>

<div style="margin-left: 500px; padding: 20px; margin-bottom: 25px">
    <h6 style= "color: green;">Designed in Boston.</h6>
</div>

<div class="gif-container">
    <iframe src="https://giphy.com/embed/3oEduZoahEKwduyum4" width="280" height="280" frameBorder="0" class="giphy-embed">
</div>

</body>
</html>