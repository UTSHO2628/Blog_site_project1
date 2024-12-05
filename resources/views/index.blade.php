<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>All Posts</h1>
        <p>Welcome to my blog. Here you can see all the posts I have created.</p>

        <ul>
            @foreach ($posts as $post)
                <li>
                    <h2>{{ $post->title }}</h2>
                    <p>{{ $post->content }}</p>
                    <a href="{{ route('post.show', $post->id) }}">Read More</a>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
