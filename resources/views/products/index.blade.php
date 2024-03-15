<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 10 - CRUD</title>
    @vite('resources/css/app.css')
</head>

<body class="px-10 py-10 flex justify-center w-full h-screen">
    <div class="flex flex-col items-center">
        <h1 class="text-4xl text-gray-800 font-normal">Product List</h1>
        @if (session()->has('success'))
            <h3>{{ session('success') }}</h3>
        @endif
        <div class="overflow-x-auto mt-5">
            <table class="table table-zebra">
                <!-- head -->
                <thead>
                    <tr>
                        <th class="border border-slate-400">ID</th>
                        <th class="border border-slate-400">Name</th>
                        <th class="border border-slate-400">Qty</th>
                        <th class="border border-slate-400">Price</th>
                        <th class="border border-slate-400">Description</th>
                        <th class="border border-slate-400">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td class="border border-slate-400">{{ $product->id }}</td>
                            <td class="border border-slate-400">{{ $product->name }}</td>
                            <td class="border border-slate-400">{{ $product->qty }}</td>
                            <td class="border border-slate-400">{{ $product->price }}</td>
                            <td class="border border-slate-400">{{ $product->description }}</td>
                            <td class="border border-slate-400 flex space-x-2">
                                <a class="btn btn-warning font-normal btn-sm text-white"
                                    href="{{ route('product.edit', ['product' => $product]) }}">Edit</a>
                                <form action="{{ route('product.destroy', ['product'=>$product]) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-error font-normal btn-sm text-white"
                                        value="Delete" />
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <a href="{{ route('product.create') }}"
            class="btn btn-primary font-normal btn-md text-base text-white self-end mt-4">Add New Product</a>
    </div>
</body>

</html>
