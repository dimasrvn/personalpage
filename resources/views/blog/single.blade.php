@extends('layouts.master')

@section('title', 'Belajar Laravel')

@section('content')
  <h1>Selamat datang di single post</h1>
  <h2> {{$blog->title}} </h2>
  <p> {{$blog->description}} </p>

  {{--
  @foreach($users as $userx)
    <li>{{$userx->username}}</li>
  @endforeach

  @if(count($users) > 5)
    <p> usernya lebih dari 5 </p>
  @else
    <p> usernya tidak lebih dari 5 </p>
  @endif
  --}}
@endsection
