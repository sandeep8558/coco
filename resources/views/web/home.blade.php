
@extends('layouts.web')

@section('head')
<title>Coco Preschool</title>
@endsection

@section('content')
<div data-bs-spy="scroll"  data-bs-smooth-scroll="true">
    @include ('web.home.slider')
   
    <!-- <div id="about" class="container mt-5 py-5">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                <h2 class="mb-4 display-5 text-center">About Us</h2>
                <p class="text-secondary mb-5 text-center lead fs-4">We believe in the power of teamwork and collaboration. Our diverse experts work tirelessly to deliver innovative solutions tailored to our clients' needs.</p>
                <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
            </div>
        </div>
  

 
        <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
    
            <div class="col-12 col-lg-6 ">
                <div class="row justify-content-xl-center">
                    <div class="col-12 col-xl-10">
                        <h2 class="mb-3">Why Choose Us?</h2>
                        <p class="lead fs-4 mb-3 mb-xl-5">With years of experience and deep industry knowledge, we have a proven track record of success and are constantly pushing ourselves to stay ahead of the curve.</p>

                        <div class="d-flex align-items-center mb-3">
                            <div class="me-3 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                </svg>
                            </div>
                            <div>
                                <p class="fs-5 m-0">Our evolution procedure is super intelligent.</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mb-3">
                            <div class="me-3 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                </svg>
                            </div>
                            <div>
                                <p class="fs-5 m-0">We deliver services beyond expectations.</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mb-4 mb-xl-5">
                            <div class="me-3 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                </svg>
                            </div>
                            <div>
                                <p class="fs-5 m-0">Let's hire us to reach your objectives.</p>
                            </div>
                        </div>
                       <a href="{{route('contact')}}">
                          <button type="button" class="btn bsb-btn-xl btn-outline-primary rounded-pill">Connect Now</button>
                       </a> 
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6 ">
                <img class="img-fluid rounded" loading="lazy" src="./img/4.png" alt="About 2">
            </div>
        </div>
    </div> -->

    <div class="container py-5 mt-5">
        <h1 class="text-center fs-bw">About Us</h1>
        <div class="row">
            <div class="col-7 border">
                <h2>Who we are?</h2>
                <p>Our team is available to provide prompt and helpful responses to all inquiries. You can reach us via phone, email, or by filling out the contact form below.Our team is available to provide prompt and helpful responses to all inquiries. You can reach us via phone, email, or by filling out the contact form below.Our team is available to provide prompt and helpful responses to all inquiries. You can reach us via phone, email, or by filling out the contact form below.Our team is available to provide prompt and helpful responses to all inquiries. You can reach us via phone, email, or by filling out the contact form below.Our team is available to provide prompt and helpful responses to all inquiries. You can reach us via phone, email, or by filling out the contact form below.</p>
            </div>
            <div class="col-5">
                <img src="img/8.jpg" alt="about_img">
            </div>
        </div>
    </div>
    
</div>
@endsection



