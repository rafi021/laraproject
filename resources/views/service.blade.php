@extends('master')

@section('content')
    @for ($index=0;$index<4;$index++)
        {{ $services[$index] }} <br>
    @endfor
@endsection
