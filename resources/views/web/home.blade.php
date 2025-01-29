
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

    <!-- About -->
    <div class="container-fluid mt-5">
        <div class="container">

            <div class="row align-items-top justify-content-center">
            
            <div class="col-12 col-lg-5 col-xl-4 position-relative mb-4">
                
                <div class="position-absolute bg-light p-2 z-1 shadow text-center rounded">
                <div class="bg-warning p-4 rounded">
                    <h5 class="m-0 fw-bold text-dark">25 Years</h5>
                    <p class="m-0 fw-bold text-dark">Experience</p>
                </div>
                </div>

                <div class="p-4 shadow">
                <div class="image image-s rounded-3 shadow">
                    <img src="/img/" class="image-cover" alt="">
                </div>
                </div>
                
            </div>

            <div class="col-11 col-lg-7 col-xl-5 mb-4">

                <div class="h-100">

                <table class="h-100">
                    <tr>
                    <td colspan="3" class="align-top">
                        <div class="border-start border-warning border-5 ps-4 mb-3">
                        <p class="text-secondary mb-0">Welcome to Coco Preschool</p>
                        Empowering Minds for Tomorrow
                        </div>
                    </td>
                    </tr>

                    <tr>
                    <td colspan="3">
                        <p class="mb-3 text-justify">We at <b>Coco Preschool</b> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                    </td>
                    </tr>

                </table>

                </div>
                

            </div>

            </div>

        </div>
    </div>
    
    <!-- facilities -->
    <!-- <div class="container-fluid">
        <div class="container border">
            <div class="row">
                <div class="col text-center">
                        <div class="title-big pb-1 mb-1">
                            <h3>Facilities</h3>
                        
                        </div>
                        <p class="description-p text-muted pe-0 pe-lg-0">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus quas optio reiciendis deleniti voluptatem facere sequi, quia, est sed dicta aliquid quidem facilis culpa iure perferendis? Dolor ad quia deserunt.
                        </p>
                </div>
            </div>
            

            <div class="grid pt-5 mb-5">

                <div class="g-col-12 g-col-md-6 g-col-xl-4 cursor-pointer">
                    <div class="position-relative galBox">
                        <div class="position-absolute w-100 galName z-1" style="bottom: -25px;">
                            <div class="shadow mx-auto rounded-4 bg-light text-dark text-center p-3 w-75">
                                Beam, Column Polymer Work
                            </div>
                        </div>
                        <img src="/img/kids_raisehand.jpg" alt="Beam Column Polymer Work" class="w-100 rounded-4 shadow"  data-aos="fade">
                    </div>
                </div>

                <div class="g-col-12 g-col-md-6 g-col-xl-4 cursor-pointer">
                </div>

               

            </div>
          
        </div>
    </div> -->

    <!-- facilities -->
    <div class="container-fluid mt-5"  id="facilities">
        <div class="container">
                <div class="row justify-content-center gapsectionsecond">
                    <div class="col-lg-7 text-center">
                            <div class="pb-1 mb-1">
                                <h3>Facilities at Coco Preschool</h3>
                                <hr class="w-50 mx-auto">
                            </div>
                            <p class="description-p text-muted pe-0 pe-lg-0">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus quas optio reiciendis deleniti voluptatem facere sequi, quia, est sed dicta aliquid quidem facilis culpa iure perferendis? Dolor ad quia deserunt.
                            </p>
                    </div>
                </div>

            <div class="container">           
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
                    <div class="col">
                        <div class="card h-100 shadow">
                        <img src="/img/play_grounds.jpg" class="card-img-top"
                            alt="Hollywood Sign on The Hill" />    
                        <div class="card-body">
                            <h5 class="card-title text-voilet fw-bolder">Playground</h5>
                            <p class="card-text">
                            This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.
                            </p>
                        </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 shadow">
                        <img src="/img/library.jpeg" class="card-img-top"
                            alt="Palm Springs Road" />
                        <div class="card-body">
                            <h5 class="card-title text-voilet fw-bolder">Library</h5>
                            <p class="card-text">
                            This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.
                            </p>
                        </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 shadow">
                        <img src="/img/lab.jpeg" class="card-img-top"
                            alt="Los Angeles Skyscrapers" />
                        <div class="card-body">
                            <h5 class="card-title text-voilet fw-bolder">Computer Lab</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content.</p>
                        </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 shadow">
                        <img src="/img/art.jpeg" class="card-img-top"
                            alt="Skyscrapers" />
                        <div class="card-body">
                            <h5 class="card-title text-voilet fw-bolder">Art and Craft Supplies</h5>
                            <p class="card-text ">
                            This is a longer card with supporting text below as a natural lead-in to
                            additional content.
                            </p>
                        </div>
                        </div>
                    </div>

                    <div class="col h-100 ">
                        <div class="card shadow">
                        <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/046.webp" class="card-img-top"
                            alt="Skyscrapers" />
                        <div class="card-body">
                            <h5 class="card-title text-voilet fw-bolder">Card title</h5>
                            <p class="card-text">
                            This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.
                            </p>
                        </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 shadow">
                        <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/050.webp" class="card-img-top"
                            alt="Skyscrapers" />
                        <div class="card-body">
                            <h5 class="card-title text-voilet fw-bolder">Card title</h5>
                            <p class="card-text">
                            This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.
                            </p>
                        </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Program -->
    <div class="container-fluid mt-5">
        <div class="container">
            <div class="row justify-content-center gapsectionsecond">
                <div class="col-lg-7 text-center">
                        <div class="pb-1 mb-1">
                            <h3>Our Program</h3>
                            <hr class="w-50 mx-auto">
                        </div>
                        <p class="description-p text-muted pe-0 pe-lg-0">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus quas optio reiciendis deleniti voluptatem facere sequi, quia, est sed dicta aliquid quidem facilis culpa iure perferendis? Dolor ad quia deserunt.
                        </p>
                </div>
            </div>

            <div class="row pt-5 d-flex">
                <div class="col-lg-4 pb-5 pb-lg-0 bg-light shadow">
                            <div class="">
                                <div class="text-center m-4">
                                    <h3>Nursery</h3>
                                    <p class="">Age Limit - 0 to 3 Years $</p>
                                    <div class="detail-pricing">
                                        <span class="float-left"> <i class="bi bi-check2-circle"></i> Photoshoot duration </span>
                                        <span class="float-right">4 Hours</span>
                                    </div>
                                    <div class="detail-pricing">
                                        <span class="float-left"> <i class="bi bi-check2-circle"></i> Number photo</span>
                                        <span class="float-right">50 - 200</span>
                                    </div>
                                    <div class="detail-pricing">
                                        <span class="float-left"> <i class="bi bi-check2-circle"></i> Consultation</span>
                                        <span class="float-right">Style</span>
                                    </div>
                                    <a href="#" class="btn btn-secondary mt-5">Apply Online</a>
                                </div>
                            </div>
                        </div>
                </div>

                <!-- <div class="col-lg-4 pb-5 pb-lg-0">
                        <div class="wrap-price center-wrap">
                            <div class="price-innerdetail text-center">
                                <h5>PRO SERVICE</h5>
                                <p class="prices">350$</p>
                                <div class="detail-pricing">
                                    <span class="float-left"> <i class="bi bi-check2-circle"></i> Photoshoot duration </span>
                                    <span class="float-right">4 Hours</span>
                                </div>
                                <div class="detail-pricing">
                                    <span class="float-left"> <i class="bi bi-check2-circle"></i> Number photo</span>
                                    <span class="float-right">50 - 200</span>
                                </div>
                                <div class="detail-pricing">
                                    <span class="float-left"> <i class="bi bi-check2-circle"></i> Consultation</span>
                                    <span class="float-right">Style</span>
                                </div>
                                <a href="#" class="btn btn-secondary mt-5">Schedule</a>
                            </div>
                        </div>
                    </div>
                    
                </div> -->
            </div>

        </div>
    </div>


    <!-- Gallery -->
    <div class="container-fluid mt-5">
            <div class="container">
                <div class="row justify-content-center gapsectionsecond">
                    <div class="col-lg-7 text-center">
                            <div class="pb-1 mb-1">
                                <h3>Gallery</h3>
                                <hr class="w-50 mx-auto">
                            </div>
                            <p class="description-p text-muted pe-0 pe-lg-0">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus quas optio reiciendis deleniti voluptatem facere sequi, quia, est sed dicta aliquid quidem facilis culpa iure perferendis? Dolor ad quia deserunt.
                            </p>
                    </div>
                </div>

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
           
      
    </div>

    <div class="container">

        <div class="row">
            <div class="col-3">
    
                <div class="image image-cover image-hd">
                    <div class="image-overlay bg-primary opacity-50"></div>
                    <img src="/img/shape.jpg" alt="...">
                </div>
    
            </div>
        </div>

    </div>
   

@endsection



