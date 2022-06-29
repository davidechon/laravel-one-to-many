@extends('layouts.admin')

@section('content')
<div class="container">
<form action="{{route('admin.posts.store')}}" method="POST">
  @csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}" placeholder="Inserisci titolo">
  </div>
  <div class="form-group">
    <label for="content">Content</label>
    <textarea name="content" id="content"  cols="60" rows="5">{{old('content')}}</textarea>
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" {{old('published') ? 'checked' : ''}} id="published" name="published">
    <label class="form-check-label" for="published">Pubblicato</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection