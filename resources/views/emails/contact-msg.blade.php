<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
</head>
<body>
    <h2>New Contact Message</h2>

    <hr>

    <p><strong>Name:</strong></p>
    <p>{{ $name }}</p>

    <p><strong>Email:</strong></p>
    <p>{{ $email ?? 'Not provided' }}</p>

    <p><strong>Subject:</strong></p>
    <p>{{ $subject ?? 'No subject' }}</p>

    <p><strong>Message:</strong></p>
    <p style="white-space: pre-wrap;">
        {{ $message }}
    </p>

    <hr>

    <p>
        Sent from VINTERBLØD Contact Form
    </p>
</body>
</html>
