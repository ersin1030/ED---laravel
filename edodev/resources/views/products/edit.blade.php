@extends('layouts.app')
  
@section('title', 'Edit Product')
  
@section('contents')
    <h1 class="mb-0">Edit Product</h1>
    <hr />
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">başlik</label>
                <input type="text" name="başlik" class="form-control" placeholder="başlik" value="{{ $product->başlik }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">fiyat</label>
                <input type="text" name="fiyat" class="form-control" placeholder="fiyat" value="{{ $product->fiyat }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">ürün kodu</label>
                <input type="text" name="ürün_kodu" class="form-control" placeholder="ürün_kodu" value="{{ $product->ürün_kodu }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">açikla</label>
                <textarea class="form-control" name="açikla" placeholder="açikla" >{{ $product->açikla }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Güncelle</button>
            </div>
        </div>
    </form>
@endsection