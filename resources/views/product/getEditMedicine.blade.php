@extends('layouts.conquer')
@section('view')

<form method="POST" action="{{route('medicines.update',$data->id)}}">
    @csrf
    @method('PUT')
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="generic_Name" class="form-control" placeholder="generic name" value="{{$data->generic_Name}}">
  </div>
  <div class="form-group">
    <label>Form</label>
    <input type="text" name="form" class="form-control" placeholder="form" value="{{$data->form}}">
  </div>
  <div class="form-group">
    <label>Formula</label>
    <input type="text" name="formula" class="form-control" placeholder="restriction formula" value="{{$data->restriction_Formula}}">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" name="description" placeholder="description"  rows="3" value="{{$data->description}}"></textarea>
  </div>
  <div class="form-group">
    <label>Select image</label><br>
    <img src="{{asset('img/'.$data->img)}}" alt="">
    <input type="file" class="form-control-file border" name="img" value="{{$data->img}}">
  </div>
  <div class="form-group">
    <label>Price</label>
    <input type="number" name="price" class="form-control" placeholder="price" value="{{$data->price}}">
  </div>
  <div class="form-group">
  <label>Faskes_TK1</label>
  <select name="faskes1">
    <option value="1" {{$data->faskes_TK1 == 1 ? 'selected' :''}}>Ya</option>
    <option value="0" {{$data->faskes_TK1 == 0 ? 'selected' :''}}>Tidak</option>
  </select>
  </div>
  <div class="form-group">
  <label>Faskes_TK2</label>
  <select name="faskes2">
    <option value="1" {{$data->faskes_TK2 == 1 ? 'selected' :''}}>Ya</option>
    <option value="0" {{$data->faskes_TK2 == 0 ? 'selected' :''}}>Tidak</option>
  </select>
  </div>
  <div class="form-group">
  <label>Faskes_TK3</label>
  <select name="faskes3">
    <option value="1" {{$data->faskes_TK3 == 1 ? 'selected' :''}}>Ya</option>
    <option value="0" {{$data->faskes_TK3 == 0 ? 'selected' :''}}>Tidak</option>
  </select>
  </div>
  <div class="form-group">
  <label for="cars">Choose category</label>
  <select name="category">
      @foreach($selectCategory as $li)
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