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
                    <span>Contact Us Messages</span>
                    <h3 class="mb-0 mt-4">{{count($allcontacts)}}</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <span>Total Blogs</span>
                    <h3 class="mb-0 mt-4">{{count($allblogs)}}</h3>
                </div>
            </div>
        </div>

    </div>

    <div class="row g-4">
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body p-lg-5">
                <div class="mb-3 d-flex">
                    <h4 class="mb-0 m-2">Contact Us</h4>
                   
                    <a class='btn btn-secondary btn-sm m-2' href='/admin/contact-us'>View All <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                            </path>
                        </svg> </a>
                </div>

                <div class="accordion" id="accordionExampleOne">
                    @foreach($allcontacts as $key => $contact)
                    <div class="border mb-4 rounded-3 px-4 py-3">
                        <div class="d-flex align-items-start">
                            <div class="me-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                                    <circle cx="8" cy="8" r="8"></circle>
                                </svg>
                            </div>
                            <div class="d-lg-flex align-items-center justify-content-between w-100">
                                <div class="d-flex">
                                    <img src='{{url("assets/images/avatar/fallback.jpg")}}' style='width:50px;height:50px;border-radius:50%'/>
                                   
                                    <div class="ms-4">
                                        <h5 class="mb-0">{{$contact->first_name}} - {{$contact->last_name}}</h5>
                                        <small>{{$contact->email}}</small>
                                    </div>
                                </div>
                                <div class="mt-4 mt-lg-0">
                                    <a href="#" class="btn btn-light btn-sm" data-bs-toggle="collapse" data-bs-target="#collapseDeviceTwo{{$key}}" aria-expanded="false" aria-controls="collapseDeviceTwo{{$key}}">
                                        See More
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="collapseDeviceTwo{{$key}}" class="accordion-collapse collapse" data-bs-parent="#accordionExampleOne">
                            <div class="pt-4">
                                <div class="mb-4">
                                    <h6 class="mb-0">Details:</h6>
                                    <small>Phone : {{$contact->phone}}</small>
                                    <small>Email : {{$contact->phone}}</small>
                                </div>
                              

                                <h6 class="mb-1">Message :</h6>
                                <small>{{$contact->message}}</small>
                                <div class="mb-4">
                                    <h6 class="mb-0">Actions</h6>
                                    <a class='btn btn-primary' hrre='tel:{{$contact->phone}}'>Call</a>
                                    <a class='btn btn-info' hrre='https://wa.me/234{{substr($contact->phone,1)}}'>Message</a>
                                    <a class='btn btn-secondary' hrre='mailto:{{$contact->email}}'>Email</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="mb-3 d-flex">
        <h4 class="mb-0 m-2">Recent Blogs</h4>
        <a class='btn btn-primary btn-sm m-2' href='/admin/create-blog'>Create Blog</a>
        <a class='btn btn-secondary btn-sm m-2' href='/admin/blogs'>View Blogs <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                            </path>
                        </svg></a>
    </div>
    <div class="row g-4">
    @foreach($blogs as $blog)
        <article class="col-lg-4 col-md-6 col-12">
            <figure class="mb-4 zoom-img">
                <a href="/blog/{{$blog->id}}/{{Str::slug($blog->title)}}">
                <img src="{{ url('blog_images/' . $blog->image) }}" style="height:200px;width:250px" alt="blog" class="img-fluid rounded-3">

                </a>
            </figure>

            <a href="#!" class="badge bg-primary-subtle text-primary-emphasis rounded-pill text-uppercase">{{$blog->category}}</a>
            <h3 class="my-3 lh-base h4">
                <a href="/blog/{{$blog->id}}/{{Str::slug($blog->title)}}" class="text-reset">{{$blog->title}}</a>
            </h3>
            <p>{!! $blog->details !!}</p>
            <div class="d-flex align-items-center justify-content-between mb-3 mb-md-0">
                <div class="d-flex align-items-center">
                <img src='{{url("assets/images/avatar/fallback.jpg")}}' style='width:30px;height:30px;border-radius:50%'/>
                                    
                    <div class="ms-2">
                        <a href="#" class="text-reset fs-6">{{$blog->user->name ?? ""}}</a>
                    </div>
                </div>
                <div class="ms-3"><span class="fs-6">{{Date('d-m-Y', strtotime($blog->created_at))}}</span></div>
            </div>
        </article>
        @endforeach
     
    </div>

</div>

@endsection


@section('script')
@endsection