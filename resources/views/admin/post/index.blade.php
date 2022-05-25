@extends('layouts.master')
@section('title','View Posts')
@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h4>View Posts
                <a href="{{url('admin/add_post')}}" class="btn btn-primary float-end">Add posts</a>
            </h4>
        </div>
        <div class="card-body">
            Content here
        </div>
    </div>
</div>
@endsection