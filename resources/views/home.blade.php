@extends('layouts.main')
@section('contents')
<div class="container mt-5">
    <div class="row">
        <div>
            <h1>Welcome, {{ auth()->user()->name }}</h1>
        </div>
        
        @foreach ($posts as $post)
        <div class="col-sm-12 col-md-6 col-lg-4">
         <div class="card p-3" >

             <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="..." >
             <div class="card-body">
               <h5 class="card-title">{{$post->title}}</h5>
               <small>by {{$post->author->name}} with category {{$post->category->name}} </small>
            
               <p class="card-text">{{$post->excerpt}}</p>
               <a href="/post/{{$post->id}}">detail</a>
               <a href="/post/edit/{{$post->id}}" style="margin-left:20px;">edit</a>
               <form action="/post/{{ $post->id }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger"  onclick="return confirm('Are you sure ?')">delete</button>
                </form>
               
             </div>
           </div>
     </div>
        @endforeach
    </div>
</div>

  
@endsection