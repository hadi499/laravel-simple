@extends('layouts.main')

@section('contents')
<div class="container mt-4">
    <div class="row d-flex justify-content-center ">
        <div class="col-md-6">
            <h1>Form Edit</h1>
            <form action="/post/edit/{{$post->id}}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control @error('title')is-invalid @enderror" id="title" name="title" value="{{$post->title}}" autofocus>   
                  @error('title')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>                        
                  @enderror       
                </div>
               
                <div class="mb-3">
                  <label for="category" class="form-label">Category</label>
                  <select class="form-select" name="category_id">
                    @foreach ($categories as $category)
                    @if (old('category_id', $post->category_id)  == $category->id)
                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>   
                    @else
                    <option value="{{ $category->id }}">{{ $category->name }}</option>                   
                    @endif                       
                   @endforeach
                  </select>         
                </div>
                <div class="mb-3">
                  <label for="image" class="form-label @error('image')is-invalid @enderror">Post Image</label>                
                  <input class="form-control" type="file" id="image" name="image">
                  @error('image')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>                        
                @enderror 
                </div>
                <div class="mb-3">
                  <label for="body" class="form-label ">Body</label>
                  <textarea class="form-control" name="body" id="body" style="height: 100px"  value="{{ $post->body }}">{{ $post->body }}</textarea>
                  @error('body')
                    <p class="text-danger">
                      {{ $message }}
                    </p>                                 
                  @enderror        
                </div>        
                <button type="submit" class="btn btn-primary mb-5">Edit</button>
              </form>
          </div>
    </div>
</div>


 


    
@endsection