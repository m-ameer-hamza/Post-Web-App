<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Requests</title>
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
    <!-- Main Content -->
    <div
        style="display: flex; flex-direction: column; align-items: center; 
            margin-top: 70px; padding: 20px; width: calc(100% - 250px); 
            margin-left: 250px; min-height: calc(100vh - 70px);">

        <!-- Heading -->
        <div style="text-align: center;">
            <h1>User Requests</h1>
            <p>You can manage all the requests made by users</p>
        </div>

        <!-- Card Container -->
        <div
            style="display: flex; flex-direction: column; align-items: center; 
    padding: 20px; width: calc(100% - 280px); 
    min-height: calc(100vh - 70px);">

            @if ($users->isEmpty())
                <div style="padding: 20px; border: 1px solid #ddd; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                    <h3 style="text-align: center;">No Requets</h3>
                    <p style="text-align: center; color: gray;">No Requet made by user!</p>
                </div>
            @else
                @foreach ($users as $user)
                    <div
                        style="width: 80%; padding: 20px; border-radius: 10px; 
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); border: 1px solid #ddd; 
        background-color: white; font-family: Arial, sans-serif;
">

                        <h2 style="text-align: center; margin-bottom: 15px; color: #333;">
                            {{ $user->name }}
                        </h2>
                        <h3>Request for adding admin account</h3>
                        <p style="color: #555; font-size: 16px; line-height: 1.6; text-align: justify;">
                            {{ $user->email }}
                        </p>
                        <div
                            style="display: flex; justify-content: space-between; align-items: center; margin-top: 50px;">
                            <span
                                style="background-color: #f0f0f0; color: #333; padding: 8px 15px; 
        border-radius: 20px; font-size: 14px; font-weight: bold; 
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);">
                                Created At: {{ $user->updated_at->format('M d, Y') }}
                            </span>
                            <form action="/admin/accountRequest" method="POST">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                                <button
                                    style="background-color: #28a745; color: white; border: none;
    padding: 8px 15px; cursor: pointer; font-size: 14px;
    border-radius: 20px; transition: 0.3s;"
                                    onmouseover="this.style.backgroundColor='#218838';"
                                    onmouseout="this.style.backgroundColor='#28a745';">
                                    Approve
                                </button>
                            </form>




                        </div>



                    </div>
                @endforeach
            @endif

        </div>
    </div>


</body>

</html>
