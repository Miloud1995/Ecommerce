@
@extends('admin.pages.layout')
@section('content')
    @if (session()->has('message'))
        <div class="alert alert-success" style="margin-top: 30px ;text-align: center;margin-left:50px">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x </button>
            {{ session()->get('message') }}

        </div>
    @endif

    <div style="display:flex;justify-content: center;align-items: center ;background-color: #121212">
        <h1 style="font-size: 24px; color:white ; padding:10px">Product List</h1>
    </div>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">title</th>
                <th scope="col">description</th>
                <th scope="col">category</th>
                <th scope="col">quantite</th>
                <th scope="col">price</th>
                <th scope="col">descount price</th>
                <th scope="col">image</th>
                <th scope="col">Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->category }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->descount_price }}</td>
                    <td><img src="/product/{{ $product->image }}" alt=""
                            style="width: 70px;height: 70px;border-radius: 12px"></td>
                    <td style="display: flex;justify-content:space-evenly gap:20px center">

                        <form action="{{ route('edit_product', ['id' => $product->id]) }}" method="get">
                            <button class="btn btn-primary" type="submit" style="width: 90px;">Edit</button>
                        </form>


                        <form action="{{ route('delete_product', ['id' => $product->id]) }}" method="POST">
                            @csrf
                            <button class="btn btn-danger" type="submit"
                                onclick="return confirm('are sure you want to delete this product ?')"
                                style="width: 90px;margin-left: 20px">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
