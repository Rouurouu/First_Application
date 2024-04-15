<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gl2023</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script> 
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark" aria-label="Fourth navbar example">
    <div class="container py-4">
        <h2>Post details </h2>
        <div class="card mb-3">
  <img src="{{$post->image}}" class="card-img-top" alt="{{ $post ->title }}">
  <div class="card-body">
    <h5 class="card-title">{{ $post->title }}<span class="badge bg-primary">{{$post->category->name}}</span></h5>
    <h5 class="card-title"> Author :{{ $post->user->name}}</h5>
    <p class="card-text">{{ $post ->body }}</p>
    <p class="card-text"><small class="text-muted">{{ $post->created_at }}</small></p>
  </div>
</div>
    </div>
</body>
</html>
