@extends('layouts.conquer')
@section('initialscript')
<script>
    $('.editable').editable({
        closeOnEnter: true,
        callback: function(data) {
            if (data.content) {
                var s_id = data.$el[0].id;
                var s_name = s_id.split('-')[1];
                var id = s_id.split('-')[2];
                $.ajax({
                    type: 'POST',
                    url: '{{route("medicines.saveDataField")}}',
                    data: {
                        '_token': "<?php echo csrf_token() ?>",
                        'id': id,
                        'name': s_name,
                        'value': data.content
                    },
                    success: function(data) {
                        alert(data.msg);
                    }
                });
                
            }
        }
    });
</script>
@endsection
@section('view')

@if(session('status'))
<div class="alert alert-success">
    {{session('status')}}
</div>
@endif

<a class="btn btn-default" data-toggle="modal" href="#disclaimer">Disclaimer</a>

<div class="modal fade" id="disclaimer" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">DISCLAIMER</h4>
            </div>
            <div class="modal-body">
                Pictures shown are for illustration purpose only.Actual product may vary due to product enhancement.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@section('javascript')
<script>
    function showInfo() {
        $.ajax({
            type: 'POST',
            url: '{{route("product.showInfo")}}',
            data: '_token=<?php echo csrf_token() ?>',
            success: function(data) {
                $('#showinfo').html(data.msg)
            }
        });
    }
</script>
@endsection


<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="index.html">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="#" onclick="showInfo()">Welcome
                <i class="icon-bulb"></a></i>
        </li>
    </ul>
</div>
<div id='showinfo'></div>
<a href="#modalCreate" data-toggle="modal" class="btn btn-info">
    + Medicine Baru (modal)
</a>
<div class="modal fade" id="modalCreate" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="{{route('medicines.store')}}">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Add New Medicine</h4>
                </div>
                <div class="modal-body">

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
                        <textarea class="form-control" name="description" placeholder="description" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Select image</label>
                        <input type="file" class="form-control-file border" name="img">
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




                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container">
    <h2>List Medicines</h2>
    <p>The .table-hover class enables a hover state on table rows:</p>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Form</th>
                <th>Restriction and Formula</th>
                <th>Price</th>
                <th>Category</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($res as $li)
            <tr>
                <td>
                    <a class="btn btn-default" data-toggle="modal" href="#detail_{{$li->id}}" data-toggle="modal">{{ $li->id }}</a>

                    <div class="modal fade" id="detail_{{$li->id}}" tabindex="-1" role="basic" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">{{$li->generic_Name}}</h4>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ asset('img/').'/'.$li->img}}" height='200px' />
                                    <p><b>Description:</b></p>
                                    {{$li->description}}
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>

                <td class="editable" id="td-generic_Name-{{$li->id}}">{{$li->generic_Name}}</td>
                <td class="editable" id="td-form-{{$li->id}}">{{$li->form}}</td>
                <td class="editable" id="td-restriction_Formula-{{$li->id}}">{{$li->restriction_Formula}}</td>
                <td class="editable" id="td-price-{{$li->id}}">{{$li->price}}</td>
                <td class="editable" id="td-category-{{$li->id}}">{{$li->category}}</td>
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
    <div class="modal fade" id="modalEdit" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" id="modalContent">

            </div>
        </div>
    </div>
</div>
@endsection
@section('javascript')
<script>
    function getEditForm(id) {
        $.ajax({
            type: 'POST',
            url: '{{route("medicines.getEditForm")}}',
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