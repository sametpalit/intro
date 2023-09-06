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
      <li><a href="../about/about.html">About</a></li>
      <li><a href="project.php"class='current-page'>Projects</a></li>
      <li><a href="../contact/contact.php">Contact</a></li>
    </ul>
  </nav>
  
  <header>
    <h1>Mijn projecten op school</h1>
  </header>
  
  <main>
    <section>
    </section>
  <?php

class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('db/database.db');
    }
}

$sql = <<<EOF
SELECT * from projects;
EOF;
$db = new MyDB();
$ret = $db->query($sql);
while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
?>
<div class="myC">
  <?php

    echo "<project onclick=\"window.open('{$row['url']}', '_blank')\">";
    // echo "<img src='media/{$row['image']}'>";
    // echo "<div class='title'>{$row['title']}</div>";
    // echo "<div class='desc'>{$row['desc']}</div>";
    // echo "</project>";

    ?>
 <img src='media/<?= $row['image'] ?>'>
 <h1 class='title'><?=$row['title']?></h1>
 <div class='desc'><?=$row['desc']?></div>
 </project>
</div>
    <?php
}
$db->close();

?>
</main>

  <footer>
    <p>&copy; 2023 Samet Palit. All rights reserved.</p>
  </footer>
</body>
</html>