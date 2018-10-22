<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
</head>
<body>
    <h1>Posts</h1> 

    <ul>
        @foreach($posts as $post)
            <li>{{ $post->title }}</li>
        @endforeach
    
    </ul>
</body>
</html>