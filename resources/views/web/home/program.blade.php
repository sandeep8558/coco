<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program - Coco Preschool</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

@include('layouts.web.header')

<!-- Header image -->
<div class="container-fluid p-0 position-relative" data-aos="fade" data-aos-duration="1000">
  <div class="row m-0 justify-content-center align-items-center text-center bg-dark w-100 position-absolute z-1 h-100 opacity-75">
    <div class="col">
        <h1 class="text-light opacity-100 display-3 fw-bold" data-aos="flip-left">Our Program</h1>
    </div>
  </div>
  <img src="/img/one.jpg" alt="contact_us" class="w-100" data-aos-delay="1000" data-aos-duration="3000">
</div>

<!-- Program -->
<div class="container-fluid mt-5">
    <div class="container">
        <div class="row justify-content-center pt-5 gapsectionsecond">
            <div class="col-lg-7 text-center">
                    <div class="pb-1 mb-1">
                        <h3 class="fs-1 fw-bolder text-voilet">Our Program</h3>
                        <hr class="w-50 mx-auto">
                    </div>
                    <p class="description-p text-muted pe-0 pe-lg-0">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus quas optio reiciendis deleniti voluptatem facere sequi, quia, est sed dicta aliquid quidem facilis culpa iure perferendis? Dolor ad quia deserunt.
                    </p>
            </div>
        </div>

        <div class="row text-center pt-3 g-3">
            <div class="col-lg-4 pb-4 bg-light shadow">
                <h3 class="mt-4">Nursery</h3>
                <p class="mb-3">Age Limit - 0 to 3 Years </p>
                <p class="m-0"><i class="bi bi-check2-circle"></i>Photoshoot duration</p>
                <p class="m-0"><i class="bi bi-check2-circle"></i>Number photo</p>
                <p class="m-0"><i class="bi bi-check2-circle"></i>Consultation duration</p>
                <a href="/admission" class="btn btn-voilet m-0 mt-4">Apply Online</a>    
            </div>

            <div class="col-lg-4 pb-4 bg-light shadow">
                <h3 class="mt-4">Junior KG</h3>
                <p class="mb-3">Age Limit - 0 to 3 Years </p>
                <p class="m-0"><i class="bi bi-check2-circle"></i>Photoshoot duration</p>
                <p class="m-0"><i class="bi bi-check2-circle"></i>Number photo</p>
                <p class="m-0"><i class="bi bi-check2-circle"></i>Consultation duration</p>
                <a href="/admission" class="btn btn-voilet m-0 mt-4">Apply Online</a> 
            </div>

            <div class="col-lg-4 pb-4 bg-light shadow">
                <h3 class="mt-4">Senior KG</h3>
                <p class="mb-3">Age Limit - 0 to 3 Years </p>
                <p class="m-0"><i class="bi bi-check2-circle"></i>Photoshoot duration</p>
                <p class="m-0"><i class="bi bi-check2-circle"></i>Number photo</p>
                <p class="m-0"><i class="bi bi-check2-circle"></i>Consultation duration</p>
                <a href="/admission" class="btn btn-voilet m-0 mt-4">Apply Online</a>  
            </div>
        </div>
    </div>
</div>

@include('layouts.web.footer')
</body>
</html>

