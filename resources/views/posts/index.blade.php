@extends('layouts.app')

@section('title', 'Все посты')

@section('content')
<a href="{{ route('posts.create') }}" class="btn btn-success">Создать пост</a>

 @if(session()->get('success'))
    <div class="alert alert-success mt-3">
      {{ session()->get('success') }}  
    </div>
@endif

<table class="table table-striped mt-3">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Название</th>
      <th scope="col">Описание</th>
      <th scope="col">Цена</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
   @foreach($posts as $post)
    <tr>
      <th scope="row">{{ $post->id }}</th>
      <td>{{ $post->title }}</td>
      <td>{{ $post->description }}</td>
      <td>{{ $post->price }}$</td>
      <td class="table-buttons">
        <a href="{{ route('posts.show', $post) }}" class="btn btn-success">
          <i class="fa fa-eye"></i>
        </a>
        <a href="{{ route('posts.edit', $post) }}" class="btn btn-primary">
          <i class="fa fa-pencil" ></i>
        </a>
        <form method="POST" action="{{ route('posts.destroy', $post) }}">
         @csrf
         @method('DELETE')
            <button type="submit" class="btn btn-danger">
              <i class="fa fa-trash"></i>
            </button>
        </form>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection