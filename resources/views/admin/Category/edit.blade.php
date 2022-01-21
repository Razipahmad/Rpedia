@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Category</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('update-category/'.$category->id) }}" method="POSt" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">Name</label>
                        <input type="text" name="name" id="" value="{{$category->name}}" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Slug</label>
                        <input type="text" name="slug" id="" value="{{$category->slug}}" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Description</label>
                        <input type="text" name="description" value="{{$category->description}}" id="" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Status</label>
                        <div class="form-check form-switch ps-0 ms-auto my-auto">
                            <input class="form-check-input mt-1 ms-auto" name="status" {{$category->status == '1' ?  'checked' : ''}} type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
                        </div>
                        {{-- <input type="checkbox" name="status" id="" class="form-check-input mt-1 ms-auto"> --}}
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Popular</label>
                        <div class="form-check form-switch ps-0 ms-auto my-auto">
                            <input class="form-check-input mt-1 ms-auto" name="popular" {{$category->popular == '1' ?  'checked':''}} type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Image</label>
                        @if ($category->image)
                        <img src="{{ asset('assets/uploads/category/'.$category->image) }}" alt="" class="avatar avatar-m border-radius-lg">
                        @endif
                        <input type="file" name="image" id="" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Meta Title</label>
                        <input type="text" name="meta_title" value="{{$category->meta_title}}" id="" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Meta Description</label>
                        <input type="text" name="meta_description" value="{{$category->meta_description}}" id="" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Meta Keywords</label>
                        <input type="text" name="meta_keywords" value="{{$category->meta_keywords}}" id="" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection