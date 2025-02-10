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

    <div style="margin-top: 100px; padding: 20px;">
        <h2 style="text-align: center; font-size: 30px; color: #333; margin-bottom: 20px;">Your Posts</h2>

        {{-- This is how to loop through an array in blade --}}
        @if ($user_posts->isEmpty())
            <p style="text-align: center; font-size: 24px; color: #555; margin-bottom: 20px;">No posts found.</p>
        @else
            @foreach ($user_posts as $post)
                <div
                    style="background-color: #ffffff; border-radius: 8px; padding: 20px; margin: 15px 0; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease-in-out;">
                    {{--   This is how to display value of variable in blade --}}
                    <h3 style="font-size: 24px; color: #333; margin-bottom: 10px;">{{ $post['title'] }}</h3>
                    <p style="font-size: 16px; color: #666; margin-bottom: 15px;">{{ $post['content'] }}</p>

                    <div style="display: flex; justify-content: flex-end; gap: 10px;">
                        <!-- Edit Button -->
                        <a href="/posts/{{ $post->id }}"
                            style="display: inline-block; padding: 10px 15px; background-color: #4CAF50; color: white; text-decoration: none; border-radius: 4px; font-size: 16px; text-align: center; transition: background-color 0.3s;">
                            Edit
                        </a>

                        <!-- Delete Form -->
                        <form action="/posts/{{ $post->id }}" method="post" style="display: inline;">
                            @csrf
                            @method('delete')
                            <button type="submit"
                                style="padding: 10px 15px; background-color: #f44336; color: white; border: none; border-radius: 4px; font-size: 16px; cursor: pointer; transition: background-color 0.3s;">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach

        @endif

    </div>



</body>

</html>
