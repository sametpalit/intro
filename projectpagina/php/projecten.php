<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Your Portfolio</title>
</head>
<body>
  <nav>
    <ul>
      <li><a href="../index.html">Home</a></li>
      <li><a href="/about/about.html">About</a></li>
      <li><a href="project.html"class='current-page'>Projects</a></li>
      <li><a href="/contact/contact.html">Contact</a></li>
    </ul>
  </nav>
  <?php
if (isset($_GET['id'])) {
$house_id = $_GET['id'];

$game = "";
$price = "";
$genre = "";
$duration = "";
$moeilijk = "";
$picture = "";
$spelers = "";
$datum = "";
$button = "<button>Download</button>";

if ($house_id == "game1") {
$game = "Dragon Warriors";
$price = "Free - Gratis";
$genre = "Aventure";
$duration = "100+ hours";
$moeilijk = "7 - 10";
$picture = "img/game1.jpg";
$spelers = "1 - Singleplayer";
$datum = "23 Jun - 2023";
$button = "<button>Download - Free</button>";

} elseif ($house_id == "game2") {
$genre = "Aventure";
$duration = "100+ hours";
$moeilijk = "€ 1.365.000";
$picture = "img/game1.jpg";
$spelers = "1 - Singleplayer";
$datum = "23 Jun - 2023";

} else {
echo "House not found.";
}
} else {
echo "Invalid request.";
} 
?>

<div class="datalist">
<div class="main">
<img src='<?php echo $picture ?>' alt='House' class='huis-img' style='width: 600px;'>
<h1> <?php echo $game ?></h1>
<p><?php echo $price ?></p>
</div>
<br>
<div class="info">
<h2>Information</h2>
<table>
<tr>
<td>Genre:</td>
<td> <?php echo $genre ?></td>
</tr>
<tr>
<td>Duration:</td>
<td><?php echo $duration ?></td>
</tr>
<tr>
<td>difficulty rate:</td>
<td><?php echo $moeilijk ?></td>
</tr>
<tr>
<td>player amount:</td>
<td><?php echo $spelers ?></td>
</tr>
<tr>
<td>release date:</td>
<td><?php echo $datum ?></td>
</tr>
</table>
<br>
<div class="download">
<a><?php echo $button ?></a>
<a href="Projects.html"><button>Tutorials</button></a>
</div>
</div>
</div>

  <footer>
    <p>&copy; 2023 Samet Palit. All rights reserved.</p>
  </footer>
</body>
</html>