@extends('admin.pages.layout')

@section('content')
    <form action="{{ route('save_product') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Product Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter the title">
        </div>

        <div class="form-group">
            <label for="description">Product Description</label>
            <input type="text" class="form-control" id="description" name="description"
                placeholder="Enter the description">
        </div>

        <div class="form-group">
            <label for="quantite">Quantity</label>
            <input type="number" min="1" class="form-control" name="quantity" id="quantity"
                placeholder="Enter the quantity">
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Enter the price">
        </div>

        <div class="form-group">
            <label for="discount_price">Discount Price</label>
            <input type="number" class="form-control" id="descount_price" name="discount_price"
                placeholder="Enter the discount price">
        </div>

        <div class="form-group" style="display:flex;flex-direction: column">
            <label for="category">Category</label>
            <select name="category" class="form-control">
                <option value="checked">Choose the category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                @endforeach

            </select>
        </div>

        @if (session()->has('message'))
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x </button>
                {{ session()->get('message') }}

            </div>
        @endif


        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control" id="image" name="image" style="border:1px solid gray">
        </div>

        <div style="display: flex;justify-content: center;align-items: center">
            <button type="submit" class="btn btn-primary" style="width: 15%">Save</button>
        </div>
    </form>
@endsection
