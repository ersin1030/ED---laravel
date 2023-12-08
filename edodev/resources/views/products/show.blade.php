@extends('layouts.app')
  
@section('title', 'Show Product')
  
@section('contents')
    <h1 class="mb-0">Ürün Detayları</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">başlik</label>
            <input type="text" name="başlik" class="form-control" placeholder="başlik" value="{{ $product->başlik }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">fiyat</label>
            <input type="text" name="fiyat" class="form-control" placeholder="fiyat" value="{{ $product->fiyat }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">ürün_kodu</label>
            <input type="text" name="ürün_kodu" class="form-control" placeholder="ürün_kodu" value="{{ $product->ürün_kodu }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">açikla</label>
            <textarea class="form-control" name="açikla" placeholder="açikla" readonly>{{ $product->açikla }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">oluşturmat</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $product->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">güncelleme</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $product->updated_at }}" readonly>
        </div>
    </div>
@endsection