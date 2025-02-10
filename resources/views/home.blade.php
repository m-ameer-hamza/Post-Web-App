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
        <h2 style="text-align: center; font-size: 30px; color: #333; margin-bottom: 20px;">All Posts</h2>

        {{-- This is how to loop through an array in blade --}}
        @if ($posts->isEmpty())
            <p style="text-align: center; font-size: 24px; color: #555; margin-bottom: 20px;">No posts found.</p>
        @else
            @foreach ($posts as $post)
                <div
                    style="background-color: #f9f9f9; border-radius: 8px; padding: 20px; margin: 15px 0; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out; display: flex; justify-content: space-between; align-items: center;">
                    {{--   This is how to display value of variable in blade --}}
                    <div style="flex: 1;">
                        <h3 style="font-size: 24px; color: #333; margin-bottom: 10px;">{{ $post['title'] }}</h3>
                        <p style="font-size: 16px; color: #555; margin-bottom: 10px;">by <span
                                style="font-weight: bold; color: #007BFF;">{{ $post->userData->name }}</span></p>
                        <p style="font-size: 16px; color: #666; line-height: 1.6;">{{ $post['content'] }}</p>
                    </div>
                    <div>
                        {{-- Conditionally display Updated or Created button --}}
                        @if ($post->updated_at == $post->created_at)
                            <button
                                style="background-color: #28a745; color: white; padding: 8px 16px; border: none; border-radius: 20px; cursor: pointer; transition: background-color 0.3s ease;">
                                Created at {{ $post->created_at->diffForHumans() }}
                            </button>
                        @else
                            <button
                                style="background-color: #007bff; color: white; padding: 8px 16px; border: none; border-radius: 20px; cursor: pointer; transition: background-color 0.3s ease;">
                                Updated at {{ $post->updated_at->diffForHumans() }}
                            </button>
                        @endif
                    </div>
                </div>
            @endforeach

        @endif

    </div>



</body>

</html>
