<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Coco Preschool</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

@include('layouts.web.header')


<!-- Header image -->
<div class="container-fluid p-0 position-relative" data-aos="fade" data-aos-duration="1000">
  <div class="row m-0 justify-content-center align-items-center text-center bg-dark w-100 position-absolute z-1 h-100 opacity-75">
    <div class="col">
        <h1 class="text-light opacity-100 display-3 fw-bold" data-aos="flip-left">Contact Us</h1>
    </div>
  </div>
  <img src="/img/one.jpg" alt="contact_us" class="w-100" data-aos-delay="1000" data-aos-duration="3000">
</div>


<!-- content -->
<!-- <div id="contact" class="container py-1 py-md-5 py-xl-8">
    <div class="row justify-content-md-center border">
      <div class="col-12 col-md-10 col-lg-8 col-xl-7">
        <h2 class="mb-4 display-5 text-center">Need Help</h2>
        <p class="text-secondary mb-5 text-center lead fs-4">Our team is available to provide prompt and helpful responses to all inquiries. You can reach us via phone, email, or by filling out the contact form below.</p>
        <hr class="w-50 mx-auto mb-1 mb-xl-9 border-dark-subtle">
      </div>
    </div>
</div> -->

<div id="contact" class="container py-5">
  <div  class="row">
    <div class="col">
        <h2 class="mb-4 display-5 text-center">Need Help?</h2>
        <p class="text-secondary mb-5 text-center lead fs-4">Our team is available to provide prompt and helpful responses to all inquiries. You can reach us via phone, email, or by filling out the contact form below.</p>
        <hr class="w-50 mx-auto mb-1 mb-xl-9 border-dark-subtle">
    </div>
  </div>
</div>


  <div class="container border mb-0 shadow">
    <div class="row">
      <div class="col-12">
        <div class="card border border-0 rounded  overflow-hidden">
          <div class="card-body p-0">
            <div class="row gy-3  gy-lg-0">
              <!-- <div class="col-12 col-lg-6 bsb-overlay background-position-center background-size-cover" style="--bsb-overlay-opacity: 0.7; background-image: url('./img/4.png');"> -->
              <div class="col-12 col-lg-6  background-position-center text-bg-quaternary">
                <div class="row align-items-lg-center justify-content-center h-100">
                  <div class="col-11 col-xl-10">
                    <div class="contact-info-wrapper py-4 py-xl-5">
                      <h2 class="h1 mb-3 text-light">Get in touch</h2>
                      <p class="lead fs-4 text-light opacity-75 mb-4 mb-xxl-5">We're always on the lookout to work with new clients. If you're interested in working with us, please get in touch in one of the following ways.</p>
                      <div class="d-flex mb-4 mb-xxl-5">
                        <div class="me-4 text-primary">
                        <h4><i class="bi bi-geo-alt-fill"></i></h4>
                         <!-- <i class="fa fa-map-marker"></i> -->
                        </div>
                        <div>
                          <h4 class="mb-3 text-light">Address</h4>
                          <address class="mb-0 text-light opacity-75">Dattanagar, Ambernath, Badlapur, Maharashtra 421505</address>
                        </div>
                      </div>
                      <div class="row mb-4 mb-xxl-5">
                        <div class="col-12 col-xxl-6">
                          <div class="d-flex mb-4 mb-xxl-0">
                            <div class="me-4 text-primary">
                              <h4><i class="bi bi-telephone-fill"></i></h4>
                            </div>
                            <div>
                              <h4 class="mb-3 text-light">Phone</h4>
                              <p class="mb-0">
                                <a class="link-light link-opacity-75 link-opacity-100-hover text-decoration-none" href="tel:+15057922430">+91 8888888888</a>
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-xxl-6">
                          <div class="d-flex mb-0">
                            <div class="me-4 text-primary">
                             <h4><i class="bi bi-envelope-fill"></i></h4>
                            </div>
                            <div>
                              <h4 class="mb-3 text-light">E-Mail</h4>
                              <p class="mb-0">
                                <a class="link-light link-opacity-75 link-opacity-100-hover text-decoration-none" href="mailto:demo@yourdomain.com">demo@yourdomain.com</a>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex">
                        <div class="me-4 text-primary">
                         <h4><i class="bi bi-clock-fill"></i></h4>
                        </div>
                        <div>
                          <h4 class="mb-3 text-light">Opening Hours</h4>
                          <div class="d-flex mb-1">
                            <p class="text-light fw-bold mb-0 me-5">Mon - Fri</p>
                            <p class="text-light opacity-75 mb-0">9am - 5pm</p>
                          </div>
                          <div class="d-flex">
                            <p class="text-light fw-bold mb-0 me-5">Sat - Sun</p>
                            <p class="text-light opacity-75 mb-0">9am - 2pm</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-lg-6">
                <div class="row align-items-lg-center h-100">
                  <div class="col-12">
                    <form action="#!">
                      <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                        <div class="col-12">
                          <label for="fullname" class="form-label">Full Name <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="fullname" name="fullname" value="" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>                     
                            <input type="email" class="form-control" id="email" name="email" value="" required> 
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="phone" class="form-label">Phone Number <span class="text-danger">*</span></label>
                            <input type="tel" class="form-control" id="phone" name="phone" value="">
                        </div>
                        <div class="col-12">
                          <label for="subject" class="form-label">Subject <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="subject" name="subject" value="" required>
                        </div>
                        <div class="col-12">
                          <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
                          <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                        </div>
                        <div class="col-12">
                          <div class="d-grid">
                            <button class="btn btn-primary btn-lg" type="submit">Send Message</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
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