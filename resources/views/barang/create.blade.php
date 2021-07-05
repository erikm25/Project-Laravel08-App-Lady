@extends('layouts.app')
@section('content')

<form action="/barang/store" method="post">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
        <input type="text" name="namabarang" class="form-control" value="{{ old('namabarang')}}">
        @error('namabarang')
        <span class="text-danger">{{ $message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Jenis</label>
        <input type="jenis" name="jenis" class="form-control" value="{{ old('jenis')}}">
        @error('jenis')
        <span class=" text-danger">{{ $message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Harga</label>
        <input type="harga" name="harga" class="form-control" value="{{ old('harga')}}">
        @error('harga')
        <span class=" text-danger">{{ $message}}</span>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection