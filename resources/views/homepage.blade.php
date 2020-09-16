@extends('Front.layouts.Master')
@section('title')
    Diziease
@endsection
@section('content')

    <div class="col-md-9 col-sm-3 mx-auto">
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

        <!-- Pager -->





@endsection
