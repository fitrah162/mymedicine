@extends('layouts.conquer')
@section('javascript')
<script>
  function getDetailData(id) {
    $.ajax({
      type: 'POST',
      url: '{{route("transaction.showAjax")}}',
      data: '_token=<?php echo csrf_token() ?> &id=' + id,
      success: function(data) {
        $("#msg").html(data.msg);
      }
    });
  }
</script>
@endsection
@section('view')
<table class="table table-hover">
  <thead>
    <tr>
      <th>ID</th>
      <th>Pembeli</th>
      <th>Kasir</th>
      <th>Tanggal Transaction</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($res as $li)
    <tr>
      <td>{{$li->id}}</td>
      <td>{{$li->buyer->name}}</td>
      <td>{{$li->user->name}}</td>
      <td>{{$li->created_at}}</td>
      <td>
        <a class='btn btn-default' data-toggle='modal' href="#basic"
            data-target="#msg" onclick="getDetailData({{ $li->id }});">Lihat Rincian Pembelian</a>        
          <div class="modal fade" id="msg" tabindex="-1" role="basic" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <!-- put animated gif here -->
                <img src="{{ asset('conquer2/img/ajax-modal-loading.gif') }}" alt="" class="loading">
              </div>
            </div>
         </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection