@extends('layouts.app')

@section('content')
<div class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="category-heading">
                    <h4>{{ $post->name}}</h4>
                </div>
                
                
                <div class="card card-shadow mt-4">
                    <div class="card-body">
                    {{ $post->description}}
        
                    </div>
                </div>
            </div>
               <div class="col-md-3">
                    <div class="border p-2 my-3">
                       <h3 class>Advertising area</h3>
                   </div>
                   <div class="border p-2 my-3">
                       <h3 class>Advertising area</h3>
                   </div>
                   <div class="border p-2 my-3">
                       <h3 class>Advertising area</h3>
                   </div>
               </div>
        </div>
    </div>
</div>
@endsection