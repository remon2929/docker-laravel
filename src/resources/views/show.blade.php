@extends('layout')

@section('content')
  
  <h1>{{ $shop->name }}</h1>

<div>
<p>{{ $shop->category->name }}</p>
<p>{{ $shop->address }}</p>
</div>

<iframe id='map' src='https://www.google.com/maps/embed/v1/place?key=AIzaSyA873kG21ALSv0Hk5n4AZoA5d_Vfx3yAt4&q={{ $shop->address }}'
    width='100%'
    height='320'
    frameborder='0'>
    </iframe>

    <h2>Comments</h2>
<ul>
  @foreach ($shop->comments as $comment)
  <li>{{ $comment->body }}</li>
 
  @endforeach
</ul>

    <h2>Add New Comment</h2>
<form method="post" action="{{ action('CommentsController@store', $shop->id) }}">
  {{ csrf_field() }}
  <p>
    <input type="text" name="body" placeholder="body" value="{{ old('body') }}">
    @if ($errors->has('body'))
    <span class="error">{{ $errors->first('body') }}</span>
    @endif
  </p>

  <input
        name="shop_id"
        type="hidden"
        value="{{ $shop->id }}"
    >
  <p>
    <input type="submit" value="Add Comment">
  </p>
</form>


@endsection

