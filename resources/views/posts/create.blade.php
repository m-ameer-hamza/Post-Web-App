<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>


    <nav
        style="display: flex; justify-content: space-between; align-items: center; 
    background-color: #eeeeee; padding: 15px 30px; 
    width: 100%; position: fixed; top: 0; left: 0; 
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); box-sizing: border-box;">

        <!-- Logo -->
        <div style="color: black; font-size: 22px; font-weight: bold;">Logo</div>

        <!-- Links -->
        <div>
            <a href="/home" style="color: black; text-decoration: none; margin: 0 15px; font-size: 18px;"
                onmouseover="this.style.color='blue'; this.style.textDecoration='underline';"
                onmouseout="this.style.color='black'; this.style.textDecoration='none';">All Posts</a>
            <a href="/posts" style="color: black; text-decoration: none; margin: 0 15px; font-size: 18px;"
                onmouseover="this.style.color='blue'; this.style.textDecoration='underline';"
                onmouseout="this.style.color='black'; this.style.textDecoration='none';">My Posts</a>
            <a href="/posts/create" style="color: black; text-decoration: none; margin: 0 15px; font-size: 18px;"
                onmouseover="this.style.color='blue'; this.style.textDecoration='underline';"
                onmouseout="this.style.color='black'; this.style.textDecoration='none';">Create Post</a>
        </div>

        <!-- Logout Button -->
        <div style="display: flex; align-items: center;">
            <form action="/logout" method="POST">
                @csrf
                <button
                    style="background-color: red; color: white; border: none; 
               padding: 10px 15px; cursor: pointer; font-size: 16px;
               border-radius: 5px;">
                    Logout
                </button>
            </form>
        </div>
    </nav>

    {{-- This is the form that create posts --}}
    <div style="margin-top: 100px; padding: 20px;">
        <h2 style="text-align: center; font-size: 30px; color: #333; margin-bottom: 20px;">Create Post</h2>

        <form action="/posts" method="POST"
            style="background-color: #ffffff; border-radius: 8px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); max-width: 600px; margin: 0 auto;">
            @csrf

            <!-- Title Input -->
            <input type="text" name="title" placeholder="Title" value="{{ old('title') }}"
                style="width: 100%; padding: 12px; margin-bottom: 20px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px; box-sizing: border-box;">
            @error('title')
                <p style="color: red;">{{ $message }}</p>
            @enderror
            <!-- Content Textarea -->
            <textarea name="content" placeholder="Content"
                style="width: 100%; padding: 12px; margin-bottom: 20px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px; box-sizing: border-box; height: 200px;">{{ old('content') }}</textarea>
            @error('content')
                <p style="color: red;">{{ $message }}</p>
            @enderror
            <!-- Create Button -->
            <button type="submit"
                style="width: 100%; padding: 12px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; font-size: 16px; cursor: pointer; transition: background-color 0.3s;">
                Create Post
            </button>
        </form>
    </div>

</body>

</html>
