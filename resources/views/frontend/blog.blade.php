@extends('frontend.master')
@section('header')
@endsection

@section('content')
<main>
   <!--Square Pattern Start-->
   <div class="pattern-square"></div>
   <!--Square Pattern End-->

   <!--Pageheader start-->
   <section class="py-5 py-lg-8">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
               <div class="text-center">
                  <h1 class="mb-3">Our Blogs</h1>
                  <p class="mb-0">We write stuff from time to time that might interest you.</p>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--Pageheader end-->

   <!--Blog grid start-->
   <section class="mb-xl-9 my-4">
      <div class="container">
         <div class="row mb-5">
            <div class="col-lg-5 col-md-7 col-12">
               <div class="row g-2 g-sm-3 align-items-center">
                  <div class="col-lg-6 col-md-6 col-12">
                     <form>
                        <label for="searchInput" class="form-label visually-hidden">Search Blog</label>
                        <input type="search" class="form-control" id="searchInput" placeholder="Search Blog">
                     </form>
                  </div>
                  <div class="col-lg-6 col-md-6 col-12">
                     <label for="categoryList" class="form-label visually-hidden">Search Category</label>
                     <select class="form-select" id="categoryList">
                        <option selected="" disabled="" value="">Select Category</option>
                        <option value="Digital">Digital</option>
                        <option value="Design">Design</option>
                        <option value="Business">Business</option>
                        <option value="Startup">Startup</option>
                     </select>
                  </div>
               </div>
            </div>

         </div>
         <div class="row g-4">
            @foreach($blogs as $blog)
            <article class="col-lg-4 col-md-6 col-12">
               <figure class="mb-4 zoom-img">
                  <a href="/blog/{{$blog->id}}/{{Str::slug($blog->title)}}">

                     <img src="{{ url('blog_images/' . $blog->image) }}" style="height:200px;width:250px" alt="blog" class="img-fluid rounded-3">

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
            </article>
            @endforeach
            <div class='pagination'>
               {{ $blogs->links('pagination::bootstrap-4') }}
            </div>
         </div>
      </div>
   </section>
   <!--Blog grid end-->
</main>
@endsection


@section('script')
@endsection