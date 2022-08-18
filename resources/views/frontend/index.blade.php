@extends('layouts.app')
@section('title', "Programming learner")
@section('meta_description', "Programming learner")
@section('meta_keyword', "Programming learner")

@section('content')
<div class="bg-danger py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               <div class="owl-carousel category-carousel owl-theme">
                  @foreach($all_categories as $catitem)
                  <div class="item">
                    <a href="{{url('tutorial/'.$catitem->slug)}}" class="text-decoration-none">
                      <div class="card">
                         <img src="{{asset('uploads/category/'.$catitem->image)}}" alt="Image">
                         <div class="card-body text-center">
                             <h5 class="text-dark">{{$catitem->name}}</h5>
                         </div>
                     </div>
                     </a>
                  </div>
                  @endforeach
               </div>
          </div>
       </div>
   </div>
</div>
@endsection