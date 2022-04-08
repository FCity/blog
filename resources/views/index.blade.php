@extends('layout')

@section('section')
  <section id="posts">
    <h2>Posts</h2>
    @foreach ($posts as $post)
      <div class="post">
        <h3 class="post-title">{{ $post->title }}</h3>
        <p class="post-content">{{ $post->content }}</p>
        <div class="actions">
          <a class="btn btn-action" href="{{ route('edit', ['id' => $post->id]) }}">Update</a>
          <form action="{{ route('destroy', ['id' => $post->id]) }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete" class="btn btn-action">
          </form>
        </div>
      </div>
    @endforeach
  </section>
@endsection