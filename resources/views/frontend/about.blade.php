@extends('frontend.master')
@section('header')
@endsection

@section('content')

<main>
      <div class="pattern-square"></div>
      <!--Who we are start-->
      <section class="mb-7 py-xl-9 py-5">
         <div class="container pb-xl-9 pb-5">
            <div class="row align-items-center g-4">
               <div class="col-lg-6 col-md-12">
                  <div class="me-xl-8">
                     <h1 class="mb-3">Who are we?</h1>
                      <p class="mb-6 me-xl-6">
                     At Headtrax Solutions Limited, we are dedicated to empowering businesses by providing seamless, localized, and tailored communication solutions. Our services are designed to enhance customer engagement, satisfaction, and loyalty, helping businesses grow and succeed in the Nigerian market.
                     </p>
                    
                  </div>
               </div>
               <div class="col-lg-6 col-md-12">
                  <figure>
                     <img src="assets/images/hero2.jpeg" alt="career" class="img-fluid rounded-3">
                  </figure>
               </div>
            </div>
         </div>
       
      </section>
      <!--Who we are end-->

      <!--Forword together start-->
      <section class="my-lg-9 my-5">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                  <div class="text-center mb-xl-7 mb-5">
                     <h2 class="mb-0">Why Choose Us?</h2>
                  </div>
               </div>
            </div>
            <div class="row g-lg-7 gy-5">
               <div class="col-lg-4 col-md-4">
                  <div class="mb-5">
                     <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-rocket-takeoff text-primary" viewBox="0 0 16 16">
                        <path d="M9.752 6.193c.599.6 1.73.437 2.528-.362.798-.799.96-1.932.362-2.531-.599-.6-1.73-.438-2.528.361-.798.8-.96 1.933-.362 2.532Z"></path>
                        <path d="M15.811 3.312c-.363 1.534-1.334 3.626-3.64 6.218l-.24 2.408a2.56 2.56 0 0 1-.732 1.526L8.817 15.85a.51.51 0 0 1-.867-.434l.27-1.899c.04-.28-.013-.593-.131-.956a9.42 9.42 0 0 0-.249-.657l-.082-.202c-.815-.197-1.578-.662-2.191-1.277-.614-.615-1.079-1.379-1.275-2.195l-.203-.083a9.556 9.556 0 0 0-.655-.248c-.363-.119-.675-.172-.955-.132l-1.896.27A.51.51 0 0 1 .15 7.17l2.382-2.386c.41-.41.947-.67 1.524-.734h.006l2.4-.238C9.005 1.55 11.087.582 12.623.208c.89-.217 1.59-.232 2.08-.188.244.023.435.06.57.093.067.017.12.033.16.045.184.06.279.13.351.295l.029.073a3.475 3.475 0 0 1 .157.721c.055.485.051 1.178-.159 2.065Zm-4.828 7.475.04-.04-.107 1.081a1.536 1.536 0 0 1-.44.913l-1.298 1.3.054-.38c.072-.506-.034-.993-.172-1.418a8.548 8.548 0 0 0-.164-.45c.738-.065 1.462-.38 2.087-1.006ZM5.205 5c-.625.626-.94 1.351-1.004 2.09a8.497 8.497 0 0 0-.45-.164c-.424-.138-.91-.244-1.416-.172l-.38.054 1.3-1.3c.245-.246.566-.401.91-.44l1.08-.107-.04.039Zm9.406-3.961c-.38-.034-.967-.027-1.746.163-1.558.38-3.917 1.496-6.937 4.521-.62.62-.799 1.34-.687 2.051.107.676.483 1.362 1.048 1.928.564.565 1.25.941 1.924 1.049.71.112 1.429-.067 2.048-.688 3.079-3.083 4.192-5.444 4.556-6.987.183-.771.18-1.345.138-1.713a2.835 2.835 0 0 0-.045-.283 3.078 3.078 0 0 0-.3-.041Z"></path>
                        <path d="M7.009 12.139a7.632 7.632 0 0 1-1.804-1.352A7.568 7.568 0 0 1 3.794 8.86c-1.102.992-1.965 5.054-1.839 5.18.125.126 3.936-.896 5.054-1.902Z"></path>
                     </svg>
                  </div>

                  <h4>Seamless No-Code Integration</h4>
                  <p class="mb-0">Get started quickly with our easy-to-integrate solutions that require no complex setups.</p>
               </div>
               <div class="col-lg-4 col-md-4">
                  <div class="mb-5">
                     <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-gem text-primary" viewBox="0 0 16 16">
                        <path d="M3.1.7a.5.5 0 0 1 .4-.2h9a.5.5 0 0 1 .4.2l2.976 3.974c.149.185.156.45.01.644L8.4 15.3a.5.5 0 0 1-.8 0L.1 5.3a.5.5 0 0 1 0-.6l3-4zm11.386 3.785-1.806-2.41-.776 2.413 2.582-.003zm-3.633.004.961-2.989H4.186l.963 2.995 5.704-.006zM5.47 5.495 8 13.366l2.532-7.876-5.062.005zm-1.371-.999-.78-2.422-1.818 2.425 2.598-.003zM1.499 5.5l5.113 6.817-2.192-6.82L1.5 5.5zm7.889 6.817 5.123-6.83-2.928.002-2.195 6.828z"></path>
                     </svg>
                  </div>

                  <h4>Multi-Language Support</h4>
                  <p class="mb-0">Communicate with customers in their preferred language, enhancing clarity and connection.</p>
               </div>
               <div class="col-lg-4 col-md-4">
                  <div class="mb-5">
                     <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-bullseye text-primary" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                        <path d="M8 13A5 5 0 1 1 8 3a5 5 0 0 1 0 10zm0 1A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
                        <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8z"></path>
                        <path d="M9.5 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path>
                     </svg>
                  </div>

                  <h4>Affordable Solutions</h4>
                  <p class="mb-0">Designed to suit the needs and budgets of small to large businesses, with flexible plans.</p>
               </div>
            </div>
         </div>
      </section>
      <!--Forword together end-->

      <!--Team member start-->
      <section class="py-lg-9 py-5 bg-primary">
         <div class="container">
            <div class="row g-5">
               <div class="col-md-3 col-6">
                  <div class="text-center">
                     <h2 class="text-white-stable">2018</h2>
                     <h5 class="text-white-stable mb-0">Founded</h5>
                  </div>
               </div>
               <div class="col-md-3 col-6">
                  <div class="text-center">
                     <h2 class="text-white-stable">425+</h2>
                     <h5 class="text-white-stable mb-0">Companies</h5>
                  </div>
               </div>
               <div class="col-md-3 col-6">
                  <div class="text-center">
                     <h2 class="text-white-stable">55+</h2>
                     <h5 class="text-white-stable mb-0">Team Members</h5>
                  </div>
               </div>
               <div class="col-md-3 col-6">
                  <div class="text-center">
                     <h2 class="text-white-stable">4.9</h2>
                     <h5 class="text-white-stable mb-0">Service Rating</h5>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Team member end-->

      <!--Success stories-->
      <section class="py-xl-9 py-5 bg-gray-100">
        <div class="container" data-cue="fadeIn">

            <div class="row">
                <div class="tab-content border mt-3 p-3 rounded-3" id="pills-tabTwoContent">
                    <div class="tab-pane tab-example-preview fade show active" id="pills-testmonial-one-preview" role="tabpanel" aria-labelledby="pills-testmonial-one-preview-tab">
                        <!--success stories-->
                        <section class="py-xl-9 py-5 bg-light">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-8 offset-xl-2 col-md-8 offset-md-2">
                                        <div class="text-center mx-xl-7 mb-5">
                                            <h2 class="mb-3">Read the real-life success stories of the companies and industries.</h2>
                                            <a href="#!" class="icon-link icon-link-hover fw-semicold">
                                                Browse all customer stories
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive-lg">
                                    <div class="row flex-nowrap pb-5 me-5 me-lg-0">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="card shadow-sm h-100">
                                                <div class="card-body p-lg-5">
                                                    <figure class="mb-5">
                                                        <img src="../assets/images/client-logo/clients-logo-2.svg" alt="logo">
                                                    </figure>
                                                    <p class="mb-0">
                                                        “The team at Headtrax Solutions made integration effortless. Their platform has streamlined our processes and allowed us to focus on core business tasks. Highly recommended!”
                                                    </p>
                                                    <div class="mt-4">
                                                        <h5 class="mb-0">Fasanya Oluwapelumi</h5>
                                                        <small>Content Producer</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="card shadow-sm h-100">
                                                <div class="card-body p-lg-5">
                                                    <figure class="mb-5">
                                                        <img src="../assets/images/client-logo/clients-logo-1.svg" alt="logo">
                                                    </figure>
                                                    <p class="mb-0">
                                                        “The language options are perfect for reaching our diverse client base. Headtrax Solutions has been a game-changer for our customer engagement strategies”
                                                    </p>
                                                    <div class="mt-4">
                                                        <h5 class="mb-0">Awe Alexander</h5>
                                                        <small>Social Media Manager</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="card shadow-sm h-100">
                                                <div class="card-body p-lg-5">
                                                    <figure class="mb-5">
                                                        <img src="../assets/images/client-logo/clients-logo-3.svg" alt="logo">
                                                    </figure>
                                                    <p class="mb-0">
                                                        “Headtrax Solutions transformed our communication approach. Their platform is robust, easy to use, and has significantly increased our operational efficiency.”
                                                    </p>
                                                    <div class="mt-4">
                                                        <h5 class="mb-0">Soleye Alexander</h5>
                                                        <small>Senior Research Program Manager</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--success stories-->
                    </div>
                    <div class="tab-pane tab-example-code fade" id="pills-testmonial-one-code" role="tabpanel" aria-labelledby="pills-testmonial-one-code-tab">
                        <div class="code-toolbar">
                            <pre class="language-markup" tabindex="0"><code class="language-markup"><span class="token comment">&lt;!--success stories--&gt;</span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>section</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>py-xl-9 py-5 bg-light<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>container<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>row<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>col-xl-8 offset-xl-2 col-md-8 offset-md-2<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>text-center mx-xl-7 mb-5<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>h2</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>mb-3<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Read the real-life success stories of
                        the companies and industries.<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>h2</span><span class="token punctuation">&gt;</span></span>
                    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>a</span> <span class="token attr-name">href</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>#!<span class="token punctuation">"</span></span>
                        <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>icon-link icon-link-hover fw-semicold<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                        Browse all customer stories
                        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>svg</span> <span class="token attr-name">xmlns</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>http://www.w3.org/2000/svg<span class="token punctuation">"</span></span> <span class="token attr-name">width</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>14<span class="token punctuation">"</span></span>
                            <span class="token attr-name">height</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>14<span class="token punctuation">"</span></span> <span class="token attr-name">fill</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>currentColor<span class="token punctuation">"</span></span>
                            <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>bi bi-arrow-right<span class="token punctuation">"</span></span> <span class="token attr-name">viewBox</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>0 0 16 16<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>path</span> <span class="token attr-name">fill-rule</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>evenodd<span class="token punctuation">"</span></span>
                                <span class="token attr-name">d</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>path</span><span class="token punctuation">&gt;</span></span>
                        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>svg</span><span class="token punctuation">&gt;</span></span>
                    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>a</span><span class="token punctuation">&gt;</span></span>
                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>table-responsive-lg<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>row flex-nowrap pb-5 me-5 me-lg-0<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>col-lg-4 col-md-6<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>card shadow-sm h-100<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>card-body p-lg-5<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>figure</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>mb-5<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>img</span> <span class="token attr-name">src</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>../assets/images/client-logo/clients-logo-2.svg<span class="token punctuation">"</span></span>
                                    <span class="token attr-name">alt</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>logo<span class="token punctuation">"</span></span> <span class="token punctuation">/&gt;</span></span>
                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>figure</span><span class="token punctuation">&gt;</span></span>
                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>p</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>mb-0<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                                “Lorem ipsum dolor sit amet cons ectetur
                                adipiscing elit uisque sagittis risus sed
                                dolor lobortis, non rutrum massa ultricies
                                aecenas tempor, nisi nec
                                tempus lobortis”
                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>p</span><span class="token punctuation">&gt;</span></span>
                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>mt-4<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>h5</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>mb-0<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Anita parmar<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>h5</span><span class="token punctuation">&gt;</span></span>
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>small</span><span class="token punctuation">&gt;</span></span>Content Producer<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>small</span><span class="token punctuation">&gt;</span></span>
                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
                        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
                    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>col-lg-4 col-md-6<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>card shadow-sm h-100<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>card-body p-lg-5<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>figure</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>mb-5<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>img</span> <span class="token attr-name">src</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>../assets/images/client-logo/clients-logo-1.svg<span class="token punctuation">"</span></span>
                                    <span class="token attr-name">alt</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>logo<span class="token punctuation">"</span></span> <span class="token punctuation">/&gt;</span></span>
                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>figure</span><span class="token punctuation">&gt;</span></span>
                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>p</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>mb-0<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                                “Aenean pharetra finibus mauris a porttitor.
                                Nam dui tortor, finibus sit amet feugiat
                                porta, tempus in odio. Interdum et malesuada
                                fames ac ante ipsum
                                primis in faucibus.”
                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>p</span><span class="token punctuation">&gt;</span></span>
                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>mt-4<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>h5</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>mb-0<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Jitu Chauhan<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>h5</span><span class="token punctuation">&gt;</span></span>
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>small</span><span class="token punctuation">&gt;</span></span>Studio Manager<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>small</span><span class="token punctuation">&gt;</span></span>
                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
                        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
                    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>col-lg-4 col-md-6<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>card shadow-sm h-100<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>card-body p-lg-5<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>figure</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>mb-5<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>img</span> <span class="token attr-name">src</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>../assets/images/client-logo/clients-logo-3.svg<span class="token punctuation">"</span></span>
                                    <span class="token attr-name">alt</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>logo<span class="token punctuation">"</span></span> <span class="token punctuation">/&gt;</span></span>
                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>figure</span><span class="token punctuation">&gt;</span></span>
                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>p</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>mb-0<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>“Pellentesque sit amet turpis
                                porta augue pretium dictum. Pellentesque
                                commodo bitur ut massa cursus, congue augue
                                vitae, efficitur metus.”<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>p</span><span class="token punctuation">&gt;</span></span>
                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>mt-4<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>h5</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>mb-0<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Sandip Chauhan<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>h5</span><span class="token punctuation">&gt;</span></span>
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>small</span><span class="token punctuation">&gt;</span></span>Senior Research Program
                                    Manager<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>small</span><span class="token punctuation">&gt;</span></span>
                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
                        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
                    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>section</span><span class="token punctuation">&gt;</span></span>
