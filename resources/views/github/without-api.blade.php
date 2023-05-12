@extends('layouts.app')
@section('content')
    @foreach ($response as $response )
    {{-- https://api.github.com/users/ajitirto/repos getApi from getBody --}}
    <p>{{$response->getBody}}</p>
    <p>test halaman</p>   
    @endforeach
@endsection