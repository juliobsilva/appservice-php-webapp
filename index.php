<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

</head>
<body>
    <div class="container">
        <h1>Welcome to Our Landing Page</h1>
        <p>Subscribe to our newsletter for the latest updates.</p>
        <form action="index.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <input type="submit" value="Subscribe">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $to = 'your-email@example.com'; // Substitua com seu e-mail
            $subject = 'New Subscriber';
            $message = "Name: $name\nEmail: $email";
            $headers = 'From: noreply@yourdomain.com' . "\r\n" .
                       'Reply-To: noreply@yourdomain.com' . "\r\n" .
                       'X-Mailer: PHP/' . phpversion();
            if (mail($to, $subject, $message, $headers)) {
                echo '<p>Thank you for subscribing!</p>';
            } else {
                echo '<p>Sorry, there was an error. Please try again later.</p>';
            }
        }
        ?>
    </div>
</body>
</html>
