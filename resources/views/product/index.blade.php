@extends('layouts.app')

@section('body')
    <div>
        <h1>List Product</h1>
        <a href="{{ route('product.create')}}" class="btn btn-primary">Add products</a>
    </div>
    <hr>
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success')}}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Price</th>
                <th>Produce Code</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($product->count() > 0)
                @foreach ($product as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->title }}</td>
                        <td class="align-middle">{{ $rs->price }}</td>
                        <td class="align-middle">{{ $rs->product_code }}</td>
                        <td class="align-middle">{{ $rs->description }}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic Example">
                                <a href="{{ route('product.show', $rs->id)}}" type="button" class="btn btn-primary">Detail</a>
                                <a href="{{ route('product.edit', $rs->id)}}" type="button" class="btn btn-secondary">Edit</a>
                                <form action="{{ route('product.destroy', $rs->id )}}" method="POST" type="button" class="btn btn-danger" onsubmit="return confirm('delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center">Product not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
