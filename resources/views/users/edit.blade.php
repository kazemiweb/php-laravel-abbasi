<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="http://127.0.0.1:8000/users/user-info.css">
</head>

<body class="body">
    <div class="div-1";>
        <h4 class="h4">ویرایش اطلاعات خود</h4>
        <form action="{{ route('users.update',['id'=>$edit->id])  }}" method="POST" class="form">
            @csrf
            <input type="text" name="name" value="{{ $edit->name }}" placeholder="نام و نام خانوادگی">
            <br>
            <br>
            <input type="emai" name="email" value="{{ $edit->email }}" class="email" placeholder="ایمیل">
            <br>
            <br>
            <input type="password" name="password"  class="password" placeholder="رمزعبور">
            <br>
            <br>

            <input type="text" name="phonenumber" value="{{ $edit->phonenumber }}" class="text-2"
                placeholder="موبایل">
            <br>
            <br>
            <input type="number" name="grade" value="{{ $edit->grade }}" class="grade" placeholder="مقطع تحصیلی">
            <br><br>

            <input type="date" name="date" class="date" value="{{ $edit->date }}">

            <select class="select" name="city" value="{{ $edit->city }}">
                <option>استان</option>
                <option>تهران</option>
                <option>مشهد</option>
                <option>اصفهان</option>
                <option>شیراز</option>
                <option>تبریز</option>
            </select>

            <select class="select" name="state" value="{{ $edit->state }}">
                <option>شهرستان</option>
                <option>ورامین</option>
                <option>رباط کریم</option>
                <option>شهریار</option>
                <option>قرچک</option>
                <option>پیشوا</option>
            </select>
            <br>
            <br>
            <input type="radio" name="radio" class="radio" value="مرد">
            مرد
            <input type="radio" name="radio" class="radio" value="زن">
            زن
            <br>
            <br>
            <input type="submit" name="" class="button" value="ارسال">


        </form>
    </div>
</body>

</html>
