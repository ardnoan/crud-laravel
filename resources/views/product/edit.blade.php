@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Edit product</h1>
    <hr>
    <form action="{{ route('product.update', $product->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" placeholder="title" value="{{ $product->title }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Price</label>
                <input type="text" name="price" class="form-control" placeholder="price" value="{{ $product->price}}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-control">Product Code</label>
                <input type="text" name="product_code" class="form-control" placeholder="Product Code" value="{{ $product->product_code }}">
            </div>
            <div class="col mb-3">
                <label class="form-control">Description</label>
                <input type="text" name="description" class="form-control" placeholder="Description" value="{{ $product->description }}">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-danger">Update</button>
            </div>
        </div>
    </form>
