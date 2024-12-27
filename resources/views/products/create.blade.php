<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Lravel Crud</title>
</head>
<body class="bg-white dark:bg-slate-800 px-6 py-8">
    <h1 class="mb-6 text-3xl font-bold dark:text-white mt-5 text-center">Create a Product</h1>
    <div>
        
        </div>
        <div class="mx-auto dark:bg-slate-700 rounded-lg px-6 py-8 ring-1 ring-slate-900/5 shadow-xl w-2/5">
            @if($errors->any())
                <ul class="mb-4">
                    @foreach($errors->all() as $error)
                        <li class="text-slate-200 dark:to-slate-200">{{$error}}</li>
                    @endforeach
                </ul>
            @endif
            <form  action="{{route('product.store')}}" method="post" >
            @csrf
            @method('post')
            <div class="mb-4">
                <label for="" class="text-slate-500 dark:text-slate-400 mt-2 text-sm">Name</label>
                <input type="text" name="name" class="bg-slate-500 dark:bg-slate-900 mt-1 block w-full rounded-md shadow-sm p-2 focus:ring focus:ring-blue-500 outline-none text-slate-400" placeholder="Name">
            </div>
            <div class="mb-4">
                <label for="" class="text-slate-500 dark:text-slate-400 mt-2 text-sm">Qty</label>
                <input type="text" name="qty" class="bg-slate-500 dark:bg-slate-900 mt-1 block w-full rounded-md shadow-sm p-2 focus:ring focus:ring-blue-500 outline-none text-slate-400" placeholder="Qty">
            </div>
            <div class="mb-4">
                <label for="" class="text-slate-500 dark:text-slate-400 mt-2 text-sm">Price</label>
                <input type="text" name="price" class="bg-slate-500 dark:bg-slate-900 mt-1 block w-full rounded-md shadow-sm p-2 focus:ring focus:ring-blue-500 outline-none text-slate-400" placeholder="Price">
            </div>
            
            <div class="mb-4">
                <label for="" class="text-slate-500 dark:text-slate-400 mt-2 text-sm">Description</label>
                <input type="text" name="description" class="bg-slate-500 dark:bg-slate-900 mt-1 block w-full rounded-md shadow-sm p-2 focus:ring focus:ring-blue-500 outline-none text-slate-400" placeholder="description">
            </div>
            
            <div class="">
                <button type="submit" class="bg-slate-200 text-slate-900 dark:bg-slate-800 dark:text-slate-200 font-bold py-2 px-4 w-full text-center rounded hover:bg-slate-900 transition duration-200">Save New Product</button>
            </div>
        </form>
    </div>
</body>
</html>