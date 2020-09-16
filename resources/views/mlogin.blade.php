@extends('Front.layouts.Master')
@section('title')
    Diziease
@endsection
@section('content')


    <form action="{{route('mlogincheck')}}" method="POST">
        @csrf
        <input type="text" name="email">
        <input type="text" name="password">
        <input type="submit" value="giriş yap">
    </form>






@endsection
