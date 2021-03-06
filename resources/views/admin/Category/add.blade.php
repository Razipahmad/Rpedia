@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Add Category</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('insert-category') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">Name</label>
                        <input type="text" name="name" id="" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Slug</label>
                        <input type="text" name="slug" id="" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Description</label>
                        <input type="text" name="description" id="" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Status</label>
                        <div class="form-check form-switch ps-0 ms-auto my-auto">
                            <input class="form-check-input mt-1 ms-auto" name="status" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
                        </div>
                        {{-- <input type="checkbox" name="status" id="" class="form-check-input mt-1 ms-auto"> --}}
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Popular</label>
                        <div class="form-check form-switch ps-0 ms-auto my-auto">
                            <input class="form-check-input mt-1 ms-auto" name="popular" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Image</label>
                        <input type="file" name="image" id="" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Meta Title</label>
                        <input type="text" name="meta_title" id="" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Meta Description</label>
                        <input type="text" name="meta_description" id="" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Meta Keywords</label>
                        <input type="text" name="meta_keywords" id="" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection