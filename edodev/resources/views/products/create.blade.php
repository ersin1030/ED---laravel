@extends('layouts.app')
  
@section('title', 'Create Product')
  
@section('contents')
    <h1 class="mb-0">Add Product</h1>
    <hr />
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="başlik" class="form-control" placeholder="başlik">
            </div>
            <div class="col">
                <input type="text" name="fiyat" class="form-control" placeholder="fiyat">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="ürün_kodu" class="form-control" placeholder="ürün_kodu">
            </div>
            <div class="col">
                <textarea class="form-control" name="açikla" placeholder="açikla"></textarea>
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
resources/views/products/show.blade.php