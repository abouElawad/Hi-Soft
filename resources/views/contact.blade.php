@extends('layout.master')

@section('content')

    <!--=================================
    contact Form -->
    <section class="space-ptb">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="section-title text-center">
              <h1>Contact us</h1>
              <p>Drop us a line! We’ll set up a time to chat over the phone or in-person to know more about your business needs. All primary conferences are free of charge.</p>
            </div>
          </div>
        </div>
        <div class="row justify-content-lg-around position-relative pt-5">
          <div class="col-lg-4 col-md-5 mb-4">
            <div class="is-sticky">
              <h4 class="mb-4">Let’s talk about what you want to accomplish and how we can make it happen.</h4>
              <h5 class="text-light">This is the beginning of creating the life that you want to live.</h5>
            </div>
          </div>
          <div class="col-lg-7 col-md-7 pe-lg-5">
            <div class="p-4 p-md-5 bg-white shadow">
              <h3>Need assistance? please fill the form</h3>
              <form class="mt-4">
                <div class="mb-3">
                  <input type="text" class="form-control" id="exampleInputName" placeholder="Name">
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control" id="exampleInputLname" placeholder="Last Name">
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control" id="exampleInputEmail" placeholder="Email Address">
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control" id="exampleInputEnquiry" placeholder="Enquiry Type">
                </div>
                <div class="mb-4">
                  <textarea class="form-control" id="exampleInputEnquiry-Description" placeholder="Enquiry Description" rows="5"></textarea>
                </div>
                <div class="mb-4">
                  <div class="form-check ms-1">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      I agree to talk about my project with Hi-soft
                    </label>
                  </div>
                </div>
                <div class="mb-0">
                  <button type="submit" class="btn btn-primary">Send Massage<i class="fas fa-arrow-right ps-3"></i></button>
                </div>
              </form>
            </div>
          </div>
          <div class="contact-bg-logo text-center">
            <i class="fas fa-comment"></i>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    contact Form  -->

    <!--=================================
    contact Form info -->
    <section class="space-pb">
      <div class="container">
        <div class="row justify-content-lg-around">
          <div class="col-lg-4 col-md-5 mb-4">
            <div class="is-sticky">
              <div class="section-title">
                <h2>Doing business with us is easy</h2>
              </div>
              <a href="#" class="btn btn-light-round btn-round">Get Direction<i class="fas fa-arrow-right ps-3"></i></a>
            </div>
          </div>
          <div class="col-lg-7 col-md-7 pe-lg-5">
            <div class="row">
              <div class="col-sm-6 mb-4 mb-md-5">
                <img class="img-fluid mb-4" src="images/about/map-lacation-img1.png" alt="">
                <h4>Shanghai</h4>
                <h6 class="text-light mb-0">214 West Arnold St. New York, NY 10002</h6>
              </div>
              <div class="col-sm-6 mb-4 mb-md-5">
                <img class="img-fluid mb-4" src="images/about/map-lacation-img2.png" alt="">
                <h4>Frankfurt</h4>
                <h6 class="text-light mb-0">Fairground St. North Bergen, NJ</h6>
              </div>
              <div class="col-sm-6 mb-4 mb-sm-0">
                <img class="img-fluid mb-4" src="images/about/map-lacation-img3.png" alt="">
                <h4>Chicago</h4>
                <h6 class="text-light mb-0">West Indian Summer St. Missoula</h6>
              </div>
              <div class="col-sm-6">
                <img class="img-fluid mb-4" src="images/about/map-lacation-img4.png" alt="">
                <h4>New York</h4>
                <h6 class="text-light mb-0">Virginia Drive Temple Hills</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    contact Form info-->

    <!--=================================
    News -->
    <section class="space-pb">
      <div class="container">
        <div class="row dark-background">
          <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
            <div class="feature-info feature-info-style-04">
              <div class="feature-info-content">
                <h4 class="mb-3 fw-normal feature-info-title">Careers</h4>
                <p>Walkout 10 years into your future and feel how it feels to carry on doing the same thing.</p>
                <a href="careers.html" class="btn btn-primary-round btn-round text-white">View Positions<i class="fas fa-arrow-right ps-3"></i></a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
            <div class="feature-info feature-info-style-04">
              <div class="feature-info-content">
                <h4 class="mb-3 fw-normal feature-info-title">Latest News</h4>
                <p>This path is just like today, with one difference: you have 10 fewer years remaining in your life.</p>
                <a href="blog.html" class="btn btn-primary-round btn-round text-white">Read Articles<i class="fas fa-arrow-right ps-3"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="feature-info feature-info-style-04">
              <div class="feature-info-content">
                <h4 class="mb-3 fw-normal feature-info-title">Contact</h4>
                <p>I want you to think about how you will feel in 10 years if you continue doing the exact same things.</p>
                <a href="contact.html" class="btn btn-primary-round btn-round text-white">Get in Touch<i class="fas fa-arrow-right ps-3"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    News -->

@endsection
