@extends('layouts.master')
@section('title','Category')
@section('content')

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="{{url('admin/delete_category')}}" method="POST">
            @csrf
            
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Category with Its Posts</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="category_delete_id" id="category_id">
        <h4>Are you sure you want to delete this category with its all post.?</h4>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger">Yes Delete</button>
      </div>
      </form>
    </div>
  </div>
</div>


<div class="container-fluid px-4">
   <div class="card mt-4">
       <div class="card-header">
           <h4>View Category <a href="{{url('admin/add_category')}}" class="btn btn-sm float-end">Add Category</a>
        </h4>
       </div>
       <div class="card-body">
           @if (session('message'))
           <div class="alert alert-success">{{session('message')}}</div>
           @endif
           <div class="table-responsive">
               <table id="myTable" class="table table-bordered">
               <thead>
                   <tr>
                       <th>ID</th>
                       <th>Category Name</th>
                       <th>Image</th>
                       <th>Status</th>
                       <th>Edit</th>
                       <th>Delete</th>
                   </tr>
               </thead>
               <tbody>
                   @foreach($category as $item)
                   <tr>
                       <td>{{$item->id}}</td>
                       <td>{{$item->name}}</td>
                       <td>
                           <img src="{{asset('uploads/category/' .$item->image)}}" width="50px" height="50px" alt="image"
                       </td>
                       <td>{{$item->status=='1' ? 'Hidden':'Shown' }}</td>
                       <td>
                           <a href="{{url('admin/edit_category/'.$item->id)}}" class="btn btn-success">Edit</a>
                       </td>
                       <td>
                      <!-- <a href="{{url('admin/delete_category/'.$item->id)}}" class="btn btn-danger">Delete</a>-->
                      <button class="btn btn-danger deleteCategoryBtn" value="{{$item->id}}" type="button">Delete</button>
                       </td>
                   </tr>
                   @endforeach
               </tbody>

               </table>
           </div>
       </div>
        
    </div>
                        
                    
</div>
@endsection
@section('scripts')
<script>
    $(document).ready(function(){
            $(document).on('click', '.deleteCategoryBtn', function (e){


            e.preventDefault();
            var category_id = $(this).val();
            $('#category_id').val(category_id);
            $('#deleteModal').modal('show');
        })

    });
</script>
@endsection