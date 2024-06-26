<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="http://127.0.0.1:8000/users/user-list.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="body">
    <div class="div-2">
        <div>
            <h3 class="h3">کاربران</h3>
            <input type="button" name="button" class="button-user" value="افزودن کاربر">
            <select class="select">
                <option>همه کاربران</option>
                <option>کاربران حذف شده</option>
                <option>کاربران بلاک شده</option>
            </select>
            <input type="search" name="search" class="search" placeholder="جستجو کاربران">
        </div>
    </div>
    <div class="div-1">
        <table border="1" class="table">
            <tr>

                <td>نام و نام خانوادگی</td>
                <td>ایمیل</td>
                <td>موبایل</td>
                <td>مقطع تحصیلی</td>
                <td>تولد</td>
                <td>استان</td>
                <td>شهرستان</td>
                <td>id</td>
                <td>مدیریت</td>
            </tr>
            @foreach ($users as $users)
                <tr>
                    <td>{{ $users->name }}</td>
                    <td>{{ $users->email }}</td>
                    <td>{{ $users->phonenumber }}</td>
                    <td>{{ $users->grade }}</td>
                    <td>{{ $users->date }}</td>
                    <td>{{ $users->city }}</td>
                    <td>{{ $users->state }}</td>
                    <td>{{ $users->id }}</td>
                    <td><a href="{{ route('users.edit', ['id' => $users->id]) }}">ویرایش</a>
                        <form action="{{ route('users.delete', ['id' => $users->id]) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit">حذف</button>

                        </form>
                    </td>


                </tr>
            @endforeach
        </table>
    </div>
    <div class="icon-bar">
        <a class="active" href="#"><i class="fa fa-home"></i></a>
        <a href="#"><i class="fa fa-user"></i></a>
        <a href="#"><i class="fa fa-money"></i></a>
        <a href="#"><i class="fa fa-book"></i></a>
        <a href="#"><i class="fa fa-bank account"></i></a>
    </div>
</body>
