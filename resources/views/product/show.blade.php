@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Deail Product</h1>
    <hr>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" placeholder="title" value="{{ $product->title }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Price</label>
            <input type="text" name="price" class="form-control" placeholder="title" value="{{ $product->price }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Product code</label>
            <input type="text" name="product_code" class="form-control" placeholder="Product Code" value="{{ $product->product_code }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Description</label>
            <input type="text" name="description" class="form-control" placeholder="Description" value="{{ $product->description }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created at</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created at" value="{{ $product->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Update at</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Update at" value="{{ $product->updated_at }}" readonly>
        </div>
    </div>
@endsection
