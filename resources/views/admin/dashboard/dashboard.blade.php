<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
            {{-- <a href="/admin/posts" style="color: black; text-decoration: none; margin: 0 15px; font-size: 18px;"
                onmouseover="this.style.color='blue'; this.style.textDecoration='underline';"
                onmouseout="this.style.color='black'; this.style.textDecoration='none';">My Posts</a> --}}
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
    <div class="content" style="margin-left: 250px; margin-top: 70px; padding: 20px;">
        <h1>Welcome to the Admin Dashboard</h1>
        <p>This is where your main content will go.</p>
    </div>

</body>

</html>
