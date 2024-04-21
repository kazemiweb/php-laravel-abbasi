<!DOCTYPE html>
<html lang="en">
<dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>نام محصول</th>
            <th>نوع محصول</th>
            <th>رنگ محصول</th>
            <th>قیمت محصول</th>
            <th>شناسه</th>
            <th>مدیریت</th>
            
        </tr>

        @foreach ($product as $products)
            <tr>
                <td>{{ $products->name }}</td>
                <td>{{ $products->type }}</td>
                <td>{{ $products->color }}</td>
                <td>{{ $products->currency }}</td>
                <td>{{ $products->id }}</td>
                <td><a href="{{ route('products.edit',['id'=>$products->id])}}">ویرایش</a>
                <form action="{{  route('products.delete',['id'=>$products->id]) }}" method="post">
                 @csrf
                            @method('delete')
                            <button type="submit">حذف</button>
                </form>
        </tr>
         @endforeach

    </table>
</body>

</html>
