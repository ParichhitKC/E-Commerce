@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Category</h2>
            </div>
            <div class="pull-right">
                @can('category-create')
                    <a class="btn btn-success" href="{{ route('category.create') }}"> Create New Category</a>
                @endcan
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($category as $cat)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $cat->name }}</td>
                <td>{{ $cat->detail }}</td>
                <td>
                    <form action="{{ route('category.destroy',$cat->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('category.show',$cat->id) }}">Show</a>
                        @can('category-edit')
                            <a class="btn btn-primary" href="{{ route('category.edit',$cat->id) }}">Edit</a>
                        @endcan


                        @csrf
                        @method('DELETE')
                        @can('category-delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        @endcan
                    </form>
                </td>
            </tr>
        @endforeach
    </table>


    {!! $category->links() !!}


    <p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>
@endsection
