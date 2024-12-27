<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Products</h1>
   
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
        <table border="1">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                    @forelse($products as $product){
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->qty}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->description}}</td>
                        <td>
                            <a href="{{route('product.edit', ['product' => $product])}}">Edit</a>
                        </td>
                        <td>
                            
                            <form action="{{route('product.delete', ['product' => $product])}}">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                }
                @empty{
                    <tr>
                        <td colspan="5">No Records Found</td>
                        <td colspan="2">
                            <a href="{{route('product.create')}}">Add New Record</a>
                        </td>
                    </tr>
                }
                 @endforelse
            
        </table>
    
</body>
</html>