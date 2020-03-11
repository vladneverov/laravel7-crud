@extends('layouts.app')

@section('title', $post->title)

@section('content')
<div class="card">
    <div class="card-body">
       <h3>{{ $post->title }}</h3>
       <p>{{ $post->description }}</p>
       <p><b>{{ $post->price }}$</b></p>
    </div>
</div>
@endsection