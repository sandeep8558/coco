<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - Coco Preschool</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

@include('layouts.web.header')

<!-- Header image -->
<div class="container-fluid p-0 position-relative" data-aos="fade" data-aos-duration="1000">
  <div class="row m-0 justify-content-center align-items-center text-center bg-dark w-100 position-absolute z-1 h-100 opacity-75">
    <div class="col">
        <h1 class="text-light opacity-100 display-3 fw-bold" data-aos="flip-left">Gallery</h1>
    </div>
  </div>
  <img src="/img/one.jpg" alt="contact_us" class="w-100" data-aos-delay="1000" data-aos-duration="3000">
</div>

<div id="gallery" class="container">

    <div class="container py-3 py-md-5 py-xl-8">
        <div class="row justify-content-md-center">
        <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
            <h2 class="mb-4 display-5 text-center">Gallery</h2>
        </div>
        </div>
    </div>


    <div class="container">

        <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="false">
           

        <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card-group">

                        <div class="card">
                            <img src="/img/stem.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">  <a href="#" class="btn btn-primary">Nursery</a></h5>
                                <p class="card-text">Pizza making</p>
                            </div>
                        </div>

                        <div class="card">
                            <img src="/img/stem.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">  <a href="#" class="btn btn-primary">Nursery</a></h5>
                                <p class="card-text">Pizza making</p>   
                            </div>
                        </div>

                        <div class="card">
                            <img src="/img/stem.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">  <a href="#" class="btn btn-primary">Nursery</a></h5>
                                <p class="card-text">Pizza making</p>
                            </div>
                        </div>

                    </div>
                </div>
            
                <div class="carousel-item">
                    <div class="card-group">
                        <div class="card">
                            <img src="/img/shape.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">  <a href="#" class="btn btn-warning">Junior Kg</a></h5>
                                <p class="card-text">Wise Tales</p>
                            </div>
                        </div>

                        <div class="card">
                            <img src="/img/shape.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">  <a href="#" class="btn btn-warning">Junior Kg</a></h5>
                                <p class="card-text">Wise Tales</p>
                            </div>
                        </div>
                

                        <div class="card">
                            <img src="/img/shape.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">  <a href="#" class="btn btn-warning">Junior Kg</a></h5>
                            <p class="card-text">Wise Tales</p>
                            
                        </div>

                    </div>
                </div>

            </div>

                <!-- <div class="carousel-item">
                    <div class="card-group">

                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>

                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>

                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        
                    </div>
                </div> -->
                
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <!-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
        </div>
    </div>
</div>

@include('layouts.web.footer')
</body>
</html>


