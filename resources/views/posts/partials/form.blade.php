<!-- resources/views/posts/partials/form.blade.php -->
<form action="{{ $action }}" method="POST"
    style="background-color: #ffffff; border-radius: 8px; padding: 20px; 
           box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); max-width: 600px; margin: 0 auto;">
    @csrf

    <!-- Title Input -->
    <input type="text" name="title" placeholder="Title" value="{{ old('title') }}"
        style="width: 100%; padding: 12px; margin-bottom: 20px; border: 1px solid #ccc; 
               border-radius: 4px; font-size: 16px; box-sizing: border-box;">
    @error('title')
        <p style="color: red;">{{ $message }}</p>
    @enderror

    <!-- Content Textarea -->
    <textarea name="content" placeholder="Content"
        style="width: 100%; padding: 12px; margin-bottom: 20px; border: 1px solid #ccc; 
               border-radius: 4px; font-size: 16px; box-sizing: border-box; height: 200px;">{{ old('content') }}</textarea>
    @error('content')
        <p style="color: red;">{{ $message }}</p>
    @enderror

    <!-- Create Button -->
    <button type="submit"
        style="width: 100%; padding: 12px; background-color: #4CAF50; color: white; 
               border: none; border-radius: 4px; font-size: 16px; cursor: pointer; 
               transition: background-color 0.3s;">
        Create Post
    </button>
</form>
