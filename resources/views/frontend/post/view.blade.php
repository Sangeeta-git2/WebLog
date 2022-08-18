@extends('layouts.app')
@section('title', "$post->meta_title")
@section('meta_description', "$post->meta_description")
@section('meta_keyword', "$post->meta_keyword")

@section('content')
<div class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="category-heading">
                    <h4>{{ $post->name}}</h4>
                </div>
                
                
                <div class="card card-shadow mt-4">
                    <div class="card-body">
                    {{ $post->description }}
        
                    </div>
                </div>
            </div>
               <div class="col-md-4">
                    <div class="border p-2 my-3">
                       <h3 class>Advertising area</h3>
                   </div>
                   <div class="border p-2 my-3">
                       <h3 class>Advertising area</h3>
                   </div>
                   <div class="border p-2 my-3">
                       <h3 class>Advertising area</h3>
                   </div>
                   <div class="card mt-3">
                    <div class="card-header">
                        <h3>Latest Posts</h3>
                    </div>
                    <div class="card-body">
                        @foreach($latest_posts as $item)

                        
                        <a href="{{url('tutorial/'.$item->category->slug.'/'.$item->slug)}}" class="text-decoration-none">
                            <h5> > {{$item->name}}</h5>
                        </a>
                        @endforeach
                    </div>
                   </div>
               </div>
        </div>
    </div>
</div>
@endsection