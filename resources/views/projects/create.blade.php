<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create Projects</h1>
    <form action="/projects" method="POST">
        @csrf
        <label for="title">Title</label>
        <input type="text" placeholder="e.g. Learn Laravel" name="title" id="title">
        <label for="description">Description</label>
        <textarea placeholder="e.g. Finish the Laravel 5.7 from scratch serie on Laracasts" name="description" id="description"></textarea>
        <button type="submit">Submit</button>
    </form>
</body>
</html>