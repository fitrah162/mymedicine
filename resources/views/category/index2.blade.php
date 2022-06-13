@extends('layouts.conquer')
@section('view')
<div>
    @if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
    @endif
</div>

<?php
$id = (isset($_GET['id'])) ? $_GET['id'] : $listData[0]->id;
?>
<div class="container">
    <div class="dropdown show mt-4">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            @foreach($listData as $li)
            @if($li->id==$id)
            {{$li->name}}
            @endif

            @endforeach
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <!-- <select>
                    @foreach($listData as $li)
                    <option value="{{$li->id}}" href="?id={{$li->id}}">{{$li->name}}</option>
                    @endforeach -->
            </select>
            @foreach($listData as $li)
            <a class="dropdown-list" href="?id={{$li->id}}">{{$li->name}}</a><br>
            @endforeach
        </div>
    </div>
    <a href="#modalCreate" data-toggle="modal" class="btn btn-info">
        + Category Baru (modal)
    </a>
    <div class="modal fade" id="modalCreate" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="{{route('category_Medicine.store')}}">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Add New Category</h4>
                    </div>
                    <div class="modal-body">

                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kategori</label>
                            <input type="text" name="name" class="form-control" placeholder="nama kategori baru">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea class="form-control" name="description" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="row">
        @foreach($listDataProduct as $li)
        @if($li->category==$id)
        <div class="col-md-4 mt-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{asset('img/'.$li->img)}}" alt="Card image cap" style="height: 300px">
                <div class="card-body">
                    <h5 class="card-title">{{$li->generic_Name}} {{$li->form}}</h5>
                    <p class="card-text">Rp. {{$li->price}}</p>
                </div>
            </div>
        </div>
        @endif

        @endforeach
    </div>
</div>

<!-- <div class="container">
  <h2>List Medicines</h2>
  <p>The .table-hover class enables a hover state on table rows:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Form</th>
        <th>Restriction and Formula</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
       @foreach($listData as $li)
      <tr>
        <td>{{$li->generic_Name}}</td>
        <td>{{$li->form}}</td>
        <td>{{$li->restriction_Formula}}</td>
        <td>{{$li->description}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div> -->
@endsection