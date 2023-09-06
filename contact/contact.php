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
      <li><a href="../projectpagina/project.php">Projects</a></li>
      <li><a href="contact.php"class='current-page'>Contact</a></li>
    </ul>
  </nav>
  
  <header>
    <h1>Samet Palit</h1>
  </header>
  
  <main>
    <section>
    <h1>Contact </h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $company = $_POST["company"];
        $message = $_POST["message"];
       
        $to = "089525@glr.nl"; 
        $subject = "Nieuw formulier ingediend";
        $body = "Naam: $name\n";
        $body .= "E-mail: $email\n";
        $body .= "Telefoonnummer: $phone\n";
        $body .= "Bedrijfsnaam: $company\n";
        $body .= "Bericht:\n$message";
       
        // Stuur de e-mail
        mail($to, $subject, $body);
       
        // Toon een succesbericht
        echo "<p class='bedankt'>Bedankt! Je formulier is succesvol ingediend.</p>";
    }
    ?>
    <div class="container">
        <div class="form-container">
            <div class="form">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <input type="text" placeholder="Naam" name="name" id="name" required><br>
   

                    <input type="email" placeholder="Email" name="email" id="email" required><br>
   
                    <input type="tel" placeholder="telefoonnummer (optioneel)" name="phone" id="phone"><br>
   
                    <input type="text" placeholder="Bedrijfsnaam (optioneel)" name="company" id="company"><br><br>
   
                    <label for="message">Bericht</label>
                    <textarea name="message" placeholder="Bericht" id="message" rows="auto" required></textarea><br>
   
                    <input class="active"  type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
    </section>
  </main>
  
  <footer>
    <p>&copy; 2023 Samet Palit. All rights reserved.</p>
  </footer>
</body>
</html>