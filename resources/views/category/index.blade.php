@extends('layouts.conquer')
@section('view')
<table id="example2" class="table table-bordered table-hover">
    <h2>List Category</h2>
    <thead>
        <tr>

            <th>Nama</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($listData as $li)
        <tr>
            <td>{{$li->name}}</td>
            <td>{{$li->description}}</td>
            <td>
                <a class='btn btn-xs btn-info' href="{{url('medicines/'.$li->id.'/edit')}}">Edit</a>

                <form method="POST" action="{{url('medicines/'.$li->id)}}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" onclick="if(!confirm('are you sure to delete this record ? ')) return false;" value="delete" class="btn btn-danger btn-xs">
                </form>
            </td>
            <td><a href="#modalEdit" data-toggle='modal' class="btn btn-warning btn-xs" onclick="getEditForm({{$li->id}})">Edit A</a></td>
            <td><a href="#modalEdit" data-toggle='modal' class="btn btn-warning btn-xs" onclick="getEditForm2({{$li->id}})">Edit B</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
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

<div class="modal fade" id="modalEdit" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" id="modalContent">
               
            </div>
        </div>
    </div>

@endsection
@section('javascript')
<script>
     function getEditForm(id) {
        $.ajax({
            type: 'POST',
            url: '{{route("category_Medicine.getEditForm")}}',
            data: {
                '_token': '<?php echo csrf_token() ?>',
                'id': id
            },
            success: function(data) {
                $('#modalContent').html(data.msg)
            }
        });
    }
</script>
@endsection