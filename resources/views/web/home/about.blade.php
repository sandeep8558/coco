<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Coco Preschool</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

@include('layouts.web.header')

<!-- Header image -->
<div class="container-fluid p-0 position-relative" data-aos="fade" data-aos-duration="1000">
  <div class="row m-0 justify-content-center align-items-center text-center bg-dark w-100 position-absolute z-1 h-100 opacity-75">
    <div class="col">
        <h1 class="text-light opacity-100 display-3 fw-bold" data-aos="flip-left">About Us</h1>
    </div>
  </div>
  <img src="/img/one.jpg" alt="contact_us" class="w-100" data-aos-delay="1000" data-aos-duration="3000">
</div>

<div id="about" class="container mt-5 py-5">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                <h2 class="mb-4 display-5 text-center text-voilet">About Us</h2>
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
                            <div class="me-3 text-voilet">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-check-circle-fill " viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                </svg>
                            </div>
                            <div>
                                <p class="fs-5 m-0 ">Our evolution procedure is super intelligent.</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mb-3">
                            <div class="me-3 text-voilet">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                </svg>
                            </div>
                            <div>
                                <p class="fs-5 m-0">We deliver services beyond expectations.</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mb-4 mb-xl-5">
                            <div class="me-3 text-voilet">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                </svg>
                            </div>
                            <div>
                                <p class="fs-5 m-0">Let's hire us to reach your objectives.</p>
                            </div>
                        </div>
                        <button type="button" class="btn bsb-btn-xl btn-voilet rounded-pill">Connect Now</button>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6 ">
                <img class="img-fluid rounded" loading="lazy" src="/img/4.png" alt="About 2">
            </div>
        </div>
</div>

@include('layouts.web.footer')
</body>
</html>
