<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit a Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form class="" action="{{route('product.update', ['product' => $product])}}" method="post">
        @csrf
        @method('put')
        <div>
            <label for="">Name</label>
            <input type="text" name="name" placeholder="Name" value="{{$product->name}}">
        </div>
        <div>
            <label for="">Qty</label>
            <input type="text" name="qty" placeholder="Qty" value="{{$product->qty}}">
        </div>
        <div>
            <label for="">Price</label>
            <input type="text" name="price" placeholder="Price" value="{{$product->price}}">
        </div>
        
        <div>
            <label for="">Description</label>
            <input type="text" name="description" placeholder="description" value="{{$product->description}}">
        </div>
        
        <div>
            <button type="submit">Update</button>
        </div>
    </form>
</body>
</html>