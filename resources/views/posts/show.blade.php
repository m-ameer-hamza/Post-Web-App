<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Edit Post</title>
</head>

<body style="margin: 0; padding: 0;">
    <!-- Navigation Bar -->
    <nav
        style="display: flex; justify-content: space-between; align-items: center; background-color: #eeeeee; padding: 15px 30px; width: 100%; position: fixed; top: 0; left: 0; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); box-sizing: border-box;">
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
                    style="background-color: red; color: white; border: none; padding: 10px 15px; cursor: pointer; font-size: 16px; border-radius: 5px;">
                    Logout
                </button>
            </form>
        </div>
    </nav>

    <!-- Updating post form -->
    <div
        style="display: flex; justify-content: center; align-items: center; min-height: calc(100vh - 80px); margin-top: 80px;">
        <div
            style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); width: 400px;">
            <h2 style="text-align: center; color: #333; margin-bottom: 20px;">Edit Post</h2>
            <form action="/posts/{{ $post->id }}/edit" method="get"
                style="display: flex; flex-direction: column;">
                @csrf
                @method('patch')
                <label for="title" style="font-weight: bold; margin-bottom: 5px;">Title</label>
                <input type="text" id="title" name="title" value="{{ old('title', $post->title) }}"
                    style="padding: 10px; border: 1px solid #ccc; border-radius: 5px; margin-bottom: 15px; font-size: 16px; width: 100%;">
                @error('title')
                    <p style="color: red; margin-bottom: 10px;">{{ $message }}</p>
                @enderror
                <label for="content" style="font-weight: bold; margin-bottom: 5px;">Content</label>
                <textarea name="content" id="content" cols="30" rows="5"
                    style="padding: 10px; border: 1px solid #ccc; border-radius: 5px; margin-bottom: 15px; font-size: 16px; width: 100%;">{{ old('content', $post->content) }}</textarea>
                @error('content')
                    <p style="color: red; margin-bottom: 10px;">{{ $message }}</p>
                @enderror
                <button type="submit"
                    style="background-color: #007bff; color: white; padding: 10px; border: none; border-radius: 5px; font-size: 16px; cursor: pointer; transition: 0.3s;">
                    Update
                </button>
            </form>
        </div>
    </div>
</body>

</html>
