<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{ route('products.create') }}" method="POST">
     @csrf
    <input type="text" name="name" placeholder="نام تجهیزات">
    <br>
    <br>
    <input type="text" name="type" placeholder="نوع تجهیزات">
<br>
<br>
    <input type="submit" value="ارسال">
</form>
</body>
</html>
