<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $book->title }}</title>
</head>
<body>
    <iframe src="{{ asset('assets/uploads/document/'.$book->file) }}" style="width:100%; height:600px;" frameborder="0"></iframe>
</body>
</html>