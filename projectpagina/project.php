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
  
  <header>
    <h1>Samet Palit</h1>
    <img src="fener.jpeg" id="image" width="600px">
  </header>
  
  <main>
    <section>
      <h2>Introductie</h2>
      <div class="introductie">
        <p>Hallo daar! Ik ben Samet, een enthousiaste student en software developer. Ontdek mijn projecten en mijn reis in code op dit portfolio.</p>
      </div>
    </section>
  </main>
  <?php

class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('db/database.db');
    }
}

$sql = <<<EOF
SELECT * from Projecten;
EOF;
$db = new MyDB();
$ret = $db->query($sql);
while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
    echo "<project onclick=\"window.open('{$row['url']}', '_blank')\">";
    echo "<img src='media/{$row['image']}'>";
    echo "<div class='title'>{$row['title']}</div>";
    echo "<div class='desc'>{$row['desc']}</div>";
    echo "</project>";
}
$db->close();

?>
  <footer>
    <p>&copy; 2023 Samet Palit. All rights reserved.</p>
  </footer>
</body>
</html>