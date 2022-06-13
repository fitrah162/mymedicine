@extends('layouts.conquer')
@section('view')

<form method="POST" action="{{url('medicines/'.$res->id)}}">
    @csrf
    @method("PUT")
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="generic_Name" value="{{$res->generic_Name}}" class="form-control" placeholder="generic name">
  </div>
  <div class="form-group">
    <label>Form</label>
    <input type="text" name="form" value="{{$res->form}}" class="form-control" placeholder="form">
  </div>
  <div class="form-group">
    <label>Formula</label>
    <input type="text" name="formula" value="{{$res->restriction_Formula}}" class="form-control" placeholder="restriction formula">
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" value="{{$res->description}}" name="description" placeholder="description"  rows="3"></textarea>
  </div>
  <div class="form-group">
    <label>Select image</label>
    <input type="file" value="{{$res->img}}" class="form-control-file border" name="img">
  </div>
  <div class="form-group">
    <label>Price</label>
    <input type="number" name="price" value="{{$res->price}}" class="form-control" placeholder="price">
  </div>
  <div class="form-group">
  <label>Faskes_TK1</label>
  <select name="faskes1">
    @if($res->faskes_TK1 == 0)
        <option value="1">Ya</option>
        <option value="0" selected>Tidak</option>
    @else
    <option value="1" selected>Ya</option>
        <option value="0">Tidak</option>
    @endif
  </select>
  </div>
  <div class="form-group">
  <label>Faskes_TK2</label>
  <select name="faskes2">
  @if($res->faskes_TK2 == 0)
        <option value="1">Ya</option>
        <option value="0" selected>Tidak</option>
    @else
    <option value="1" selected>Ya</option>
        <option value="0">Tidak</option>
    @endif
  </select>
  </div>
  <div class="form-group">
  <label>Faskes_TK3</label>
  <select name="faskes3">
  @if($res->faskes_TK3 == 0)
        <option value="1">Ya</option>
        <option value="0" selected>Tidak</option>
    @else
    <option value="1" selected>Ya</option>
        <option value="0">Tidak</option>
    @endif
  </select>
  </div>
  <div class="form-group">
  <label for="cars">Choose category</label>
  <select name="category">
      @foreach($pCategory as $li)
      @if($res->category == $li->id)
      <option value="{{$li->id}}" selected>{{$li->name}}</option>
      @else
      <option value="{{$li->id}}">{{$li->name}}</option> 
      @endif
      @endforeach
  </select>
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection