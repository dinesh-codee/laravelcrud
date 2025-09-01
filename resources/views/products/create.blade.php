<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 12 CRUD</title>

    {{-- BOOSTRAPS LINK --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>

    <div class="bg-dark text-center text-white py-3">
        <h2>Laravel 12 CRUD Application</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="d-flex  justify-content-end mt-2 p-0">
                <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
                {{-- <a href="" class="btn btn-primary mx-2">Create</a> --}}

            </div>

            <div class="card p-0 mt-3">
                <div class="card-header bg-dark text-white">
                    <h4>Create Products</h4>
                </div>
                <div class="card-body shadow-lg">
                    <form action="{{ route('products.store') }}" enctype="multipart/form-data" method="POST">

                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" value="{{ old('name') }}" id="name"
                                class="form-control @error('name') is-invalid @enderror"
                                placeholder="Enter Product Name">

                            @error('name')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" name="image" value="{{ old('image') }}" id="image"
                                class="form-control @error('image') is-invalid @enderror">

                            @error('image')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="sku" class="form-label">SKU</label>
                            <input type="text" name="sku" value="{{ old('sku') }}" id="sku"
                                class="form-control @error('sku') is-invalid @enderror" placeholder="SKU">

                            @error('sku')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" name="price" value="{{ old('price') }}" id="price"
                                class="form-control @error('price') is-invalid @enderror" placeholder="Price">

                            @error('price')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" id="status " class="form-select">
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                        </div>
                        <button class="btn btn-primary float-end">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</body>

</html>
