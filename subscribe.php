<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Save the email to a file (or you can use a database here)
        $file = fopen("subscribers.txt", "a");
        fwrite($file, $email . PHP_EOL);
        fclose($file);

        $message = "Thank you for subscribing!";
    } else {
        $message = "Invalid email address.";
    }
} else {
    $message = "Something went wrong. Please try again.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Subscription Status</title>
    <script>
        window.onload = function() {
            alert("<?= $message ?>");
            // Redirect back to the page the user came from
            window.history.back();
        };
    </script>
</head>
<body>
    <noscript>
        <p><?= $message ?></p>
        <button onclick="window.history.back()">Go Back</button>
    </noscript>
</body>
</html>
