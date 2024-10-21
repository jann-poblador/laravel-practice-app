<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
    @vite([])
</head>
<body>
    <h1>Edit a Product</h1>
    <div class="">
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('product.update', ['product' => $product])}}">
        @csrf
        @method('put')
        <div class="">
            <label>Name</label>
            <input type="text" name="name" placeholder="Enter name" value="{{$product->name}}">
        </div>
        <div class="">
            <label>Quantity</label>
            <input type="number" name="qty" placeholder="Enter quantity" value="{{$product->qty}}">
        </div>
        <div class="">
            <label>Price</label>
            <input type="float" name="price" placeholder="Enter price" value="{{$product->price}}">
        </div>
        <div class="">
            <label>Description</label>
            <input type="text" name="description" placeholder="Enter description" value="{{$product->description}}">
        </div>
        <div class="">
            <input type="submit" value="Update">
        </div>
    </form>
</body>
</html>