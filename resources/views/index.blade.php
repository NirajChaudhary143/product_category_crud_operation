<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product And Category Relationship</title>
</head>
<body>

<h1>Product Table</h1>
    @if(Session::has('success'))
{{Session::get('success')}}
@endif
@if(Session::has('fail'))
{{Session::get('fail')}}
@endif
<br>
    <a href="{{route('Products')}}">Add Products</a>
    <table>
   
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Category</th>
            <th>Action</th>
        </tr>
        @foreach($product as $product)
        <tr>
            <td>{{$product->product_id}}</td>
            <td>{{$product->product_name}}</td>
            @if($product->category_id==1)
            <td>Fruits</td>
            @elseif($product->category_id==2)
            <td>Vegitables</td>
            @endif
            <td>
                <a href="{{route('deleteProduct',['id'=>$product->product_id])}}">Delete</a>
                <a href="{{route('editView',['id'=>$product->product_id])}}">Edit</a>
            </td>
        </tr>
        @endforeach
    </table>
 

</body>
</html>