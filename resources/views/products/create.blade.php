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
   <h1>Create a Single Product</h1>
    <div class="">
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{ route('product.store') }}">
        @csrf
        @method('post')
        <div class="">
            <label>Name</label>
            <input type="text" name="name" placeholder="Enter name">
        </div>
        <div class="">
            <label>Quantity</label>
            <input type="number" name="qty" placeholder="Enter quantity">
        </div>
        <div class="">
            <label>Description</label>
            <input type="text" name="description" placeholder="Enter description">
        </div>
        <div class="">
            <label>Price</label>
            <input type="float" name="price" placeholder="Enter price">
        </div>
        <div class="">
            <input type="submit" value="Save a New Product">
        </div>
    </form>
</body>
</html>