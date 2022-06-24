@extends('master')

@section('content')
    @for ($index=0;$index<count($services);$index++)
        {{ $services[$index] }} <br>
    @endfor
@endsection
