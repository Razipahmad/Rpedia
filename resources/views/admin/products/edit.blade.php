@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Product</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('update-product/'.$product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">Name</label>
                        <input type="text" name="name" value="{{$product->name}}" id="" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Category</label>
                        <select name="cate_id" id="" class="form-select">
                            <option value="{{$product->category->id}}">{{$product->category->name}}</option>
                            {{-- @foreach ($category as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach --}}
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Slug</label>
                        <input type="text" name="slug" value="{{$product->slug}}" id="" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Short Description</label>
                        <input type="text" name="short_description" value="{{$product->small_description}}" id="" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Description</label>
                        <input type="text" name="description" id="" value="{{$product->description}}" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Original Price</label>
                        <input type="text" name="original_price" value="{{$product->original_price}}" id="" class="form-control" onkeypress=" return onlyNumberKey(event)">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Selling Price</label>
                        <input type="text" name="selling_price" value="{{$product->selling_price}}" id="" class="form-control" onkeypress=" return onlyNumberKey(event)">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Image</label>
                        @if ($product->image)
                        <img src="{{ asset('assets/uploads/products/'.$product->image) }}" alt="" class="avatar avatar-m border-radius-lg">
                        @endif
                        <input type="file" name="image" id="" class="form-control">
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <label for="">QTY</label>
                        <input type="text" name="QTY" value="{{$product->qty}}" id="" class="form-control" onkeypress=" return onlyNumberKey(event)" >
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <label for="">TAX</label>
                        <input type="text" name="tax" id="" value="{{$product->tax}}" class="form-control"onkeypress="return onlyNumberKey(event)" >
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Status</label>
                        <div class="form-check form-switch ps-0 ms-auto my-auto">
                            <input class="form-check-input mt-1 ms-auto" name="status" {{$product->status == '1' ?  'checked' : ''}} type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
                        </div>
                        {{-- <input type="checkbox" name="status" id="" class="form-check-input mt-1 ms-auto"> --}}
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Trending</label>
                        <div class="form-check form-switch ps-0 ms-auto my-auto">
                            <input class="form-check-input mt-1 ms-auto" name="trending" {{$product->trending == '1' ?  'checked' : ''}} type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Meta Title</label>
                        <input type="text" name="meta_title" value="{{$product->meta_title}} id="" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Meta Description</label>
                        <input type="text" name="meta_description" value="{{$product->meta_description}} id="" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Meta Keywords</label>
                        <input type="text" name="meta_keywords" value="{{$product->meta_keywords}} id="" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection