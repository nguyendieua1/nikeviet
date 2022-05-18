@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Add Category</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('insert-category') }}" enctype="multipart/form-data">
              @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="" for="">Name</label>
                        <input type="text" class="form-control bg-gray-200" name="name">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="" for="">Slug</label>
                        <input type="text" class="form-control bg-gray-200" name="slug">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="" for="">Desciption</label>
                        <textarea name="desciption" rows="3" class="form-control bg-gray-200" ></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="" for="">Status</label>
                        <input type="checkbox" name="status">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="" for="">Popular</label>
                        <input type="checkbox" name="popular">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="" for="">Meta Title</label>
                        <input type="text" class="form-control bg-gray-200" name="meta_title">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="" for="">Meta Keywords</label>
                        <input type="text" class="form-control bg-gray-200" name="meta_keywords">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="" for="">Meta Desciption</label>
                        <input type="text" class="form-control bg-gray-200" name="meta_descipt">
                    </div>
                    <div class="col-md-12">
                        <input type="file" name="image" class="form-control bg-gray-200">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
