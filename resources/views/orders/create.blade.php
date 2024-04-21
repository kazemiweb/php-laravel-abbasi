<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('orders.create')  }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="نام تجهیزات">
        <br>
        <br>
        <input type="text" name="type" placeholder="نوع">
        <br>
        <br>
        <input type="text" name="color" placeholder="رنگ">
        <br>
        <br>
        <input type="text" name="currency" placeholder="قیمت">
        <br>
        <br>
        <input type="text" name="adress" placeholder="آدرس مشتری">
        <br>
        <br>
        <input type="text" name="request_time" placeholder="زمان درخواست محصول">
        <br>
        <br>
        <input type="text" name="receiving_time" placeholder="زمان دریافت محصول">
        <br>
        <br>
        <input type="text" name="post_code" placeholder="کد پستی">

        <input type="submit" value="ارسال">
    </form>
</body>

</html>
