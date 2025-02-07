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
            <h2 style="text-align: center; font-size: 24px; color: #333;">Register</h2>
            <form action="/register" method="POST" style="display: flex; flex-direction: column; gap: 15px;">
                {{-- @csrf   What is this for? --}}
                @csrf
                <input type="text" name="name" placeholder="Name" value="{{ old('name') }}"
                    style="padding: 10px; font-size: 16px; border: 1px solid #ddd; border-radius: 4px; width: 100%; box-sizing: border-box;">
                @error('name')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
                <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"
                    style="padding: 10px; font-size: 16px; border: 1px solid #ddd; border-radius: 4px; width: 100%; box-sizing: border-box;">
                @error('email')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
                <input type="password" name="password" placeholder="Password" value="{{ old('password') }}"
                    style="padding: 10px; font-size: 16px; border: 1px solid #ddd; border-radius: 4px; width: 100%; box-sizing: border-box;">
                @error('password')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
                <button type="submit"
                    style="padding: 10px; background-color: #4CAF50; color: white; font-size: 16px; border: none; border-radius: 4px; cursor: pointer;">Register</button>
                <a href="/login"
                    style="text-align: center; color: #007BFF; text-decoration: none; font-size: 16px;">Login</a>
            </form>
        </div>
    </div>

</body>

</html>
