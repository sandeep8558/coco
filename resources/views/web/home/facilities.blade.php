
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facilities - Coco Preschool</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

@include('layouts.web.header')

<!-- Header image -->
<div class="container-fluid p-0 position-relative" data-aos="fade" data-aos-duration="1000">
  <div class="row m-0 justify-content-center align-items-center text-center bg-dark w-100 position-absolute z-1 h-100 opacity-75">
    <div class="col">
        <h1 class="text-light opacity-100 display-3 fw-bold" data-aos="flip-left">Facilities</h1>
    </div>
  </div>
  <img src="/img/one.jpg" alt="contact_us" class="w-100" data-aos-delay="1000" data-aos-duration="3000">
</div>

<div class="container-fluid" id="facilities">
    <div class="container mt-5 py-5">
        <div class="row">
            <div class="col text-center mb-5">
                <h1 class="display-4 fw-bolder">Facilities at Coco Preschool</h1>
                <p class="lead">Lorem ipsum dolor sit amet at enim hac integer volutpat maecenas pulvinar. <p>
            </div>
        </div>

                  


        <div class="container">
           
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
                <div class="col">
                    <div class="card h-100">
                    <!-- <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp" class="card-img-top"
                        alt="Hollywood Sign on The Hill" /> -->
                    <img src="/img/play_grounds.jpg" class="card-img-top"
                        alt="Hollywood Sign on The Hill" />    
                    <div class="card-body">
                        <h5 class="card-title">Playground</h5>
                        <p class="card-text">
                        This is a longer card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.
                        </p>
                    </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                    <img src="/img/library.jpeg" class="card-img-top"
                        alt="Palm Springs Road" />
                    <div class="card-body">
                        <h5 class="card-title">Library</h5>
                        <p class="card-text">
                        This is a longer card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.
                        </p>
                    </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                    <img src="/img/lab.jpeg" class="card-img-top"
                        alt="Los Angeles Skyscrapers" />
                    <div class="card-body">
                        <h5 class="card-title">Computer Lab</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                        additional content.</p>
                    </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                    <img src="/img/art.jpeg" class="card-img-top"
                        alt="Skyscrapers" />
                    <div class="card-body">
                        <h5 class="card-title">Art and Craft Supplies</h5>
                        <p class="card-text">
                        This is a longer card with supporting text below as a natural lead-in to
                        additional content.
                        </p>
                    </div>
                    </div>
                </div>

                <div class="col h-100">
                    <div class="card">
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/046.webp" class="card-img-top"
                        alt="Skyscrapers" />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                        This is a longer card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.
                        </p>
                    </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/050.webp" class="card-img-top"
                        alt="Skyscrapers" />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
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

@include('layouts.web.footer')
</body>
</html>