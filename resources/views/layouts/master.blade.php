<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
     <!-- summernote css link -->
     <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
     
     <link href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
     <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="styleshhet">
     <style>
      .dataTables_wrapper .dataTables_paginate{
        padding: 0px !important;
        margin: 0px !important;
      }
      .form-select, .dataTable-selector {
       display: inline-block;
       width: 50%;
      }
      .post-code-bg
      {
        width: fit-content;
        min-width: 100%;
        background-color: #212121 !important;
        width: 100% !important;
        position: relative;
        padding: 1rem 1rem;
        margin-bottom: 1rem;
        border: 1px solid transparent;
        border-radius: 0.25rem;
      }
     </style>
     
</head>
<body>

   @include('layouts.include.admin_navbar')

    <div id="layoutSidenav">
      @include('layouts.include.admin_sidebar')
        <div id="layoutSidenav_content">
           <main>
               @yield('content')
          </main>
            @include('layouts.include.admin_footer')   
                    
       </div>
  </div>
       <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}" ></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" ></script>
        <script src="{{ asset('assets/js/scripts.js') }}"></script>

        <!-- summer note js link -->
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
        <script>
           $(document).ready(function() {
             $("#your_summernote").summernote({
               height:250,
             });
              $('.dropdown-toggle').dropdown();
              });
      </script>
      <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"> </script>
      <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"> </script>
      <script>
        $(document).ready( function () {
    $('#myTable').DataTable();
       } );
      </script>
      @yield('scripts')

</body>
</html>