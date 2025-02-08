<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | Post Management App</title>
</head>

<body
    style="margin: 0; padding: 0; height: 100vh; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #4e54c8, #8f94fb); font-family: Arial, sans-serif;">

    <div
        style="text-align: center; background: rgba(255, 255, 255, 0.2); padding: 30px; border-radius: 10px; box-shadow: 0px 4px 10px rgba(0,0,0,0.2); backdrop-filter: blur(10px); max-width: 400px;">
        <h1 style="color: white; font-size: 28px; margin-bottom: 10px;">Welcome to Post Management</h1>
        <p style="color: #e0e0e0; font-size: 16px; margin-bottom: 20px;">Manage your posts efficiently and effortlessly.
        </p>

        <form action="/register" method="GET" style="margin-bottom: 20px;">
            @csrf
            <button
                style="display: inline-block; padding: 12px 24px; font-size: 18px; font-weight: bold; color: white; background: #ff6b6b; text-decoration: none; border-radius: 6px; transition: background 0.3s ease;">
                Register
            </button>
        </form>


    </div>

</body>

</html>
