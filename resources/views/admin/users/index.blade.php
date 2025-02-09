<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Posts</title>
</head>

<body style="margin: 0; font-family: Arial, sans-serif;">

    <!-- Sidebar -->
    <div
        style="width: 250px; height: 100vh; background-color: #333; color: white; 
        position: fixed; left: 0; top: 0; display: flex; flex-direction: column; 
        align-items: center;">

        <!-- Sidebar Title (Fixed at the Top) -->
        <div style="padding-top: 30px; text-align: center;">
            <h2 style="margin-bottom: 10px;">Blog Post</h2>
            <h4>Admin Dashboard</h4>
        </div>

        <!-- Button Wrapper (Centered Vertically) -->
        <div
            style="display: flex; flex-direction: column; align-items: center; width: 100%; flex-grow: 1; justify-content: center;">
            <button
                style="width: 80%; padding: 10px; margin: 10px 0; background-color: #555; 
                color: white; border: none; cursor: pointer;"
                onclick="window.location.href='/admin/posts';">
                All Posts
            </button>
            <button
                style="width: 80%; padding: 10px; margin: 10px 0; background-color: #555; 
                color: white; border: none; cursor: pointer;"
                onclick="window.location.href='/admin/users';">
                All Users
            </button>
            <button
                style="width: 80%; padding: 10px; margin: 10px 0; background-color: #555; 
                color: white; border: none; cursor: pointer;"
                onclick="window.location.href='/admin/requests';">
                Requests
            </button>
        </div>
    </div>

    <!-- Navbar -->
    <nav
        style="display: flex; justify-content: space-between; align-items: center; 
        background-color: #eeeeee; padding: 15px 30px; 
        width: calc(100% - 250px); position: fixed; top: 0; left: 250px; 
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); box-sizing: border-box;">

        <!-- Logo -->
        <div style="color: black; font-size: 22px; font-weight: bold;">Logo</div>

        <!-- Links -->
        <div>
            <a href="/admin/posts" style="color: black; text-decoration: none; margin: 0 15px; font-size: 18px;"
                onmouseover="this.style.color='blue'; this.style.textDecoration='underline';"
                onmouseout="this.style.color='black'; this.style.textDecoration='none';">My Posts</a>
            <a href="/admin/posts/create" style="color: black; text-decoration: none; margin: 0 15px; font-size: 18px;"
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
    <!-- Main Content -->
    <div
        style="display: flex; flex-direction: column; align-items: center; 
            margin-top: 70px; padding: 20px; width: calc(100% - 250px); 
            margin-left: 250px; min-height: calc(100vh - 70px);">

        <!-- Heading -->
        <div style="text-align: center;">
            <h1>All Users</h1>
            <p>You can manage all the users</p>
        </div>

        <!-- Card Container -->
        <div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center; margin-top: 20px;">

            @if ($users->isEmpty())
                <div style="padding: 20px; border: 1px solid #ddd; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                    <h3 style="text-align: center;">No posts yet</h3>
                    <p style="text-align: center; color: gray;">No user. You are alone!</p>
                </div>
            @else
                @foreach ($users as $user)
                    <div
                        style="width: 400px; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
                        border: 1px solid #ddd; background-color: white;">

                        <!-- Title (Centered in the Card) -->
                        <div style="display: flex; justify-content: center; align-items: center; margin-bottom: 10px;">
                            <h2 style="text-align: center; margin-bottom: 10px; color: #333;">{{ $user->name }}
                            </h2>
                            @if ($user->active == 'approved')
                                <span style="color: green; font-size: 16px; margin-top: 15px"> |
                                    {{ $user->active }}</span>
                            @else
                                <span style="color: red; font-size: 16px; margin-top: 15px"> |
                                    {{ $user->active }}</span>
                            @endif

                        </div>
                        <!-- Post Content (Limited to 2 Lines) -->
                        <p
                            style="color: #555; font-size: 16px; line-height: 1.5; 
                        display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; 
                        overflow: hidden; text-overflow: ellipsis;">
                            {{ $user->email }}
                        </p>


                        <!-- Author and Button Section -->
                        <div
                            style="display: flex; justify-content: space-between; align-items: center; margin-top: 15px;">
                            <!-- Author Name (Left Side) -->
                            <span style="color: #007bff; font-weight: bold; font-size: 14px;">Role:
                                {{ $user->role }}</span>

                            <!-- View Button (Right Side) -->
                            <button
                                style="background-color: #007bff; color: white; border: none; 
                            padding: 8px 15px; cursor: pointer; font-size: 14px; 
                            border-radius: 5px; transition: 0.3s;"
                                onclick="window.location.href='/admin/users/{{ $user->id }}';"
                                onmouseover="this.style.backgroundColor='#0056b3';"
                                onmouseout="this.style.backgroundColor='#007bff';">
                                View
                            </button>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>
    </div>


</body>

</html>
