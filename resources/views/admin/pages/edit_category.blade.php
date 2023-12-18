@extends('admin.pages.layout')

@section('content')
    <form action="{{ route('update_category', compact('id')) }}" method="POST"
        style="display: flex;flex-direction: column;justify-content:center;align-items: center;gap:30px;">
        @csrf
        @method('POST')
        <label for="name" style="font-size: 24px">Category Name</label>
        <input type="text" id="name" name="name" value="{{ $category_name }}">

        <button type="submit" style="background-color: grey;padding:10px ">Update Category</button>
    </form>
@endsection
