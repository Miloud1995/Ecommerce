@extends('admin.pages.layout')
@section('content')
    @if (session()->has('message'))
        <div class="alert alert-success" style="margin-top: 30px ;text-align: center;margin-left:50px">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x </button>
            {{ session()->get('message') }}

        </div>
    @endif

    @if (session()->has('error'))
        <div class="alert alert-danger" style="margin-top: 30px ;text-align: center;margin-left:50px">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x </button>
            {{ session()->get('message') }}

        </div>
    @endif


    <div class="div_category">
        <h2 class="category_title te ">Category</h2>
        <form action="{{ url('/add_category') }}" method="POST" class="form_des">
            @csrf
            <input type="text" style="color: gray" name="category_name" placeholder="Write Category Name" />
            <input type="submit" name="submit" class="btn btn-primary" style="color: gray;" value="Add Category" />
        </form>

        <div>
            <table class="table table-dark" style="margin-top: 40px">
                <thead>
                    <tr>

                        <th scope="col">Category Name</th>
                        <th scope="col">Operatios</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($alldata as $category)
                        <tr>

                            <td>{{ $category->category_name }}</td>
                            <td style="display: flex;justify-content: center;align-items: center;gap:20px">
                                <form action="{{ route('delete_category', $category->id) }}" method="POST">
                                    @csrf
                                    <button type="submit"
                                        onclick="return confirm('are you syre you want to delete this category')"
                                        class="btn btn-danger">Delete</button>
                                </form>



                                <form
                                    action="{{ route('edit_category', ['category_name' => $category->category_name, 'id' => $category->id]) }}"
                                    method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-success" style="width: 75px">Edit</button>
                                </form>

                            </td>

                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