<span class="token comment">&lt;!--success stories--&gt;</span></code></pre>
                            <div class="toolbar">
                                <div class="toolbar-item"><button class="copy-to-clipboard-button" type="button" data-copy-state="copy"><span>Copy</span></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
      <!--Success stories-->

      <!--Save your time start-->
       <section class="my-lg-9 my-5">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 offset-lg-2 col-md-12">
                  <div class="text-center mb-xl-7 mb-5 mx-xl-8">
                     <h2 class="mb-0">Our team.</h2>
                  </div>
               </div>
            </div>
            <div class="row g-5">
               <div class="col-lg-3 col-md-6">
                  <div class="card text-center card-lift">
                     <div class="card-body py-5">
                        <figure class="mb-4">
                           <img src="assets/images/team/team-img-4.jpg" alt="avatar" class="avatar avatar-xxl rounded-circle">
                        </figure>

                        <h5 class="mb-1">Mr David Sean</h5>
                        <small>Founder &amp; CEO</small>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="card text-center card-lift">
                     <div class="card-body py-5">
                        <figure class="mb-4">
                           <img src="assets/images/team/team-img-4.jpg" alt="avatar" class="avatar avatar-xxl rounded-circle">
                        </figure>

                        <h5 class="mb-1">Awe Alexander</h5>
                        <small>Project Manager</small>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="card text-center card-lift">
                     <div class="card-body py-5">
                        <figure class="mb-4">
                           <img src="assets/images/team/team-img-4.jpg" alt="avatar" class="avatar avatar-xxl rounded-circle">
                        </figure>

                        <h5 class="mb-1">Charles Adeoluwa</h5>
                        <small>Customer Support</small>
                     </div>
                  </div>
               </div>
             
               <div class="col-lg-3 col-md-6">
                  <div class="card text-center card-lift">
                     <div class="card-body py-5">
                        <figure class="mb-4">
                           <img src="assets/images/avatar/fallback.jpg" alt="avatar" class="avatar avatar-xxl rounded-circle">
                        </figure>

                        <h5 class="mb-1">Your Pic</h5>
                        <a href="#" class="icon-link icon-link-hover fw-semicold">
                           Join the team
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                              </path>
                           </svg>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section> 
      <!--Save your time end-->

      <!--Our awards start-->
      <!-- <section class="my-lg-9 my-5">
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <div class="mb-xl-7 mb-5">
                     <h2 class="mb-3">Our awards</h2>
                     <p class="mb-0">We're grateful to have won a few awards along the way. Thank you to our community
                        for always pushing us to do better and build bigger.</p>
                  </div>
               </div>
            </div>
            <div class="row g-6">
               <div class="col-lg-3 col-md-6 col-12">
                  <figure class="text-center">
                     <img src="assets/images/award-logo/award-logo-1.svg" alt="logo" class="">
                  </figure>
               </div>
               <div class="col-lg-3 col-md-6 col-12">
                  <figure class="text-center">
                     <img src="assets/images/award-logo/award-logo-2.svg" alt="logo" class="">
                  </figure>
               </div>
               <div class="col-lg-3 col-md-6 col-12">
                  <figure class="text-center">
                     <img src="assets/images/award-logo/award-logo-4.svg" alt="logo" class="">
                  </figure>
               </div>
               <div class="col-lg-3 col-md-6 col-12">
                  <figure class="text-center">
                     <img src="assets/images/award-logo/award-logo-3.svg" alt="logo" class="">
                  </figure>
               </div>
            </div>
         </div>
      </section> -->
      <!--Our awards start-->

      <!--Speak with expert start-->
      <section class="my-9">
         <div class="container">
            <div class="row line-pattern bg-primary rounded-3 p-7 g-0">
               <div class="col-lg-8 offset-lg-2 z-1">
                  <div class="text-center py-md-7">
                     <h2 class="h1 text-white-stable">Reach Out To Us Today!</h2>
                    
                     <a href="/contact-us" class="btn btn-dark">Contact Us</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Speak with expert end-->
   </main>
@endsection


@section('script')
@endsection