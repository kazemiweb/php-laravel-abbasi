<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>نام سفارش</th>
            <th>نوع سفارش</th>
            <th>رنگ محصول</th>
            <th>قیمت محصول</th>
            <th>آدرس مشتری</th>
            <th>تاریخ سفارش</th>
            <th>تاریخ دریافت محصول</th>
            <td>کد پستی</td>
            <td>شناسه</td>
            <td>مدیریت</td>

        </tr>

        @foreach ($order as $orders)
            <tr>
                <td>{{ $orders->name }}</td>
                <td>{{ $orders->type }}</td>
                <td>{{ $orders->color }}</td>
                <td>{{ $orders->currency }}</td>
                <td>{{ $orders->adress }}</td>
                <td>{{ $orders->request_time }}</td>
                <td>{{ $orders->receiving_time }}</td>
                <td>{{ $orders->post_code }}</td>
                <td>{{ $orders->id }}</td>
                <td><a href="{{ route('orders.edit', ['id' => $orders->id]) }}">ویرایش</a>
                    <form action="{{route('orders.delete',['id'=>$orders->id]) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit">حذف</button>
                    </form>
                </td>
            </tr>
        @endforeach


    </table>
</body>

</html>
