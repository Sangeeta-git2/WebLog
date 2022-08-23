@extends('layouts.app')
@section('title', "Programming learners")
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
<div class="py-1 bg-gray">
    <div class="container">
        <div class="border p-3 text-center">
            <h3>Advertise Here</h3>
        </div>
    </div>
</div>
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Programming Learners</h4>
                <div class="underline"></div>
                    <p> ipsum dolor sit amet consectetur adipisicing elit.
                     Cumque dolor itaque recusandae vel eligendi voluptate delectus at harum 
                     asperiores quod hic nisi rerum aperiam sint non illo, sapiente officiis tenetur.ipsum dolor sit amet consectetur adipisicing elit.
                     Cumque dolor itaque recusandae vel eligendi voluptate delectus at harum 
                     asperiores quod hic nisi rerum aperiam sint non illo, sapiente officiis tenetur.ipsum dolor sit amet consectetur adipisicing elit.
                     Cumque dolor itaque recusandae vel eligendi voluptate delectus at harum 
                     asperiores quod hic nisi rerum aperiam sint non illo, sapiente officiis tenetur.</p>
                
            </div>
        </div>
    </div>
</div>

<div class="py-5 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>All Categories</h4>
                <div class="underline"></div>
            </div>
            @foreach($all_categories as $catitem)
            <div class="col-md-3">
                    <div class="card card-body mb-3">
                        <a href="{{url('tutorial/'.$catitem->slug)}}" class="text-decoration-none">
                        <h5 class="text-dark mb-0">{{$catitem->name}}</h5>
                        </a>
                    </div>
                    </div>
                    @endforeach
        </div>
    </div>
</div>

<div class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Latest Posts</h4>
                <div class="underline"></div>
            </div>
            <div class="col-md-8">
                @foreach($latest_posts as $item)

                    <div class="card card-body mb-3 bg-gray shadow">
                        <a href="{{url('tutorial/'.$item->category->slug.'/'.$item->slug)}}" class="text-decoration-none">
                        <h5 class="text-dark mb-0">{{$item->name}}</h5>
                        </a>
                        <h6>Posted On:{{$item->created_at->format('d-m-Y')}}</h6>
                        <h6>Posted By:{{$item->user->name}}</h6>
                    </div>
               @endforeach
           </div>
                   
                <div class="col-md-4">
                <div class="border p-3 text-center">
            <h3>Advertise Here</h3>
        </div>
                </div>
      </div>
            
    </div>
</div>

@endsection