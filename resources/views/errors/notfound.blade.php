<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - {{ $title }}</title>
</head>

<body
    style="background-color: #f8f9fa; display: flex; justify-content: center; align-items: center; height: 100vh; text-align: center; margin: 0;">
    <div
        style="max-width: 500px; padding: 20px; background: white; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);">
        <h1 style="font-size: 100px; color: #ff4a57; margin-bottom: 10px;">404</h1>
        <h2 style="font-size: 24px; color: #333; margin-bottom: 15px;">{{ $title }}</h2>
        <p style="font-size: 16px; color: #666; margin-bottom: 20px;">{{ $message }}
        </p>
    </div>
</body>

</html>
