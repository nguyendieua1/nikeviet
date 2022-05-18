@extends('layouts.admin')

@section('content')
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header">
                <h4>Category page</h4>
            </div>
            <div class="card-body">
                <a class="btn btn-secondary" href="{{ url('add-category') }}" role="button">Add Category</a>
                <table class="table">
                    <thead>
                        <tr>
                            <td>Id</td>
                            <td>Name</td>
                            <td>Description</td>
                            <td>Image</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($category as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->desciption}}</td>
                            <td><img src="{{ asset('assets/uploads/category/'.$item->image) }}" width="50px" height="50px"> </td>
                            <td>
                                <button class="btn btn-primary">Edit</button>
                                <button class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

