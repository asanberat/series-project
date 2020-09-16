@extends('Front.layouts.Master')
@section('title')
    Diziease
@endsection
@section('content')
    <div class="col-md-9 col-sm-3 mx-auto">
        <div align="center">
            <a href="{{route('getInsert')}}">
                <button class="btn-primary">Dizi Ekle</button>
            </a>
        </div>
        <div class="post-preview">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    serıes-menu
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <a href="{{route('actionseries')}}"><button class="dropdown-item" type="button">Action</button></a>
                    <a href="{{route('comedyseries')}}"><button class="dropdown-item" type="button">Comedies</button></a>
                    <a href="{{route('dramaseries')}}"><button class="dropdown-item" type="button">Dramas</button> </a>
                    <a href="{{route('scifiseries')}}"> <button class="dropdown-item" type="button">Sci-fi</button></a>
                </div>
            </div>
        </div>

    </div>
    <table class="table table-bordered table-dark">
        <thead>
        <h1 class="display-4">Comedy</h1>
        <tr>
            <th scope="col">#</th>

            <th scope="col">Name</th>
            <th scope="col">Season</th>
            <th scope="col">Episodes</th>
            <th scope="col">IMDB</th>
        </tr>

        </thead>
        <tbody>
        @foreach($comedies as $key)
            <tr>
                <td scope="row">{{$loop->iteration}}</td>
                <td>{{$key->name}}</td>
                <td>{{$key->season}}</td>
                <td>{{$key->episodes}}</td>
                <td>{{$key->IMDB}}</td>
                <td width="5"><a href="{{route('comedydetail')}}"><button class="btn btn-primary">Detay</button></a></td>
                <td width="5"><a href="{{route('comedyDelete',['id'=>$key->id])}}"><button class="btn btn-primary">Sil</button></a></td>

            </tr>

        @endforeach
        </tbody>
    </table>

    <!-- Pager -->





@endsection
