@extends('layouts.app')

@section('content')
    <h2>Edit Post</h2>
    <form method="POST" action="{{ route('posts.update', $post) }}">
        @csrf
        @method('PUT')
        @include('posts.form')
    </form>
@endsection
