@extends('layout')

@section('section')
  <section>
    <h2>Update Post</h2>
    <form action="{{ route('update', ['id' => $post->id]) }}" method="post">
      @csrf
      @method('PUT')
      <div class="input-group">
        <input
          type="text"
          name="title"
          id="title"
          value="{{ $post->title }}"
          placeholder="Post Title">
      </div>
      <div class="input-group">
        <textarea
          name="content"
          id="content"
          cols="30"
          rows="10"
          placeholder="Post Content">{{ $post->content }}</textarea>
      </div>
      <input type="submit" value="Post">
    </form>
  </section>
@endsection