@extends('layouts.main')
@section('contents')
<div class="container mt-5">
    <div class="row">      
        <div class="col-md-6">
         <div class="card p-3" >
             <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="..." >
             <div class="card-body">
               <h5 class="card-title">{{$post->title}}</h5>
               <small>by {{$post->author->name}} with category {{$post->category->name}} </small>            
               <p class="card-text">{{$post->body}}</p>               
             </div>
           </div>
     </div>  
    </div>
</div>  
@endsection