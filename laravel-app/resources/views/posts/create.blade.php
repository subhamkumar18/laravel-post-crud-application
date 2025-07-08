@extends('layouts.app')

@section('content')
    <h2>Create Post</h2>
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        @include('posts.form')
    </form>
@endsection
