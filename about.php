<!DOCTYPE html>
<html lang="en">
<head>
    <title>Benjamin Jones</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
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
        <li><a href="about.php">about</a></li>
        <li><a href="random.php">random</a></li>
        <li><a href="investments.php">investments</a></li>
        <li><a href="https://twitter.com/itsbenjones">contact</a></li>
    </ul>
</div>

<div style="margin-left: 200px; padding: 20px;">
    <!-- Your website content goes here -->
    <h1>about</h1>
    <p>Boston, MA</p>
</div>

<ul style="margin-left: 200px; padding: 20px;"> <!-- Fixed style attribute -->
    <li><a href="https://www.endstate.io/">Endstate</a></li>
    <li><a href="https://www.airbnb.com/h/therounduphouse">Airbnb</a></li>
    <li><a href="https://www.smbc.com/">SMBC</a></li>
    <li><a href="https://www.columbiauniversity.com/">Columbia University</a></li>
    <li><a href="https://www.whs.com/">Wayland, MA</a></li>
    <!-- Add more list items as needed for each of your investments -->
</ul>

<div style="margin-left: 600px; padding: 20px; margin-top: 500px">
    <h6 style="color: green;">Designed in Boston.</h6> <!-- Fixed style attribute -->
</div>

<div style="position: fixed; top: 20px; right: 20px;">
    <img src="images/goodpic4.jpg" alt="Description" width="280" height="400">
</div>

</body>
</html>
