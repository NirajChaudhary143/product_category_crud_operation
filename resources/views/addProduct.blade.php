<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>
    <h1>Add Product</h1>
<form action="{{route('addProducts')}}" method="POST">
    @csrf
    <input type="text" placeholder="Enter Product Name" name="name"><br>
    <label for="">Category</label>
    <select name="categroy" id="">
        <option value="1">Fruits</option>
        <option value="2">Vegitables</option>
    </select>
    <br>
    <input type="submit" value="Add Product">
</form>
</body>
</html>