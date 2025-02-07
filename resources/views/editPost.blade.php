<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Post</title>
</head>

<body>
    <div>
        <h2>Edit Post</h2>
        <form action="/posts/{{ $post->id }}/edit" method="post">
            @csrf
            @method('patch')
            <input type="text" name="title" value="{{ $post->title }}">
            <textarea name="content" id="" cols="30" rows="10">{{ $post->content }}</textarea>
            <button>Update</button>
        </form>
    </div>
</body>

</html>
