@extends('layouts.frontend')

@section('title', 'Products')

@section('content')

    <div class="container products">

        <div class="row">

        @foreach($products as $li)
            <div class="col-xs-18 col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img style="width:100%; height:150px;" src="{{asset('img/'.$li->img)}}" alt="">
                    <div class="caption">
                        <h4>{{$li->generic_Name}}</h4>
                        <p>{{Str::limit(strtolower($li->description), 50)}}</p>
                        <p><strong>Price: </strong>{{$li->price}}</p>
                        <p class="btn-holder"><a href="{{url('add-to-cart/'.$li->id)}}" 
                        class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                    </div>
                </div>
            </div>
        @endforeach

        </div><!-- End row -->

    </div>

@endsection