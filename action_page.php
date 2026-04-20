<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Capture and sanitize the input data
    $fname          = htmlspecialchars($_POST['fname'] ?? 'N/A');
    $lname          = htmlspecialchars($_POST['lname'] ?? 'N/A');
    $email          = htmlspecialchars($_POST['email'] ?? 'N/A');
    $device         = htmlspecialchars($_POST['device'] ?? 'N/A');
    $model          = htmlspecialchars($_POST['model'] ?? 'N/A');
    $help           = htmlspecialchars($_POST['help'] ?? 'N/A');
    $contact_method = htmlspecialchars($_POST['contact-method'] ?? 'N/A');

    //Hard to comment since it's mostly just echoing the data back in a formatted way, but I added some basic styling to make it look nicer.

    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <title>Submission Received</title>
        <style>
            body { font-family: sans-serif; line-height: 1.6; padding: 20px; max-width: 600px; margin: auto; }
            .info-box { border: 1px solid #ddd; padding: 20px; border-radius: 8px; background: #f9f9f9; }
            h2 { color: #333; border-bottom: 2px solid #333; padding-bottom: 10px; }
            strong { color: #555; }
        </style>
    </head>
    <body>
        <div class='info-box'>
            <h2>Lab Repair Summary</h2>
            <p><strong>Customer:</strong> $fname $lname</p>
            <p><strong>Email:</strong> $email</p>
            <hr>
            <p><strong>Device Type:</strong> " . ucfirst($device) . "</p>
            <p><strong>Make & Model:</strong> $model</p>
            <p><strong>Description of Issue:</strong><br>" . nl2br($help) . "</p>
            <hr>
            <p><strong>Contact via:</strong> " . ucfirst($contact_method) . "</p>
            <br>
            <a href='javascript:history.back()'>← Back to form</a>
        </div>
    </body>
    </html>";

} else {
    echo "Direct access is not allowed. Please submit the form.";
}
?>