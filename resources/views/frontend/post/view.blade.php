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
                    <div class="card-body post-description">
                    {{ $post->description }}
        
                    </div>
                </div>

                <div class="comment-area mt-4">

                    @if(session('message'))
                       <h5 class="alert alert-warning mb-3">{{session('message')}}</h5>
                    @endif

                    <div class="card card-body">
                        <h6 class="card-title">Leave a Comment</h6>
                        <form action="{{url('comments')}}" method="POST">
                            @csrf
                            <input type="hidden" name="post_slug" value="{{$post->slug}}">
                            <textarea name="comment_body" class="form-control" rows="3" required></textarea>
                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        </form>
                    </div>
                    @forelse ($post->comments as $comment)
                    <div class="comment-container card card-body shadow-sm mt-3">
                        <div class="detail-area">
                            <h6 class="user-name mb-1">
                                @if($comment->user)
                                {{$comment->user->name}}
                                @endif
                                <small class="ms-3 text-primary">Commented on:{{$comment->created_at->format('d-m-Y')}}</small>
                            </h6>
                            <p class="user-comment mb-1">
                                {{$comment->comment_body}}
                                
                            </p>
                        </div>
                        @if(Auth::check() && Auth::id() == $comment->user_id)
                        <div>
                           <!-- <a href="" class="btn btn-primary btn-sm me-2">Edit</a>-->
                            <button type="button" value="{{$comment->id}}" class=" deleteComment btn btn-danger btn-sm me-2">
                                Delete

                            </button>
                        </div>
                        @endif
                    </div>
                    @empty
                    <div class="card card-body shadow-sm mt-3">
                    <h6>No comments yet.</h6>
                    </div>
                    @endforelse
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
 @section('scripts')
   <script>
      $(document).ready(function ()
       {
            $.ajaxSetup({
                   headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
        });


          $(document).on('click', '.deleteComment',function () 
            {
              if(confirm('Are you sure you want to delete this comment?'))
              {
                   var thisClicked = $(this);
                   var comment_id = thisClicked.val();
                  $.ajax(
                    {
                      type: "post",
                      url: "/delete-comment",
                      data: {
                              'comment_id': comment_id
                            },
                      success: function (res){
                        if(res.status == 200){
                            thisClicked.closest('.comment-container').remove();
                            alert(res.message);
                        }
                        else{
                            alert(res.message);
                        }

                       }

                   });
              }
           });
       });
  </script>
@endsection