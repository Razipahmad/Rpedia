@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Add Product</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('insert-product') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">Name</label>
                        <input type="text" name="name" id="" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Category</label>
                        <select name="cate_id" id="" class="form-select">
                            @foreach ($category as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Slug</label>
                        <input type="text" name="slug" id="" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Short Description</label>
                        <input type="text" name="short_description" id="" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Description</label>
                        <input type="text" name="description" id="" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Original Price</label>
                        <input type="text" name="original_price" id="rupiah" class="form-control" onkeypress="return onlyNumberKey(event)">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Selling Price</label>
                        <input type="text" name="selling_price" id="rupiah" class="form-control" onkeypress="return onlyNumberKey(event)">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Image</label>
                        <input type="file" name="image" id="" class="form-control">
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <label for="">QTY</label>
                        <input type="text" name="QTY" id="" class="form-control" onkeypress="return onlyNumberKey(event)" >
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <label for="">TAX</label>
                        <input type="text" name="tax" id="" class="form-control" onkeypress="return onlyNumberKey(event)" >
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Status</label>
                        <div class="form-check form-switch ps-0 ms-auto my-auto">
                            <input class="form-check-input mt-1 ms-auto" name="status" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
                        </div>
                        {{-- <input type="checkbox" name="status" id="" class="form-check-input mt-1 ms-auto"> --}}
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Trending</label>
                        <div class="form-check form-switch ps-0 ms-auto my-auto">
                            <input class="form-check-input mt-1 ms-auto" name="trending" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
                        </div>
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