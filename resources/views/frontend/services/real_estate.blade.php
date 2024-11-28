@extends('frontend.master')
@section('header')
@endsection

@section('content')
<main>
      <div class="pattern-square"></div>

      <!--Blog single start-->
      <div class="py-xl-9 py-4">
         <div class="container">
            <div class="row">
               <article class="col-lg-8 offset-lg-2">
               <h1>Real Estate</h1>
                 

                  <figure class="my-6">
                     <img  src="{{url('assets/images/service/service-img-wide-4.jpg')}}" alt="blog" class="rounded-3 img-fluid w-100">
                  </figure>
                  <h3>Simplifying Property Interactions with AI</h3>
                  <p>
                  Streamline your real estate operations with AI-powered communication platforms. From automated property inquiries to appointment scheduling, HeadTrax ensures smooth, efficient communication for buyers, sellers, and agents alike.  
                </p>
                 </article>
            </div>
         </div>
      </div>
      <!--Blog single end-->

      <!--Newsletter start-->

      <section class="my-xl-9 my-2">
        <div class="container" data-cue="fadeIn" data-show="true" style="animation-name: fadeIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
            <div class="row">
                <div class="col-xl-8 offset-xl-2">
                    <div class="text-center mb-xl-7 mb-5">
                        <h2 class="mb-3 mt-4">
                           Key Features
                        </h2>
                      </div>
                </div>
            </div>
            <div class="table-responsive-lg">
                <div class="row flex-nowrap pb-4 pb-lg-0 me-5 me-lg-0">
                    <div class="col-lg-4 col-md-6" data-cue="zoomIn" data-show="true" style="animation-name: zoomIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                        <div class="card border-0 card-primary">
                            <div class="card-body p-5">
                               
                                <div class="mb-5">
                                    <h4 class="card-title">Streamline Property Inquiries</h4>
                                    <p class="mb-0 card-text">Eliminate bottlenecks in property inquiries with AI-powered communication. HeadTrax enables potential buyers or renters to ask questions, get instant responses, and receive detailed property information—all in one seamless interaction.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-cue="zoomIn" data-show="true" style="animation-name: zoomIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 200ms; animation-direction: normal; animation-fill-mode: both;">
                        <div class="card border-0 card-primary">
                            <div class="card-body p-5">
                              
                                <div class="mb-5">
                                    <h4 class="card-title">Automated Scheduling for Property Tours.</h4>
                                    <p class="mb-0 card-text">Simplify the process of booking property tours. HeadTrax ensures that clients can schedule viewings in real time, reducing the need for back-and-forth communication and enhancing their overall experience.</p>
                                </div>

                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-cue="zoomIn" data-show="true" style="animation-name: zoomIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 400ms; animation-direction: normal; animation-fill-mode: both;">
                        <div class="card border-0 card-primary">
                            <div class="card-body p-5">
                               
                                <div class="mb-5">
                                    <h4 class="card-title">Lead Nurturing Through Smart Follow-Ups.</h4>
                                    <p class="mb-0 card-text">Never miss an opportunity. Our conversational AI tools send automated follow-ups to nurture leads, keeping prospects engaged and moving them through the sales funnel effectively.</p>
                                </div>

                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
        </div>
    </section>


    <section class="py-xl-9 py-5 bg-primary">
        <div class="container" data-cue="fadeIn" data-show="true" style="animation-name: fadeIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-12">
                    <div class="text-center mb-xl-7 mb-5">
                        <h2 class="text-white-stable mb-3">Why Choose Us?</h2>
                        <!-- <p class="mb-0 text-white-50">
                                We do this and that...
                            </p> -->
                    </div>
                </div>
            </div>
            <div class="row mb-7 pb-4 g-5 text-center text-lg-start">
                <div class="col-md-4" data-cue="fadeIn" data-show="true" style="animation-name: fadeIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                    <h4 class="text-white-stable">Seamless Inquiry Handling</h4>
                    <p class="text-white-50 mb-0">Answer customer queries 24/7 without overwhelming your team.</p>
                </div>
                <div class="col-md-4" data-cue="fadeIn" data-show="true" style="animation-name: fadeIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 200ms; animation-direction: normal; animation-fill-mode: both;">
                    <h4 class="text-white-stable">Faster Tour Bookings</h4>
                    <p class="text-white-50 mb-0">Allow potential buyers to self-schedule tours at their convenience, saving time.</p>
                </div>
                <div class="col-md-4" data-cue="fadeIn" data-show="true" style="animation-name: fadeIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 400ms; animation-direction: normal; animation-fill-mode: both;">
                    <h4 class="text-white-stable">Improved Lead Conversion</h4>
                    <p class="text-white-50 mb-0">AI ensures no lead goes cold by automating timely follow-ups.</p>
                </div>
                <div class="col-md-4" data-cue="fadeIn" data-show="true" style="animation-name: fadeIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 400ms; animation-direction: normal; animation-fill-mode: both;">
                    <h4 class="text-white-stable">Tailored Property Recommendations</h4>
                    <p class="text-white-50 mb-0">Suggest properties based on preferences, increasing customer satisfaction.</p>
                </div>
                <div class="col-md-4" data-cue="fadeIn" data-show="true" style="animation-name: fadeIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 400ms; animation-direction: normal; animation-fill-mode: both;">
                    <h4 class="text-white-stable">Time-Efficient Operations</h4>
                    <p class="text-white-50 mb-0">Automate repetitive tasks, freeing up agents to focus on closing deals.</p>
                </div>
            </div>
          
        </div>
    </section>
      <section class="mb-7">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 offset-lg-2">
                  <div class="bg-primary bg-opacity-10 px-5 pt-5 pb-7 mb-2 rounded-3 text-center">
                     <div class="icon-shape bg-primary bg-opacity-10 icon-xl rounded-circle mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-envelope-check text-primary" viewBox="0 0 16 16">
                           <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z"></path>
                           <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686Z"></path>
                        </svg>
                     </div>
                     <div class="mb-4">
                        <h3>Subscribe to our newsletter</h3>
                        <p class="mb-0 mx-md-7 px-md-4">Let's notify you if there is a new blog post or any relevant updates from us.</p>
                     </div>
                     <form class="row g-3 needs-validation d-flex mx-md-7 px-md-4">
                        <div class="col-md-7 col-xl-8 col-12">
                           <label for="subscribeEmail" class="form-label visually-hidden">Email</label>

                           <input type="email" class="form-control" id="subscribeEmail" placeholder="Enter your email address" aria-label="Enter your business email" required="">
                        </div>
                        <div class="col-md-5 col-xl-4 col-12">
                           <div class="d-grid">
                              <button class="btn btn-primary shadow-sm" type="submit">Subscribe</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Newsletter end-->
   </main>
@endsection


@section('script')
@endsection