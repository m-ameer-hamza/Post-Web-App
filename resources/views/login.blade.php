<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div style="display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0;">
        <div
            style="max-width: 400px; padding: 20px; border: 1px solid #ccc; border-radius: 8px; background-color: #f9f9f9; width: 100%; box-sizing: border-box;">
            <h1 style="text-align: center; font-size: 24px; color: #333;">Login</h1>
            <form action="/login" method="POST" style="display: flex; flex-direction: column; gap: 15px;">
                {{-- @csrf   What is this for? --}}
                @csrf
                <input type="email" name="email" placeholder="Email"
                    style="padding: 10px; font-size: 16px; border: 1px solid #ddd; border-radius: 4px; width: 100%; box-sizing: border-box;">
                <input type="password" name="password" placeholder="Password"
                    style="padding: 10px; font-size: 16px; border: 1px solid #ddd; border-radius: 4px; width: 100%; box-sizing: border-box;">
                <button type="submit"
                    style="padding: 10px; background-color: #4CAF50; color: white; font-size: 16px; border: none; border-radius: 4px; cursor: pointer;">Login</button>
                <a href="/"
                    style="text-align: center; color: #007BFF; text-decoration: none; font-size: 16px;">Register</a>
            </form>
        </div>
    </div>


</body>

</html>
