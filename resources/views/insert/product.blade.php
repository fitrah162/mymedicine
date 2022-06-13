@extends('layouts.conquer')
@section('view')

<form enctype="multipart/form-data" role="form" method="POST" action="{{route('medicines.store')}}">
    @csrf
    
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="generic_Name" class="form-control" placeholder="generic name">
  </div>
  <div class="form-group">
    <label>Form</label>
    <input type="text" name="form" class="form-control" placeholder="form">
  </div>
  <div class="form-group">
    <label>Formula</label>
    <input type="text" name="formula" class="form-control" placeholder="restriction formula">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" name="description" placeholder="description"  rows="3"></textarea>
  </div>
  <div class="form-group">
    <label>Select image</label>
    <input type="file" class="form-control-file border" name="img" id="img">
  </div>
  <div class="form-group">
    <label>Price</label>
    <input type="number" name="price" class="form-control" placeholder="price">
  </div>
  <div class="form-group">
  <label>Faskes_TK1</label>
  <select name="faskes1">
    <option value="1">Ya</option>
    <option value="0">Tidak</option>
  </select>
  </div>
  <div class="form-group">
  <label>Faskes_TK2</label>
  <select name="faskes2">
    <option value="1">Ya</option>
    <option value="0">Tidak</option>
  </select>
  </div>
  <div class="form-group">
  <label>Faskes_TK3</label>
  <select name="faskes3">
    <option value="1">Ya</option>
    <option value="0">Tidak</option>
  </select>
  </div>
  <div class="form-group">
  <label for="cars">Choose category</label>
  <select name="category">
      @foreach($selectCategory as $li)
      <option value="{{$li->id}}">{{$li->name}}</option>
      @endforeach
  </select>
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection