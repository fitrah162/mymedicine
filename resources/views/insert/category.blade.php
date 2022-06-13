@extends('layouts.conquer')
@section('view')

<form method="POST" action="{{route('category_Medicine.store')}}">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Kategori</label>
    <input type="text" name="name" class="form-control" placeholder="nama kategori baru">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" name="description"  rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection