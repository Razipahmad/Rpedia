@extends('layouts.admin')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <div class="row">
                <div class="col-6">
                    <h6 class="text-white text-capitalize ps-3">Category List</h6>
                  </div>
                <div class="col-6 text-end">
                    <a class="btn bg-gradient-dark mb-0 me-3" href="/add-products"><i class="material-icons text-sm">add</i>&nbsp;&nbsp;Add New Product</a>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0" >
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Name</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Category</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Short Description</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Price</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Promo Price</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($products as $item)
                        <tr>
                            <td>
                                <div class="d-lex px-2 py-1">
                                    <p class="text-xs font-weight-bold mb-0">{{ $item->id }}</p>
                                </div>
                            </td>
                            <td>
                                <h6 class="mb-0 text-sm">{{ $item->name}}</h6>
                            </td>
                            <td>
                              <h6 class="mb-0 text-sm">{{ $item->category->name}}</h6>
                            </td>
                            <td>
                                <span class="text-secondary text-xs font-weight-bold">{{ $item->small_description}}</span>
                            </td>
                            <td>
                                <span class="text-secondary text-xs font-weight-bold">Rp. {{ $item->original_price}}</span>
                            </td>
                            <td>
                                <span class="text-secondary text-xs font-weight-bold">Rp. {{ $item->selling_price}}</span>
                            </td>
                            <td class="align-middle text-center">
                                <img src="{{ asset('assets/uploads/products/'.$item->image) }}" alt="img-blur-shadow" style="height: 70px; width:auto;" class="img-fluid shadow border-radius-xl">
                            </td>
                            <td class="align-middle text-center">
                                <a href="{{ url('edit-product/'.$item->id) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                    Edit
                                </a>
                                <span> | </span>
                                <a href="{{ url('delete-product/'.$item->id) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                    Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection