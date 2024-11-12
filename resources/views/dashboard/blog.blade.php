@extends('dashboard.master')
@section('header')
@endsection
@section('content')
<div class="col-lg-9 col-md-8">
    <div class="mb-4">
        <h1 class="mb-0 h3">Welcome to Admin Dashboard.</h1>
    </div>

    <div class="row mb-5 g-4">

        <div class="col-lg-6 col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <span>Total Blogs</span>
                    <h3 class="mb-0 mt-4">{{count($allblogs)}}</h3>
                </div>
            </div>
        </div>

    </div>


    <div class="mb-3 d-flex">
        <h4 class="mb-0 m-2">All Blogs</h4>
        <a class='btn btn-primary btn-sm m-2' href='/admin/create-blog'>Create Blog <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                </path>
            </svg></a>

    </div>
    <div class="row g-4">
            @foreach($blogs as $blog)
            <article class="col-lg-4 col-md-6 col-12">
               <figure class="mb-4 zoom-img">
                  <a href="/blog/{{$blog->id}}/{{Str::slug($blog->title)}}">

                     <img src="{{ url('headtrax_files/public/blog_images/' . $blog->image) }}" style="height:200px;width:250px" alt="blog" class="img-fluid rounded-3">

                  </a>
               </figure>

               <a href="/blog/{{$blog->id}}/{{Str::slug($blog->title)}}" class="badge bg-primary-subtle text-primary-emphasis rounded-pill text-uppercase">{{$blog->category}}</a>
               <h3 class="my-3 lh-base h4">
                  <a href="/blog/{{$blog->id}}/{{Str::slug($blog->title)}}" class="text-reset">{{$blog->title}}</a>
               </h3>
               <p>{!! $blog->details !!}</p>
               <div class="d-flex align-items-center justify-content-between mb-3 mb-md-0">
                  <div class="d-flex align-items-center">
                     <img src='{{url("assets/images/avatar/fallback.jpg")}}' style='width:30px;height:30px;border-radius:50%' />

                     <div class="ms-2">
                        <a href="/blog/{{$blog->id}}/{{Str::slug($blog->title)}}" class="text-reset fs-6">{{$blog->user->name ?? ""}}</a>
                     </div>
                  </div>
                  <div class="ms-3"><span class="fs-6">{{Date('d-m-Y', strtotime($blog->created_at))}}</span></div>
                </div>
                <a class='btn btn-danger btn-sm' href='/admin/delete-blog/{{$blog->id}}' onclick='return confirm("Are you sure you want to delete this blog");'>Delete Blog</a>
            </article>
            @endforeach
            <div class='pagination'>
               {{ $blogs->links('pagination::bootstrap-4') }}
            </div>
         </div>

</div>

@endsection


@section('script')
@endsection