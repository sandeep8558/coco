
@extends('layouts.web')

@section('head')
<title>Coco Preschool</title>
@endsection

@section('content')
<div data-bs-spy="scroll"  data-bs-smooth-scroll="true">
    @include ('web.home.slider')
   

    <!-- About -->
    <div class="container-fluid mt-5">
        <br><br><br><br>
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
                    <div class="image image-s image-cover rounded-3 shadow">
                        <img src="/img/kids_raisehand.jpg" class="image-cover" alt="img">
                    </div>
                </div>
                
            </div>

            <div class="col-11 col-lg-7 col-xl-5 mb-4">

                <div class="h-100">

                <table class="h-100">
                    <tr>
                        <td colspan="3" class="align-bottom">
                            <div class="border-start border-warning border-5 ps-4 mb-3">
                                <h4 class="text-secondary mb-0">Welcome to Coco Preschool</h4>
                                Empowering Minds for Tomorrow
                            </div>
                        </td>
                    </tr>

                    <tr>
                    <td colspan="3">
                        <p class="mb-3 text-justify">We at <b>Coco Preschool</b> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on onable. the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasThe generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
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
                            <div class="">
                                <img src="/img/play_grounds.jpg" class="card-img-top"
                                alt="Hollywood Sign on The Hill" />  
                            </div>
                         
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
                        <img src="/img/school children.jpg" class="card-img-top"
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
                        <img src="/img/school_stair.jpg" class="card-img-top"
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

                    <div class="col">
                        <div class="card h-100 shadow">
                            <div class="">
                                <img src="/img/play_grounds.jpg" class="card-img-top"
                                alt="Hollywood Sign on The Hill" />  
                            </div>
                         
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
                            <div class="">
                                <img src="/img/play_grounds.jpg" class="card-img-top"
                                alt="Hollywood Sign on The Hill" />  
                            </div>
                         
                        <div class="card-body">
                            <h5 class="card-title text-voilet fw-bolder">Playground</h5>
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
            <div class="row justify-content-center pt-5 gapsectionsecond">
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
   


    <!-- Gallery -->
    <div class="container-fluid mt-5 pt-5">
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

                <!-- <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="false">
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

                        <div class="carousel-item">
                            <div class="card-group">
                                <div class="card">
                                    <img src="/img/shape.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">  <a href="#" class="btn btn-warning">Senior KG</a></h5>
                                        <p class="card-text">Wise Tales</p>
                                    </div>
                                </div>

                                <div class="card">
                                    <img src="/img/shape.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">  <a href="#" class="btn btn-warning">Senior KG</a></h5>
                                        <p class="card-text">Wise Tales</p>
                                    </div>
                                </div>
                    
                                <div class="card">
                                    <img src="/img/shape.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <h5 class="card-title">  <a href="#" class="btn btn-warning">Senior KG</a></h5>
                                    <p class="card-text">Wise Tales</p>
                                    
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
                </div> -->

            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner rounded-4">
                    <div class="carousel-item active">
                        <div class="image image-banner-half image-cover">
                            <img src="/img/schoolpics/whatsapp1.jpeg" class="" alt="...">
                        </div>   
                    </div>
                    <div class="carousel-item">
                        <div class="image image-banner-half image-cover">
                            <img src="/img/schoolpics/whatsapp2.jpeg" class="" alt="...">
                        </div> 
                    </div>
                    <div class="carousel-item">
                        <div class="image image-banner-half image-cover">
                            <img src="/img/schoolpics/whatsapp3.jpeg" class="" alt="...">
                        </div> 
                    </div>
                    <div class="carousel-item">
                        <div class="image image-banner-half image-cover">
                            <img src="/img/schoolpics/whatsapp4.jpeg" class="" alt="...">
                        </div> 
                    </div>
                    <div class="carousel-item">
                        <div class="image image-banner-half image-cover">
                            <img src="/img/schoolpics/whatsapp5.jpeg" class="" alt="...">
                        </div> 
                    </div>
                    <div class="carousel-item">
                        <div class="image image-banner-half image-cover">
                            <img src="/img/schoolpics/whatsapp6.jpeg" class="" alt="...">
                        </div> 
                    </div>
                    
                </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
            </div>
        </div>
    </div>

    <!-- <div class="container">

        <div class="row">
            <div class="col-3">
    
                <div class="image image-cover image-hd">
                    <div class="image-overlay bg-primary opacity-50"></div>
                    <img src="/img/shape.jpg" alt="...">
                </div>
    
            </div>
        </div>

    </div> -->
   

@endsection



