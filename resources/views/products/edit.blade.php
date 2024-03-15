<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>
    @vite('resources/css/app.css')
</head>
<body>
    <body class="px-10 py-10 flex justify-center w-full h-screen">
        <div class="flex flex-col items-center">
            <h1 class="text-4xl text-rose-500 font-normal">Edit a Product</h1>
            <div>
                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
            <form class="mt-5 flex flex-col gap-4" action="{{ route('product.update', ['product'=>$product]) }}" method="post">
                @csrf
                @method('put')
                <div class="flex flex-col justify-center">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Product Name"
                        class="input input-bordered w-full max-w-xs" value="{{ $product->name }}" />
                </div>
                <div class="flex flex-col justify-center">
                    <label for="qty">Qty</label>
                    <input type="text" id="qty" name="qty" placeholder="Product Qty"
                        class="input input-bordered w-full max-w-xs" value="{{ $product->qty }}" />
                </div>
                <div class="flex flex-col justify-center">
                    <label for="price">Price</label>
                    <input type="text" id="price" name="price" placeholder="Product Price"
                        class="input input-bordered w-full max-w-xs" value="{{ $product->price }}" />
                </div>
                <div class="flex flex-col justify-center">
                    <label for="description">Description</label>
                    <input type="text" id="description" name="description" placeholder="Description"
                        class="input input-bordered w-full max-w-xs" value="{{ $product->description }}" />
                </div>
                <div class="self-end">
                    <input type="submit" value="Update Product"
                        class="btn btn-success text-white text-lg font-normal btn-md">
                </div>
            </form>
        </div>
    </body>
</body>
</html>
