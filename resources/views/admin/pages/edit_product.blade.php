@extends('admin.pages.layout')

@section('content')
    <form action="{{ route('update_product') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Product Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $product->title }}">
        </div>

        <div class="form-group">
            <label for="description">Product Description</label>
            <input type="text" class="form-control" id="description" name="description"
                value="{{ $product->description }}">
        </div>

        <div class="form-group">
            <label for="quantite">Quantity</label>
            <input type="number" min="1" class="form-control" name="quantity" id="quantity"
                value="{{ $product->quantity }}">
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}">
        </div>

        <div class="form-group">
            <label for="discount_price">Discount Price</label>
            <input type="number" class="form-control" id="descount_price" name="discount_price"
                value="{{ $product->discount_price }}">
        </div>

        <div class="form-group" style="display:flex;flex-direction: column">
            <label for="category">Category</label>
            <select name="category" class="form-control">
                <option value="{{ $product->category }}">{{ $product->category }}</option>
            </select>
        </div>
        <div class="form-group">
            <label for="image">the actual image</label>
            <img src="/product/{{ $product->image }}" alt="" style="width: 70px;height:70px;border-radius: 12px">
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control" id="image" name="image" style="border:1px solid gray">
        </div>

        <div style="display: flex;justify-content: center;align-items: center">
            <button type="submit" class="btn btn-primary" style="width: 15%">Update</button>
        </div>
    </form>
@endsection
