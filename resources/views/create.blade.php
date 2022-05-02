@extends('layout')

@section('section')
  <section>
    <h2>Create a Post</h2>
    <form action="{{ route('store') }}" method="post">
      @csrf
      <div class="input-group">
        <input
          type="text"
          name="title"
          id="title"
          placeholder="Post Title">
      </div>
      <div class="input-group">
        <textarea
          name="content"
          id="content"
          cols="60"
          rows="5"
          placeholder="Post Content"></textarea>
      </div>
      <input type="submit" value="Post" class="btn btn-action">
    </form>
  </section>
@endsection