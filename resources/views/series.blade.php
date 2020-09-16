@extends('Front.layouts.Master')
@section('title')
    Diziease
@endsection
@section('content')

            <div class="col-md-6">
                <h1>Dizi Ekle</h1>
                @if(session()->has('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
                @endif
            <form action="{{route('serieInsert')}}" method="POST">
                @CSRF
                <div class="form-group">
                <input class="form-control" type="text" name="name" placeholder="Name">
                    </div>
                <div>
                <input class="form-control" type="submit" value="Dizi Ekle">
                </div>
            </form>
            </div>





@endsection
