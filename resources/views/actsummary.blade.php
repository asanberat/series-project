@extends('Front.layouts.Master')
@section('title')
    Diziease
@endsection
@section('content')


    <tbody>
        @foreach($actions as $key)
        <tr>
            <h1>{{$key->name}}</h1>
            <p class="user-select-all">{{$key->summary}}</p>



        </tr>

        @endforeach
        </tbody>
    </table>

        <!-- Pager -->





@endsection
