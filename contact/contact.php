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
      <li><a href="/projectpagina/project.php">Projects</a></li>
      <li><a href="contact.html"class='current-page'>Contact</a></li>
    </ul>
  </nav>
  
  <header>
    <h1>Samet Palit</h1>
  </header>
  
  <main>
    <section>
    <h1>Contact Us</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $company = $_POST["company"];
        $message = $_POST["message"];

        // Create the email message
        $to = "your-email@example.com"; // Replace with your email address
        $subject = "Contact Form Submission from $name";
        $messageBody = "Name: $name\n";
        $messageBody .= "Email: $email\n";
        $messageBody .= "Phone Number: $phone\n";
        $messageBody .= "Company Name: $company\n";
        $messageBody .= "Message:\n$message";

        // Send the email
        $headers = "From: $email";
        if (mail($to, $subject, $messageBody, $headers)) {
            echo "<p style='text-align:center;'>Thank you for your message! We will get back to you soon.</p>";
        } else {
            echo "<p style='text-align:center;'>Oops! Something went wrong. Please try again later.</p>";
        }
    }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone"><br><br>

        <label for="company">Company Name:</label>
        <input type="text" id="company" name="company"><br><br>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea><br><br>

        <input type="submit" value="Submit">
    </form>
    </section>
  </main>
  
  <footer>
    <p>&copy; 2023 Samet Palit. All rights reserved.</p>
  </footer>
</body>
</html>