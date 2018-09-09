<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>post</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="">
</head>
<body

    <h1>{{ $post->title }}</h1>
    
    <p> {{ $post->body}} </p>
    
    <a href="{{route('home') }}">Back</a>

</body>
</html>